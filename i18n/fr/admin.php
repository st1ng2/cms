<?php return [
    "dashboard_page" => [
        "header" => "Tableau de bord",
        "description" => "Sur cette page, vous pouvez voir divers graphiques et statistiques",
        "payments_week" => "Paiements cette semaine",
        "payments_month" => "Paiements ce mois-ci",
        "payments_by_gateways" => "Paiements par passerelles",
        "registrations" => "Inscriptions",
        "registrations_desc" => "Inscriptions cette semaine"
    ],
    "will_be_in_beta" => "Sera en version bêta",
    "menu" => [
        "main-menu" => "Menu principal",
        "additional-menu" => "Menu supplémentaire"
    ],
    "support" => "Support",
    "documentation" => "Documentation",
    "confirm_delete" => "Voulez-vous vraiment supprimer ceci ?",
    "in_dev" => "Le moteur est en cours de développement. La stabilité n'est pas garantie",
    "installed_version" => "Version installée",
    "recent" => "Récemment visité",
    "title" => "name :: Panneau d'administration",
    "main" => "Principal",
    "dashboard" => "Tableau de bord",
    "settings" => "Paramètres",
    "create_log" => "Créer un journal",
    "modules" => [
        "title" => "Modules",
        "list" => "Liste des modules",
        "install" => "Installer un module",
        "catalog" => "Catalogue des modules"
    ],
    "themes" => [
        "title" => "Thèmes",
        "list" => "Liste des thèmes",
        "install" => "Installer un thème",
        "catalog" => "Catalogue des thèmes"
    ],
    "engine_version" => "Version du moteur",
    "check_updates" => "Vérifier les mises à jour",
    "payments.title" => "Passerelles de paiement",
    "payments.list" => "Liste des passerelles",
    "payments.add" => "Ajouter une passerelle",
    "socials.title" => "Pilotes d'authentification",
    "socials.list" => "Liste des pilotes",
    "socials.add" => "Ajouter un pilote",
    "servers.title" => "Serveurs",
    "servers.list" => "Liste des serveurs",
    "users_roles.title" => "Utilisateurs et rôles",
    "users.list" => "Liste des utilisateurs",
    "roles.list" => "Liste des rôles",
    "footer.title" => "Pied de page",
    "footer.customize" => "Personnaliser le pied de page",
    "navbar.title" => "Barre de navigation",
    "navbar.customize" => "Personnaliser la barre de navigation",
    "db_error" => "Erreur de connexion à la base de données",
    "db_not_found" => "Base de données non trouvée",
    "db_already_exists" => "La base de données existe déjà",
    "connection_not_found" => "Connexion ':connectionName' non trouvée",
    "connection_already_exists" => "La connexion ':connectionName' existe déjà",
    "unknown_error" => "Erreur inconnue",
    "success" => "Opération réussie",
    "cannot_delete_last_db" => "Vous ne pouvez pas supprimer la dernière base de données !",
    "cannot_delete_default_db" => "Vous ne pouvez pas supprimer la base de données par défaut !",
    "cannot_delete_last_connection" => "Vous ne pouvez pas supprimer la dernière connexion !",
    "cannot_delete_default_connection" => "Vous ne pouvez pas supprimer la connexion utilisée par le système !",
    "confirm_delete_db" => "Êtes-vous sûr de vouloir supprimer la base de données name ?",
    "confirm_delete_connection" => "Êtes-vous sûr de vouloir supprimer la connexion name ?",
    "add_db_title" => "Ajouter une base de données",
    "edit_db_title" => "Modifier la base de données pour name",
    "add_connection_title" => "Ajouter une connexion",
    "edit_connection_title" => "Modifier les paramètres name",
    "default_db" => "Base de données par défaut",
    "default_db_help" => "Sélectionnez la base de données à utiliser par défaut.",
    "table_prefix" => "Préfixe de table",
    "table_prefix_placeholder" => "Préfixe pour les tables",
    "table_prefix_help" => "Préfixe optionnel pour les noms de table.",
    "db_name" => "Nom de la base de données",
    "db_name_placeholder" => "Indiquez le nom",
    "db_connection_name" => "Nom de la connexion à la base de données",
    "db_connection_name_placeholder" => "Entrez le nom",
    "db_driver" => "Sélectionner le pilote",
    "db_host" => "Hôte",
    "db_host_placeholder" => "Hôte de la base de données",
    "db_user" => "Utilisateur",
    "db_user_placeholder" => "Nom d'utilisateur",
    "db_password" => "Mot de passe",
    "db_password_placeholder" => "Mot de passe",
    "db_port" => "Port",
    "db_port_placeholder" => "Port",
    "settings_bar" => [
        "system" => "Système",
        "auth" => "Authentification",
        "database" => "Base de données",
        "language" => "Langue",
        "smtp" => "SMTP",
        "profile" => "Profil",
        "lk" => "Recharge",
        "cache" => "Cache"
    ],
    "cache" => [
        "clear_all" => "Effacer tout le cache",
        "clear_template" => "Effacer le cache des modèles",
        "clear_translate" => "Effacer le cache des traductions",
        "clear_styles" => "Effacer le cache des styles",
        "all" => "Tout le cache",
        "all_desc" => "Efface tout le cache système. Des modèles aux styles",
        "translate" => "Traductions",
        "translate_desc" => "Efface tout le cache des traductions. Applicable uniquement lorsque le mode de mise en cache des traductions est activé",
        "template" => "Modèles",
        "template_desc" => "Efface tout le cache des modèles. Après avoir effacé le cache, chaque modèle sera recompilé",
        "styles" => "Styles",
        "styles_desc" => "Le modèle met en cache tous les styles des modules / du moteur à l'intérieur du dossier public/. Donc, cela effacera le cache de là"
    ],
    "main_settings" => [
        "header" => "Paramètres principaux",
        "description" => "Paramètres système où vous pouvez modifier les composants principaux du système.",
    ],
    "app" => [
        "name_label" => "Nom",
        "name_description" => "Cette option vous permet de changer le nom du site.",
        "url_label" => "URL",
        "url_description" => "L'adresse URL de votre site.",
        "debug_mode_label" => "Mode débogage",
        "debug_mode_description" => "Activer ou désactiver le mode débogage.",
        "performance_mode_label" => "Mode performance",
        "performance_mode_description" => "Activer le mode pour optimiser les performances.",
        "key_label" => "Clé de sécurité",
        "key_description" => "Clé de sécurité pour usage interne. <b>La clé de l'application n'est pas la clé Steam</b>",
        "hints_label" => "Indications",
        "hints_description" => "Activer l'affichage des indications sur le site.",
        "error_sharing_label" => "Partage des erreurs",
        "error_sharing_description" => "Activer le partage des erreurs avec le serveur Flute",
        "flute_copyright_label" => "Droits d'auteur Flute",
        "flute_copyright_description" => "Afficher le copyright de Flute dans le pied de page",
        "timezone_label" => "Fuseau horaire",
        "timezone_description" => "Spécifiez le fuseau horaire du site.",
        "notifications_label" => "Notifications",
        "notifications_description" => "Configurer les paramètres des notifications.",
        "notifications_all" => "Toutes les notifications",
        "notifications_unread" => "Uniquement non lues",
        "save_button" => "Enregistrer",
        "debug_ips_label" => "Adresses IP de débogage",
        "debug_ips_description" => "Entrez les adresses sur lesquelles le mode débogage sera activé (séparées par des virgules)",
        "get_ip" => "Obtenir mon IP",
        "steam_label" => "Clé API Steam",
        "steam_description" => "Clé nécessaire pour obtenir les avatars depuis les serveurs <a target=\"_blank\" href=\"https://steamcommunity.com/dev/apikey\">Steam</a>",
        "logo" => "Logo",
        "favicon_desc" => "C'est l'icône dans l'onglet de ton navigateur 👀"
    ],
    "lk" => [
        "currency_view_label" => "Devise (vue)",
        "currency_view_description" => "Indiquez la devise affichée sur le site.",
        "min_label" => "Montant minimum",
        "min_description" => "Montant minimum de la recharge",
        "oferta" => "Offre",
        "oferta_description" => "Demander aux utilisateurs de confirmer l'offre ?"
    ],
    "auth_form" => [
        "remember_me_label" => "Se souvenir de moi",
        "remember_me_description" => "Connexion automatique lors de la prochaine visite.",
        "remember_me_duration_label" => "Durée de mémorisation",
        "remember_me_duration_description" => "Temps (en secondes) pendant lequel l'utilisateur restera connecté.",
        "csrf_protection_label" => "Protection CSRF",
        "csrf_protection_description" => "Activer la protection contre les requêtes inter-sites.",
        "reset_password_label" => "Réinitialiser le mot de passe",
        "reset_password_description" => "Autoriser les utilisateurs à réinitialiser leur mot de passe oublié.",
        "security_token_label" => "Jeton de sécurité",
        "security_token_description" => "Utiliser un jeton de sécurité pour une protection supplémentaire.",
        "confirm_email_label" => "Confirmation d'e-mail",
        "confirm_email_description" => "Exiger la confirmation de l'e-mail lors de l'inscription.",
        "social_support_label" => "(NON FONCTIONNEL) Inscription après les réseaux sociaux",
        "social_support_description" => "Autoriser l'inscription avec définition du mot de passe après l'inscription via les réseaux sociaux ?",
        "login_min_length_label" => "Longueur minimale du login",
        "login_min_length_description" => "Longueur minimale autorisée pour le login.",
        "login_max_length_label" => "Longueur maximale du login",
        "login_max_length_description" => "Longueur maximale autorisée pour le login.",
        "password_min_length_label" => "Longueur minimale du mot de passe",
        "password_min_length_description" => "Longueur minimale autorisée pour le mot de passe.",
        "password_max_length_label" => "Longueur maximale du mot de passe",
        "password_max_length_description" => "Longueur maximale autorisée pour le mot de passe.",
        "name_min_length_label" => "Longueur minimale du nom",
        "name_min_length_description" => "Longueur minimale autorisée pour le nom.",
        "name_max_length_label" => "Longueur maximale du nom",
        "name_max_length_description" => "Longueur maximale autorisée pour le nom.",
        "login_validation_label" => "Validation du login",
        "password_validation_label" => "Validation du mot de passe",
        "name_validation_label" => "Validation du nom",
        "only_social" => "Uniquement les réseaux sociaux",
        "only_social_label" => "Rendre l'authentification et l'inscription disponibles uniquement via les réseaux sociaux"
    ],
    "form_database" => [
        "default_database_label" => "Base de données par défaut",
        "default_database_description" => "Sélectionnez la base de données par défaut.",
        "debug_mode_label" => "Mode débogage",
        "debug_mode_description" => "Activer ou désactiver le mode débogage des bases de données.",
        "manage_connections_label" => "Gérer les connexions",
        "manage_connections_description" => "Ajouter, supprimer et modifier les connexions aux bases de données.",
        "manage_databases_label" => "Gérer les bases de données",
        "manage_databases_description" => "Ajouter, supprimer et modifier les bases de données.",
        "add_new_connection_button" => "Ajouter une nouvelle connexion",
        "add_new_database_button" => "Ajouter une nouvelle base de données",
    ],
    "form_lang" => [
        "language_label" => "Langue",
        "language_description" => "Sélectionnez la langue de l'interface du site.",
        "caching_label" => "Mise en cache",
        "caching_description" => "Activer ou désactiver la mise en cache.",
        "langs_available" => "Langues disponibles",
        "langs_available_description" => "Sélectionnez les langues qui seront disponibles dans Flute"
    ],
    "form_mail" => [
        "smtp_enabled_label" => "SMTP Activé",
        "smtp_enabled_description" => "Activer ou désactiver le client SMTP.",
        "smtp_host_label" => "Hôte SMTP",
        "smtp_host_description" => "Adresse du serveur SMTP.",
        "smtp_port_label" => "Port SMTP",
        "smtp_port_description" => "Port du serveur SMTP.",
        "smtp_from_label" => "Adresse de l'expéditeur",
        "smtp_from_description" => "Adresse e-mail de l'expéditeur.",
        "smtp_username_label" => "Nom d'utilisateur SMTP",
        "smtp_username_description" => "Nom d'utilisateur pour SMTP.",
        "smtp_password_label" => "Mot de passe SMTP",
        "smtp_password_description" => "Mot de passe pour SMTP.",
        "smtp_security_label" => "Sécurité SMTP",
        "smtp_security_description" => "Type de sécurité de la connexion (par exemple, TLS).",
    ],
    "form_profile" => [
        "max_banner_size_label" => "Taille maximale de la bannière (Mo)",
        "max_banner_size_description" => "Taille maximale de la bannière en mégaoctets.",
        "max_avatar_size_label" => "Taille maximale de l'avatar (Mo)",
        "max_avatar_size_description" => "Taille maximale de l'avatar en mégaoctets.",
        "banner_file_types_label" => "Types de fichiers de bannière",
        "banner_file_types_description" => "Types de fichiers autorisés pour la bannière.",
        "avatar_file_types_label" => "Types de fichiers d'avatar",
        "avatar_file_types_description" => "Types de fichiers autorisés pour l'avatar.",
        "change_uri_label" => "Changer l'URI",
        "change_uri_description" => "Activer ou désactiver la possibilité de changer l'URI.",
        "convert_to_webp_label" => "Conversion en WebP",
        "convert_to_webp_description" => "Convertir automatiquement les images au format WebP.",
    ],
    "modules_list" => [
        "authors" => "Auteur(s)",
        "header" => "Liste des modules",
        "description" => "Page avec la liste de tous les modules définis dans le système",
        "manage" => "Paramètres du module - key",
        "sp_settings" => "Paramètres de ServiceProvider",
        "sp_error" => "La classe du fournisseur n'est pas définie dans le système",
        "drag" => "Déposez ici l'archive ZIP du module",
        "module_install" => "Installation du module",
        "version" => "Version du module - version",
        "confirm_delete" => "Êtes-vous sûr de vouloir supprimer ce module ?",
        "confirm_install" => "Êtes-vous sûr de vouloir installer ce module ?",
        "module_name" => "Installation du module - name",
        "enable_module" => "Activer le module",
        "disable_module" => "Désactiver le module",
        "install_module" => "Installer le module",
        "delete_module" => "Supprimer le module",
        "module_is_not_exists" => "Le module avec la clé key n'existe pas.",
        "upload_zip_required" => "Vous devez télécharger le fichier ZIP du module.",
        "invalid_zip" => "Format ZIP invalide.",
        "max_zip_size" => "Taille maximale du fichier ZIP - maxSize octets.",
        "zip_open_failed" => "Impossible d'ouvrir l'archive ZIP.",
        "single_folder_expected" => "Un seul dossier racine était attendu dans l'archive ZIP.",
        "module_already_exists" => "Le module avec ce nom existe déjà.",
        "zip_extraction_failed" => "Échec de l'extraction des fichiers de l'archive ZIP.",
        "module_json_not_found" => "Le fichier module.json n'a pas été trouvé à la racine de l'archive.",
        "invalid_module_json" => "Format invalide pour le fichier module.json.",
        "installed_version" => "Version actuelle",
        "last_version" => "Dernière version"
    ],
    "themes_list" => [
        "header" => "Liste des thèmes",
        "description" => "Page affichant la liste de tous les thèmes disponibles dans le système",
        "manage" => "Gérer le thème - key",
        "drag" => "Déposez ici l'archive ZIP du thème",
        "theme_install" => "Installation du thème",
        "version" => "Version du thème - version",
        "confirm_delete" => "Êtes-vous sûr de vouloir supprimer ce thème ?",
        "confirm_install" => "Êtes-vous sûr de vouloir installer ce thème ?",
        "theme_name" => "Installation du thème - name",
        "enable_theme" => "Activer le thème",
        "disable_theme" => "Désactiver le thème",
        "install_theme" => "Installer le thème",
        "delete_theme" => "Supprimer le thème",
        "theme_settings" => "Paramètres du thème",
        "unknown_theme" => "Thème inconnu",
        "upload_zip_required" => "Vous devez télécharger le fichier ZIP du thème.",
        "invalid_zip" => "Format ZIP invalide.",
        "zip_open_failed" => "Impossible d'ouvrir l'archive ZIP.",
        "single_folder_expected" => "Un seul dossier racine était attendu dans l'archive ZIP.",
        "theme_already_exists" => "Le thème avec ce nom existe déjà.",
        "zip_extraction_failed" => "Échec de l'extraction des fichiers de l'archive ZIP.",
        "loader_not_found" => "Le fichier ThemeLoader.php n'a pas été trouvé à la racine de l'archive.",
    ],
    "servers" => [
        "mod" => "Jeu",
        "header" => "Liste des serveurs",
        "description" => "Liste de tous les serveurs ajoutés au CMS",
        "add" => "Ajouter un serveur",
        "delete" => "Supprimer le serveur",
        "confirm_delete" => "Êtes-vous sûr de vouloir supprimer ce serveur ?",
        "change" => "Modifier le serveur",
        "game" => "Jeu",
        "add_title" => "Ajouter un serveur",
        "add_description" => "Sur cette page, vous pouvez ajouter un nouveau serveur au CMS",
        "name_label" => "Nom du serveur",
        "name_placeholder" => "Entrez le nom du serveur",
        "ip_label" => "IP du serveur",
        "ip_placeholder" => "Entrez l'IP du serveur",
        "port_label" => "Port du serveur",
        "port_placeholder" => "Entrez le port du serveur",
        "rcon_label" => "RCON (optionnel)",
        "rcon_placeholder" => "Entrez le mot de passe RCON",
        "game_label" => "Sélection du jeu",
        "edit" => "Modifier le serveur",
        "edit_title" => "Modifier le serveur - server",
        "edit_description" => "Sur cette page, vous pouvez modifier un serveur déjà ajouté au CMS",
        "not_found" => "Le serveur spécifié n'a pas été trouvé",
        "server_duplicate" => "Un serveur avec ces données existe déjà !",
    ],
    "payments" => [
        "header" => "Passerelles de paiement",
        "description" => "Liste des passerelles de paiement nécessaires pour recharger le solde des utilisateurs.",
        "delete" => "Supprimer la passerelle",
        "change" => "Modifier la passerelle",
        "confirm_delete" => "Êtes-vous sûr de vouloir supprimer cette passerelle ?",
        "enable_payment" => "Activer la passerelle",
        "disable_payment" => "Désactiver la passerelle",
        "gateway_label" => "Nom du système de paiement",
        "adapter" => "Identifiant",
        "adapter_description" => "Entrez l'identifiant par lequel le système de paiement sera déterminé. <a href=\"https://github.com/thephpleague/omnipay?tab=readme-ov-file#payment-gateways\" target=\"_blank\">Liste des passerelles de paiement ici</a>",
        "params" => "Paramètres de la passerelle",
        "enabled" => "Activé",
        "enabled_description" => "Activer ou désactiver la passerelle par défaut",
        "add_title" => "Ajout d'une passerelle de paiement",
        "add_description" => "Sur cette page, vous pouvez ajouter une passerelle de paiement au système",
        "gateway_not_exists" => "Le pilote de paiement 'name' n'a pas été trouvé",
        "min_one_value" => "Au moins une valeur doit être spécifiée",
        "exists" => "La passerelle de paiement 'name' existe déjà",
        "edit_title" => "Modification de la passerelle - name",
        "edit_description" => "Sur cette page, vous pouvez modifier les paramètres d'une passerelle spécifique",
        "not_found" => "Passerelle de paiement non trouvée",
        "currency_label" => "Devise",
        "currency_description" => "Indiquez la devise à utiliser pour les systèmes de paiement",
        "payments_header" => "Liste des paiements",
        "payments_descrition" => "Sur cette page, vous pouvez voir tous les paiements effectués et non effectués",
        "promo" => [
            "max_use" => "Utilisation maximale",
            "used" => "Utilisé",
            "list" => "Liste des codes promo",
            "add" => "Ajouter un code promo",
            "header" => "Codes promo pour le paiement",
            "description" => "Liste des codes promo disponibles pour les bonus de recharge de solde par les utilisateurs.",
            "delete" => "Supprimer le code promo",
            "change" => "Modifier le code promo",
            "confirm_delete" => "Êtes-vous sûr de vouloir supprimer ce code promo ?",
            "add_title" => "Ajout d'un code promo",
            "add_description" => "Sur cette page, vous pouvez ajouter un code promo au système",
            "not_found" => "Code promo non trouvé",
            "exists" => "Le code promo 'name' existe déjà",
            "edit_title" => "Modification du code promo - name",
            "edit_description" => "Sur cette page, vous pouvez modifier les paramètres d'un code promo spécifique",
            "promo_duplicate" => "Le code promo avec ce nom existe déjà !",
            "name_label" => "Nom du code promo",
            "max_usages_label" => "Nombre maximal d'utilisations",
            "max_usages" => "500",
            "type_label" => "Type de code promo",
            "value_label" => "Valeur du code promo",
            "expires_at" => "Date d'expiration",
            "percentage" => "Pourcentage",
            "subtract" => "Soustraire",
            "amount" => "Ajouter un montant",
        ]
    ],
    "socials" => [
        "key" => "Identifiant",
        "add_title" => "Ajouter un pilote",
        "add_description" => "Sur cette page, vous pouvez ajouter un pilote pour l'authentification personnalisée des utilisateurs.",
        "social_label" => "Clé du pilote",
        "settings_label" => "Paramètres du pilote",
        "enabled" => "Activé",
        "enabled_description" => "Activer ou désactiver le pilote par défaut",
        "delete" => "Supprimer le pilote",
        "change" => "Modifier le pilote",
        "confirm_delete" => "Êtes-vous sûr de vouloir supprimer ce pilote ?",
        "enable_social" => "Activer le pilote",
        "disable_social" => "Désactiver le pilote",
        "header" => "Liste des pilotes",
        "description" => "Sur cette page, vous pouvez manipuler les pilotes d'authentification via les réseaux sociaux",
        "social_icon_label" => "Icône du réseau social",
        "social_not_exists" => "Le pilote 'name' n'a pas été trouvé !",
        "edit_title" => "Modification du pilote - name",
        "edit_description" => "Sur cette page, vous pouvez modifier les données d'un pilote d'authentification",
        "not_found" => "Pilote non trouvé"
    ],
    "users" => [
        "created" => "Date d'inscription",
        "change" => "Modifier",
        "delete" => "Supprimer",
        "header" => "Liste des utilisateurs",
        "description" => "Liste de tous les utilisateurs enregistrés sur le site",
        "edit" => "Modifier l'utilisateur",
        "edit_title" => "Modification de l'utilisateur name",
        "edit_description" => "Modifier les informations de l'utilisateur",
        "name" => "Nom",
        "email" => "Email",
        "balance" => "Solde",
        "login" => "Connexion",
        "uri" => "URI",
        "roles" => "Rôles",
        "information" => "Informations sur l'utilisateur",
        "created_at" => "Date de création",
        "verified" => "Vérifié",
        "hidden" => "Caché",
        "not_verf" => "Non vérifié",
        "verf" => "Vérifié",
        "not_hid" => "Non caché",
        "hid" => "Caché",
        "logs" => "Journaux",
        "social" => "Réseaux sociaux",
        "devices" => "Appareils",
        "not_found" => "Utilisateur non trouvé",
        "action" => "Action",
        "action_details" => "Détails",
        "action_date" => "Date de l'action",
        "device" => "Appareil",
        "login_error" => "Format de connexion incorrect",
        "role_priority_error" => "Le rôle 'role' a une priorité supérieure à la vôtre",
        "cannot_remove_highest_role" => "Vous ne pouvez pas supprimer un rôle ayant la même priorité que le vôtre !",
        "permission_error" => "Selon vos permissions, vous ne pouvez pas effectuer cette suppression",
        "cannot_delete_self" => "Vous ne pouvez pas vous supprimer vous-même !",
        "invoices" => [
            "title" => "Factures",
            "gateway" => "Passerelle de paiement",
            "amount" => "Montant",
            "promo" => "Code promo",
            "paid_at" => "Date de paiement"
        ]
    ],
    "roles" => [
        "priority" => "Priorité",
        "header" => "Liste des rôles",
        "description" => "Sur cette page sont répertoriés tous les rôles existants dans Flute",
        "empty" => "La liste des rôles est vide",
        "add" => "Créer un rôle",
        "edit_title" => "Modification du rôle - name",
        "edit_description" => "Page de modification du rôle",
        "role_label" => "Nom du rôle",
        "role_color" => "Couleur de mise en évidence du rôle",
        "permissions" => "Permissions",
        "perm_desc" => "Sélectionnez les permissions nécessaires pour le rôle",
        "no_access" => "Vous n'avez pas accès à ce rôle !",
        "add_title" => "Ajout d'un rôle",
        "add_description" => "Sur cette page, vous pouvez ajouter un nouveau rôle",
        "confirm_delete" => "Êtes-vous sûr de vouloir supprimer ce rôle ?"
    ],
    "navigation" => [
        "confirm_delete" => "Êtes-vous sûr de vouloir supprimer cet élément ?",
        "header" => "Liste de navigation",
        "description" => "Sur cette page, vous pouvez configurer tous les éléments de navigation",
        "add" => "Ajouter un élément",
        "not_found" => "Élément non trouvé",
        "add_title" => "Ajout d'un élément",
        "add_description" => "Sur cette page, vous pouvez ajouter un nouvel élément de navigation",
        "navigation_label" => "Nom de l'élément",
        "icon_label" => "Icône",
        "icon_desc" => "Obtenez des icônes à partir <a href=\"https://phosphoricons.com/\" target=\"_blank\">ici</a>. <br> (Exemple) Entrez uniquement ce qui est en gras : &lt;i class=&quot;<b>ph ph-air-traffic-control</b>&quot;&gt;&lt;/i&gt;",
        "url_label" => "URL",
        "new_tab" => "Nouvel onglet",
        "new_tab_description" => "Ouvrir dans un nouvel onglet ?",
        "visible_only_for_guests" => "Visible uniquement pour les invités",
        "visible_only_for_guests_description" => "Afficher cet élément uniquement aux utilisateurs non connectés ?",
        "visible_only_for_logged_in" => "Visible uniquement pour les utilisateurs connectés",
        "visible_only_for_logged_in_description" => "Afficher cet élément uniquement aux utilisateurs connectés ?",
        "roles" => "Rôles",
        "roles_desc" => "Sélectionnez les rôles qui auront accès à cet élément. Vous pouvez ne rien sélectionner",
        "edit_title" => "Modification de name",
        "edit_description" => "Sur cette page, vous pouvez modifier un élément de navigation",
        "edit" => "Modifier l'élément",
    ],
    "footer" => [
        "social" => "Réseaux sociaux",
        "confirm_delete" => "Voulez-vous vraiment supprimer ce lien ?",
        "social_confirm_delete" => "Voulez-vous vraiment supprimer ce réseau social ?",
        "header" => "Liste des liens de pied de page",
        "description" => "Sur cette page, vous pouvez configurer tous les liens dans le pied de page du site",
        "add" => "Ajouter un lien",
        "not_found" => "Lien non trouvé",
        "add_title" => "Ajout d'un lien",
        "add_description" => "Sur cette page, vous pouvez ajouter un nouveau lien dans le pied de page",
        "footer_label" => "Nom du lien",
        "url_label" => "URL",
        "new_tab" => "Nouvel onglet",
        "new_tab_description" => "Ouvrir dans un nouvel onglet ?",
        "edit_title" => "Modification de name",
        "edit_description" => "Sur cette page, vous pouvez modifier un lien dans le pied de page",
        "edit" => "Modifier le lien",
        "social_delete" => "Supprimer le réseau social",
        "social_change" => "Modifier le réseau social",
        "social_header" => "Liste des réseaux sociaux dans la navigation",
        "social_description" => "Sur cette page sont répertoriés tous les réseaux sociaux affichés dans le pied de page du site",
        "social_add" => "Ajouter un réseau social",
        "social_add_title" => "Ajout d'un réseau social",
        "social_add_description" => "Sur cette page, vous pouvez ajouter un nouveau réseau social dans le pied de page du site",
        "social_footer_label" => "Nom du lien",
        "social_icon_label" => "Code de l'icône",
        "social_url_label" => "URL",
        "social_edit_title" => "Modification de - name",
        "social_edit_description" => "Sur cette page, vous pouvez modifier les paramètres du lien"
    ],
    "pages" => [
        "title" => "Pages personnalisées",
        "header" => "Pages personnalisées",
        "add" => "Ajouter une page",
        "description" => "Sur cette page, vous pouvez créer des pages personnalisées pour différents chemins. Pas besoin d'écrire de modules pour les règles ! :)",
        "edit_title" => "Modification de la page : :name",
        "edit_description" => "Ici, vous pouvez modifier les paramètres de la page",
        "add_title" => "Ajout d'une page personnalisée",
        "add_description" => "Sur cette page, vous pouvez ajouter une page personnalisée",
        "route_label" => "Chemin",
        "route_desc" => "Lien vers la page",
        "title_label" => "Titre",
        "description_label" => "Description",
        "keywords_label" => "Mots clés",
        "keywords_desc" => "Entrez les mots clés pour référencer cette page dans les moteurs de recherche. <b>(Ex. \"csgo, cs2, cs2 server\")</b>",
        "robots_label" => "Directives pour les robots",
        "robots_desc" => "Quelle directive d'indexation utiliser. <a href=\"https://developers.google.com/search/docs/crawling-indexing/robots-meta-tag?hl=fr#directives\" target=\"_blank\">Toutes les règles sont spécifiées ici</a>",
        "og_title_label" => "OG : Titre",
        "og_description_label" => "OG : Description",
        "og_image_label" => "OG : Image",
        "permission_label" => "Permissions",
        "permission_description" => "Gérer l'accès à cette page",
        "permissions" => "Permissions d'accès",
        "perm_desc" => "Sélectionnez les permissions d'accès à cette page",
        "validate_route_error" => "Votre lien n'est pas valide",
        "route_exists" => "Une page avec ce lien existe déjà !",
        "not_found" => "Cette page n'existe pas !",
        "content" => "Contenu de la page",
    ],
    "notifications" => [
        "title" => "Notifications",
        "header" => "Notifications personnalisées",
        "description" => "Sur cette page, vous pouvez configurer des notifications personnalisées pour n'importe quel événement dans le CMS",
        "add" => "Ajouter une notification",
        "not_found" => "Cet événement n'a pas été trouvé !",
        "event" => "Événement",
        "icon" => "Icône",
        "icon_desc" => "Obtenez des icônes à partir <a href=\"https://phosphoricons.com/\" target=\"_blank\">ici</a>. <br> (Exemple) Entrez comme dans l'exemple : <br><b>&lt;i class=\"ph ph-air-traffic-control\"&gt;&lt;/i&gt;</b>",
        "url" => "Lien (facultatif)",
        "title_label" => "Titre de la notification",
        "content" => "Contenu de la notification",
        "content_desc" => "Paramètres disponibles : <code>{name}</code>, <code>{login}</code>, <code>{email}</code>, <code>{balance}</code>",
        "edit_title" => "Modification de la notification",
        "edit_description" => "Sur cette page, vous pouvez modifier les paramètres du listener pour les notifications.",
        "add_title" => "Ajout d'un auditeur",
        "add_description" => "Sur cette page, vous pouvez ajouter une notification pour n'importe quel événement dans le CMS Flute"
    ],
    "api" => [
        "add_title" => "Ajout d'une nouvelle clé API",
        "add_description" => "Sur cette page, vous pouvez émettre une nouvelle clé API avec des droits spécifiques",
        "key" => "Votre clé",
        "permissions" => "Droits de la clé",
        "perm_desc" => "La clé doit avoir des droits d'exécution. C'est ici qu'ils sont sélectionnés",
        "header" => "Liste des clés API émises",
        "description" => "Cette page présente la liste de toutes les clés dans le moteur",
        "add" => "Ajouter une nouvelle clé API",
        "regenerate" => "Régénérer"
    ],    
    "databases" => [
        "title" => "Connexions BD",
        "server_not_found" => "Serveur non trouvé",
        "params_empty" => "Certains paramètres sont vides",
        "setting_description" => "Ici, vous pouvez configurer l'association d'un pilote de BD spécifique au serveur",
        "add" => "Ajouter une connexion",
        "dbname" => "Nom de la BD",
        "dbname_desc" => "Cette BD sera utilisée par le pilote",
        "server" => "Serveur associé",
        "add_description" => "Sur cette page, vous pouvez ajouter une nouvelle connexion entre le serveur et la BD",
        "mod" => "Nom du pilote",
        "mod_desc" => "C'est le pilote qui sera associé au serveur",
        "server_label" => "Serveur",
        "edit_title" => "Modification de la connexion",
        "edit_description" => "Sur cette page, vous pouvez modifier la connexion d'un serveur spécifique",
        "settings" => "Paramètres supplémentaires"
    ],
    "composer" => [
        "title" => "Compositeur",
        "setting_description" => "Sur cette page, vous pouvez ajouter ou supprimer un nouveau paquet Composer",
        "name" => "Nom du paquet",
        "installed" => "Version installée",
        "add" => "Ajouter un paquet",
        "add_description" => "Cette page présente un tableau de tous les paquets Composer. Vous pouvez en installer n'importe lequel",
        "packageName" => "Nom du paquet",
        "description" => "Description",
        "downloads" => "Téléchargements",
        "download" => ""
    ],
    "translate" => [
        "title" => "Traductions",
        "setting_description" => "Sur cette page, vous pouvez créer vos propres phrases pour Flute avec la clé <kbd>custom.</kbd>",
        "edit" => "Modification des phrases de traduction - :code",
        "edit_description" => "Sur cette page, vous pouvez créer ou modifier de nouvelles traductions avec la clé <kbd>custom.</kbd>",
        "translations" => "Phrases"
    ],
    "currency" => [
        "title" => "Devises",
        "setting_description" => "Liste des devises personnalisées créées dans Flute",
        "currency" => "Devise (code)",
        "add" => "Ajouter une devise",
        "add_description" => "Sur cette page, vous pouvez ajouter une nouvelle devise",
        "min_value" => "Valeur minimale",
        "min_value_desc" => "Indiquez le montant minimum de recharge pour cette devise",
        "exchange_rate" => "Taux de change",
        "exchange_rate_desc" => "Indiquez le pourcentage de conversion du montant dans cette devise",
        "gateway" => "Applicable à quels portails de paiement",
        "edit" => "Modification de la devise",
        "edit_description" => "Sur cette page, vous pouvez modifier les paramètres de la devise"
    ],
    "confirm_install" => "Êtes-vous sûr de vouloir installer cela ?",
    "may_have_errors" => "Cette fonction peut fonctionner de manière instable !"    
];
