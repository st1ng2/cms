<?php

namespace Flute\Core\Modules\Actions;

use Flute\Core\Database\Entities\Module;
use Flute\Core\Modules\Contracts\ModuleActionInterface;
use Flute\Core\Modules\Exceptions\DependencyException;
use Flute\Core\Modules\ModuleDependencies;
use Flute\Core\Modules\ModuleInformation;
use Flute\Core\Modules\ModuleManager;
use Flute\Core\Theme\ThemeManager;

class ModuleUpdate implements ModuleActionInterface
{
    protected ModuleManager $moduleManager;
    protected ModuleDependencies $moduleDependencies;

    public function action(ModuleInformation &$module, ?ModuleManager $moduleManager = null): bool
    {
        $this->moduleManager = $moduleManager ?? app(ModuleManager::class);
        $this->moduleDependencies = $this->moduleManager->getModuleDependencies();

        $moduleGet = $this->moduleManager->getModule($module->key);

        $updaterClassDir = sprintf('\Flute\\Modules\\%s\\Updater', $module->key);

        if (!$moduleGet)
            throw new \Exception("Module {$module->key} wasn't found in the system");

        if ($moduleGet->status === 'notinstalled')
            throw new \RuntimeException('Module is not installed');

        $this->checkModuleDependencies($moduleGet);

        if (class_exists($updaterClassDir)) {
            $updater = new $updaterClassDir($module->key);

            $currentVersion = $moduleGet->installedVersion;
            $newVersion = $module->version;

            if (version_compare($newVersion, $currentVersion, '>')) {
                $this->runUpdates($updater, $currentVersion, $newVersion);
            }
        } else {
            $newVersion = $module->version;
        }

        $this->updateDb($module, $newVersion);
        $this->dispatchUpdateEvent($module);

        return true;
    }

    protected function checkModuleDependencies(ModuleInformation $module)
    {
        try {
            /** @var ThemeManager $themeManager */
            $themeManager = app(ThemeManager::class);

            $this->moduleDependencies->checkDependencies($module->dependencies, $this->moduleManager->getActive(), $themeManager->getThemeInfo());
        } catch (DependencyException $e) {
            logs('modules')->emergency("Flute module \"" . $module->key . "\" dependency check failed - " . $e->getMessage());
            throw new DependencyException($e->getMessage());
        }
    }

    protected function runUpdates($updater, $currentVersion, $newVersion)
    {
        $currentVersionParts = explode('.', $currentVersion);
        $newVersionParts = explode('.', $newVersion);

        while (version_compare($currentVersion, $newVersion, '<')) {
            $currentVersion = $this->incrementVersion($currentVersionParts);
            $updateMethod = 'update_' . implode('_', $currentVersionParts);

            if (method_exists($updater, $updateMethod)) {
                $updater->$updateMethod();
            }
        }
    }

    protected function incrementVersion(&$versionParts)
    {
        $versionParts[count($versionParts) - 1]++;
        for ($i = count($versionParts) - 1; $i > 0; $i--) {
            if ($versionParts[$i] >= 10) {
                $versionParts[$i] = 0;
                $versionParts[$i - 1]++;
            }
        }
        return implode('.', $versionParts);
    }

    protected function updateDb(ModuleInformation $moduleInformation, $newVersion): void
    {
        $module = rep(Module::class)->findOne([
            "key" => $moduleInformation->key,
        ]);

        $module->installedVersion = $newVersion;

        transaction($module)->run();

        logs('modules')->info("Module {$module->key} was updated to version $newVersion in the Flute!");
    }

    protected function dispatchUpdateEvent(ModuleInformation $moduleInformation)
    {
        $event = new \Flute\Core\Modules\Events\ModuleUpdate($moduleInformation->key, $moduleInformation);

        events()->dispatch($event, \Flute\Core\Modules\Events\ModuleUpdate::NAME);
    }
}
