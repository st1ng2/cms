@extends('Core.Admin.Http.Views.layout', [
    'title' => __('admin.title', ['name' => __('admin.databases.add')]),
])

@push('content')
    <div class="admin-header d-flex justify-content-between align-items-center">
        <div>
            <a class="back-btn" href="{{ url('admin/databases/list') }}">
                <i class="ph ph-arrow-left ignore"></i>
                @t('def.back')
            </a>
            <h2>@t('admin.databases.add')</h2>
            <p>@t('admin.databases.add_description')</p>
        </div>
    </div>

    <form id="databaseForm" data-form-type="add" enctype="multipart/form-data">
        @csrf
        <div class="position-relative row form-group">
            <div class="col-sm-3 col-form-label required">
                <label for="dbname">@t('admin.databases.dbname')</label>
                <small class="form-text text-muted">@t('admin.databases.dbname_desc')</small>
            </div>
            <div class="col-sm-9">
                <select name="dbname" id="dbname" class="form-control">
                    @foreach (config('database.databases') as $key => $val)
                        <option value="{{ $key }}">{{ $key }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="position-relative row form-group">
            <div class="col-sm-3 col-form-label required">
                <label for="sid">@t('admin.databases.server_label')</label>
            </div>
            <div class="col-sm-9">
                <select name="sid" id="sid" class="form-control">
                    @foreach ($servers as $server)
                        <option value="{{ $server->id }}">{{ $server->id }} - {{ $server->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="position-relative row form-group">
            <div class="col-sm-3 col-form-label required">
                <label for="mod">@t('admin.databases.mod')</label>
                <small class="form-text text-muted">@t('admin.databases.mod_desc')</small>
            </div>
            <div class="col-sm-9">
                <select name="mod" id="mod" class="form-control">
                    <option value="" selected disabled>@t('admin.databases.select_mod')</option>
                    @foreach ($mods as $groupName => $group)
                        <optgroup label="{{ $groupName }}">
                            @foreach ($group as $mod)
                                <option value="{{ $mod['name'] }}">{{ $mod['name'] }}</option>
                            @endforeach
                        </optgroup>
                    @endforeach
                    <option value="custom">@t('admin.databases.custom_mod')</option>
                </select>
                <div id="customModParameters" style="display: none;">
                    <input type="text" class="form-control mt-2" name="custom_mod" placeholder="@t('admin.databases.mod')"
                        id="custom_mod_input" />
                </div>
            </div>
        </div>

        <div id="modParameters"></div>

        <div class="position-relative row form-group" id="editorContainer" style="display: none;">
            <div class="col-sm-3 col-form-label required">
                <label for="additional">
                    @t('admin.databases.settings')
                </label>
            </div>
            <div class="col-sm-9">
                <div class="editor-ace" id="editor">{}</div>
            </div>
        </div>

        <!-- Submit button -->
        <div class="position-relative row form-check">
            <div class="col-sm-9 offset-sm-3">
                <button type="submit" id="submitButton" class="btn size-m btn--with-icon primary" disabled>
                    @t('def.save')
                    <span class="btn__icon arrow"><i class="ph ph-arrow-right"></i></span>
                </button>
            </div>
        </div>
    </form>
@endpush

@push('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-beautify/1.15.1/beautify.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.js" type="text/javascript" charset="utf-8"></script>
    <script>
        var mods = {!! json_encode($mods) !!};
    </script>
    @at('Core/Admin/Http/Views/assets/js/pages/database/add.js')
@endpush
