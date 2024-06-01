<?php return [
    "dashboard_page" => [
        "header" => "仪表板",
        "description" => "在这个页面上，您可以看到各种图表和统计数据。",
        "payments_week" => "本周付款",
        "payments_month" => "本月付款",
        "payments_by_gateways" => "支付网关",
        "registrations" => "注册",
        "registrations_desc" => "本周注册"
    ],
    "will_be_in_beta" => "将在测试版发布中",
    "menu" => [
        "main-menu" => "主菜单",
        "additional-menu" => "附加菜单"
    ],
    "support" => "支持",
    "documentation" => "文档",
    "confirm_delete" => "您确定要删除吗？",
    "in_dev" => "引擎正在开发中。稳定性不能保证",
    "installed_version" => "安装版本",
    "recent" => "最近访问",
    "title" => "name :: 管理面板",
    "main" => "主要",
    "dashboard" => "仪表板",
    "settings" => "设置",
    "create_log" => "创建报告",
    "modules" => [
        "title" => "模块",
        "list" => "模块列表",
        "install" => "安装模块",
        "catalog" => "模块目录"
    ],
    "themes" => [
        "title" => "主题",
        "list" => "主题列表",
        "install" => "安装主题",
        "catalog" => "主题目录"
    ],
    "engine_version" => "引擎版本",
    "check_updates" => "检查更新",
    "payments.title" => "支付网关",
    "payments.list" => "网关列表",
    "payments.add" => "添加网关",
    "socials.title" => "认证驱动程序",
    "socials.list" => "驱动程序列表",
    "socials.add" => "添加驱动程序",
    "servers.title" => "服务器",
    "servers.list" => "服务器列表",
    "users_roles.title" => "用户和角色",
    "users.list" => "用户列表",
    "roles.list" => "角色列表",
    "footer.title" => "页脚",
    "footer.customize" => "自定义页脚",
    "navbar.title" => "导航",
    "navbar.customize" => "自定义导航",
    "db_error" => "数据库连接错误",
    "db_not_found" => "未找到数据库",
    "db_already_exists" => "数据库已经存在",
    "connection_not_found" => "未找到连接':connectionName'",
    "connection_already_exists" => "连接':connectionName'已经存在",
    "unknown_error" => "未知错误",
    "success" => "操作成功完成",
    "cannot_delete_last_db" => "您不能删除唯一的数据库！",
    "cannot_delete_default_db" => "您不能删除系统数据库！",
    "cannot_delete_last_connection" => "您不能删除唯一的连接！",
    "cannot_delete_default_connection" => "您不能删除涉及系统的连接！",
    "confirm_delete_db" => "您确定要删除数据库名称吗？",
    "confirm_delete_connection" => "您确定要删除连接名称吗？",
    "add_db_title" => "添加数据库",
    "edit_db_title" => "编辑名称的数据库",
    "add_connection_title" => "添加连接",
    "edit_connection_title" => "编辑名称参数",
    "default_db" => "默认数据库",
    "default_db_help" => "选择连接的数据库。",
    "table_prefix" => "表前缀",
    "table_prefix_placeholder" => "表前缀",
    "table_prefix_help" => "表名称的可选前缀。",
    "db_name" => "数据库名称",
    "db_name_placeholder" => "指定名称",
    "db_connection_name" => "连接名称",
    "db_connection_name_placeholder" => "写一个名称",
    "db_driver" => "驱动程序选择",
    "db_host" => "主机",
    "db_host_placeholder" => "数据库主机",
    "db_user" => "用户",
    "db_user_placeholder" => "用户名",
    "db_password" => "密码",
    "db_password_placeholder" => "密码",
    "db_port" => "端口",
    "db_port_placeholder" => "端口",
    "settings_bar" => [
        "system" => "系统",
        "auth" => "认证",
        "database" => "数据库",
        "language" => "语言",
        "smtp" => "SMTP",
        "profile" => "个人资料",
        "lk" => "充值",
        "cache" => "缓存"
    ],
    "cache" => [
        "clear_all" => "清除所有缓存",
        "clear_template" => "清除模板缓存",
        "clear_translate" => "清除翻译缓存",
        "clear_styles" => "清除样式缓存",
        "all" => "通用缓存",
        "all_desc" => "清除所有系统缓存。从模板到样式",
        "translate" => "翻译",
        "translate_desc" => "清除所有翻译缓存。仅在启用翻译缓存时有效",
        "template" => "模板",
        "template_desc" => "清除所有模板缓存。清除缓存后，每个模板都将重新编译",
        "styles" => "样式",
        "styles_desc" => "模板将所有模块/引擎样式缓存在 public/ 文件夹中。因此，它将从那里清除缓存"
    ],
    "main_settings" => [
        "header" => "主要设置",
        "description" => "系统设置，您可以在其中更改系统的主要组件",
    ],
    "app" => [
        "name_label" => "名称",
        "name_description" => "此选项允许您更改站点名称。",
        "url_label" => "URL",
        "url_description" => "您网站的 URL 地址。",
        "debug_mode_label" => "调试模式",
        "debug_mode_description" => "启用或禁用调试模式。",
        "performance_mode_label" => "性能模式",
        "performance_mode_description" => "激活优化性能的模式。",
        "key_label" => "安全密钥",
        "key_description" => "内部使用的安全密钥。<b>应用密钥不是 Steam 密钥</b>",
        "hints_label" => "提示",
        "hints_description" => "在站点上启用显示提示。",
        "error_sharing_label" => "错误共享",
        "error_sharing_description" => "启用向 Flute 服务器报告错误",
        "flute_copyright_label" => "Flute 版权",
        "flute_copyright_description" => "在页脚显示 Flute 版权",
        "timezone_label" => "时区",
        "timezone_description" => "指定网站的时区。",
        "notifications_label" => "通知",
        "notifications_description" => "配置通知设置。",
        "notifications_all" => "所有通知",
        "notifications_unread" => "仅未读",
        "save_button" => "保存",
        "debug_ips_label" => "调试 IP 地址",
        "debug_ips_description" => "输入调试模式将启用的地址（逗号分隔）",
        "get_ip" => "获取我的 IP",
        "steam_label" => "STEAM API 密钥",
        "steam_description" => "从 <a target=\"_blank\" href=\"https://steamcommunity.com/dev/apikey\">Steam</a> 服务器获取头像所需的密钥",
        "logo" => "标志",
        "favicon_desc" => "这是浏览器标签页中的小图标 👀"
    ],
    "lk" => [
        "currency_view_label" => "货币（视图）",
        "currency_view_description" => "指定在网站上显示的货币。",
        "min_label" => "最低金额",
        "min_description" => "最低充值金额",
        "oferta" => "提供",
        "oferta_description" => "用户是否需要确认报价？"
    ],
    "auth_form" => [
        "remember_me_label" => "记住我",
        "remember_me_description" => "在下次访问时自动登录系统。",
        "remember_me_duration_label" => "记住我持续时间",
        "remember_me_duration_description" => "用户保持登录状态的时间（以秒为单位）。",
        "csrf_protection_label" => "CSRF 保护",
        "csrf_protection_description" => "启用防止跨站点请求伪造的保护。",
        "reset_password_label" => "重置密码",
        "reset_password_description" => "允许用户重置忘记的密码。",
        "security_token_label" => "安全令牌",
        "security_token_description" => "使用安全令牌进行额外保护。",
        "confirm_email_label" => "电子邮件确认",
        "confirm_email_description" => "注册时是否需要电子邮件确认。",
        "social_support_label" => "（不起作用）社交网络注册后",
        "social_support_description" => "是否应在社交网络注册后进行密码设置注册？",
        "login_min_length_label" => "最小登录长度",
        "login_min_length_description" => "允许的最小登录长度。",
        "login_max_length_label" => "最大登录长度",
        "login_max_length_description" => "允许的最大登录长度。",
        "password_min_length_label" => "最小密码长度",
        "password_min_length_description" => "允许的最小密码长度。",
        "password_max_length_label" => "最大密码长度",
        "password_max_length_description" => "允许的最大密码长度。",
        "name_min_length_label" => "最小名称长度",
        "name_min_length_description" => "允许的最小名称长度。",
        "name_max_length_label" => "最大名称长度",
        "name_max_length_description" => "允许的最大名称长度。",
        "login_validation_label" => "登录验证",
        "password_validation_label" => "密码验证",
        "name_validation_label" => "名称验证",
        "only_social" => "仅限社交网络",
        "only_social_label" => "使授权和注册仅通过社交网络进行"
    ],
    "form_database" => [
        "default_database_label" => "默认数据库",
        "default_database_description" => "选择默认数据库。",
        "debug_mode_label" => "调试模式",
        "debug_mode_description" => "启用或禁用数据库调试模式。",
        "manage_connections_label" => "管理连接",
        "manage_connections_description" => "添加、删除和修改数据库连接。",
        "manage_databases_label" => "管理数据库",
        "manage_databases_description" => "添加、删除和修改数据库。",
        "add_new_connection_button" => "添加新连接",
        "add_new_database_button" => "添加新数据库",
    ],
    "form_lang" => [
        "language_label" => "语言",
        "language_description" => "选择站点界面的语言。",
        "caching_label" => "缓存",
        "caching_description" => "启用或禁用缓存。",
        "langs_available" => "可用语言",
        "langs_available_description" => "选择将在Flute中可用的语言"
    ],
    "form_mail" => [
        "smtp_enabled_label" => "启用 SMTP",
        "smtp_enabled_description" => "启用 SMTP 客户端。",
        "smtp_host_label" => "SMTP 主机",
        "smtp_host_description" => "SMTP 服务器地址。",
        "smtp_port_label" => "SMTP 端口",
        "smtp_port_description" => "SMTP 服务器端口。",
        "smtp_from_label" => "发件人地址",
        "smtp_from_description" => "发件人电子邮件地址。",
        "smtp_username_label" => "SMTP 用户名",
        "smtp_username_description" => "SMTP 的用户名。",
        "smtp_password_label" => "SMTP 密码",
        "smtp_password_description" => "SMTP 的密码。",
        "smtp_security_label" => "SMTP 安全性",
        "smtp_security_description" => "连接安全类型（例如，TLS）。"
    ],
    "form_profile" => [
        "max_banner_size_label" => "最大横幅尺寸（MB）",
        "max_banner_size_description" => "横幅的最大尺寸（以兆字节为单位）。",
        "max_avatar_size_label" => "最大头像尺寸（MB）",
        "max_avatar_size_description" => "头像的最大尺寸（以兆字节为单位）。",
        "banner_file_types_label" => "横幅文件类型",
        "banner_file_types_description" => "横幅的允许文件类型。",
        "avatar_file_types_label" => "头像文件类型",
        "avatar_file_types_description" => "头像的允许文件类型。",
        "change_uri_label" => "更改 URI",
        "change_uri_description" => "启用或禁用 URI 更改功能。",
        "convert_to_webp_label" => "转换为 WebP",
        "convert_to_webp_description" => "自动将图像转换为 WebP 格式。"
    ],
    "modules_list" => [
        "authors" => "作者",
        "header" => "模块列表",
        "description" => "显示系统中定义的所有模块的页面。",
        "manage" => "模块设置 - 键",
        "sp_settings" => "服务提供商设置",
        "sp_error" => "系统中未定义提供商类",
        "drag" => "将具有模块的 ZIP 存档拖到这里",
        "module_install" => "模块安装",
        "version" => "模块版本 - 版本",
        "confirm_delete" => "您确定要删除此模块吗？",
        "confirm_install" => "您确定要安装此模块吗？",
        "module_name" => "模块安装 - 名称",
        "enable_module" => "启用模块",
        "disable_module" => "禁用模块",
        "install_module" => "安装模块",
        "delete_module" => "删除模块",
        "module_is_not_exists" => "具有键键的模块不存在。",
        "upload_zip_required" => "需要上传模块的 ZIP 文件。",
        "invalid_zip" => "无效的 ZIP 文件格式。",
        "max_zip_size" => "ZIP 文件的最大大小为 maxSize 字节。",
        "zip_open_failed" => "打开 ZIP 存档失败。",
        "single_folder_expected" => "ZIP 存档中预期为单个根文件夹。",
        "module_already_exists" => "具有此名称的模块已存在。",
        "zip_extraction_failed" => "从 ZIP 存档中提取文件失败。",
        "module_json_not_found" => "在存档的根目录中未找到 module.json 文件。",
        "invalid_module_json" => "无效的 module.json 文件格式。",
        "installed_version" => "当前版本",
        "last_version" => "最新版本"
    ],
    "themes_list" => [
        "header" => "主题列表",
        "description" => "显示系统中可用的所有主题的页面。",
        "manage" => "主题管理 - 键",
        "drag" => "将具有主题的 ZIP 存档拖到这里",
        "theme_install" => "主题安装",
        "version" => "主题版本 - 版本",
        "confirm_delete" => "您确定要删除此主题吗？",
        "confirm_install" => "您确定要安装此主题吗？",
        "theme_name" => "主题安装 - 名称",
        "enable_theme" => "启用主题",
        "disable_theme" => "禁用主题",
        "install_theme" => "安装主题",
        "delete_theme" => "删除主题",
        "theme_settings" => "主题设置",
        "unknown_theme" => "未知主题",
        "upload_zip_required" => "需要上传主题的 ZIP 文件。",
        "invalid_zip" => "无效的 ZIP 文件格式。",
        "zip_open_failed" => "打开 ZIP 存档失败。",
        "single_folder_expected" => "ZIP 存档中预期为单个根文件夹。",
        "theme_already_exists" => "具有此名称的主题已存在。",
        "zip_extraction_failed" => "从 ZIP 存档中提取文件失败。",
        "loader_not_found" => "在存档的根目录中找不到 ThemeLoader.php 文件。"
    ],
    "servers" => [
        "mod" => "游戏",
        "header" => "服务器列表",
        "description" => "列出添加到 CMS 中的所有服务器",
        "add" => "添加服务器",
        "delete" => "删除服务器",
        "confirm_delete" => "您确定要删除此服务器吗？",
        "change" => "更改服务器",
        "game" => "游戏",
        "add_title" => "添加服务器",
        "add_description" => "在此页面，您可以向 CMS 添加新服务器",
        "name_label" => "服务器名称",
        "name_placeholder" => "输入服务器名称",
        "ip_label" => "服务器 IP",
        "ip_placeholder" => "输入服务器 IP",
        "port_label" => "服务器端口",
        "port_placeholder" => "输入服务器端口",
        "rcon_label" => "RCON（可选）",
        "rcon_placeholder" => "输入 RCON 密码",
        "game_label" => "游戏选择",
        "edit" => "编辑服务器",
        "edit_title" => "编辑服务器 - 服务器",
        "edit_description" => "在此页面，您可以修改已添加到 CMS 中的服务器",
        "not_found" => "未找到指定的服务器",
        "server_duplicate" => "具有这些详细信息的服务器已存在！",
    ],
    "payments" => [
        "header" => "支付网关",
        "description" => "用户余额充值所需的支付网关列表。",
        "delete" => "删除网关",
        "change" => "更改网关",
        "confirm_delete" => "您确定要删除此网关吗？",
        "enable_payment" => "激活网关",
        "disable_payment" => "禁用网关",
        "gateway_label" => "支付系统名称",
        "adapter" => "标识符",
        "adapter_description" => "输入用于确定支付系统的标识符。<a href=\"https://github.com/thephpleague/omnipay?tab=readme-ov-file#payment-gateways\" target=\"_blank\">此处列出了网关</a>",
        "params" => "网关参数",
        "enabled" => "已启用",
        "enabled_description" => "默认情况下启用或禁用网关",
        "add_title" => "添加支付网关",
        "add_description" => "在此页面，您可以向系统添加支付网关",
        "gateway_not_exists" => "未找到支付驱动程序 'name'",
        "min_one_value" => "必须至少指定一个参数",
        "exists" => "支付网关 'name' 已存在",
        "edit_title" => "编辑网关 - 名称",
        "edit_description" => "在此页面，您可以修改特定网关的参数",
        "not_found" => "未找到支付网关",
        "currency_label" => "货币",
        "currency_description" => "指定用于支付系统的货币",
        "payments_header" => "支付列表",
        "payments_descrition" => "在此页面，您可以查看所有已完成和未完成的支付",
        "promo" => [
            "max_use" => "最大使用次数",
            "used" => "已使用",
            "list" => "促销代码列表",
            "add" => "添加促销代码",
            "header" => "支付促销代码",
            "description" => "用于用户余额充值奖励的可用促销代码列表",
            "delete" => "删除促销代码",
            "change" => "更改促销代码",
            "confirm_delete" => "您确定要删除此促销代码吗？",
            "add_title" => "添加促销代码",
            "add_description" => "在此页面，您可以向系统添加促销代码",
            "not_found" => "未找到促销代码",
            "exists" => "促销代码 'name' 已存在",
            "edit_title" => "编辑促销代码 - 名称",
            "edit_description" => "在此页面，您可以修改特定促销代码的参数",
            "promo_duplicate" => "此名称的促销代码已存在！",
            "name_label" => "促销代码名称",
            "max_usages_label" => "最大使用次数",
            "max_usages" => "500",
            "type_label" => "促销代码类型",
            "value_label" => "促销代码值",
            "expires_at" => "到期日期",
            "percentage" => "百分比",
            "subtract" => "减去",
            "amount" => "添加金额",
        ]
    ],
    "socials" => [
        "key" => "标识符",
        "add_title" => "添加驱动程序",
        "add_description" => "在此页面，您可以添加用于自定义用户身份验证的驱动程序。",
        "social_label" => "驱动程序键",
        "settings_label" => "驱动程序设置",
        "enabled" => "活动",
        "enabled_description" => "默认情况下启用或禁用驱动程序",
        "delete" => "删除驱动程序",
        "change" => "更改驱动程序",
        "confirm_delete" => "您确定要删除此驱动程序吗？",
        "enable_social" => "激活驱动程序",
        "disable_social" => "禁用驱动程序",
        "header" => "驱动程序列表",
        "description" => "在此页面，您可以通过社交网络管理身份验证驱动程序",
        "social_icon_label" => "社交网络图标",
        "social_not_exists" => "驱动程序 'name' 未找到！",
        "edit_title" => "编辑驱动程序 - name",
        "edit_description" => "在此页面，您可以修改身份验证驱动程序的数据",
        "not_found" => "未找到驱动程序"
    ],
    "users" => [
        "created" => "注册日期",
        "change" => "更改",
        "delete" => "删除",
        "header" => "用户列表",
        "description" => "网站上所有注册用户的列表",
        "edit" => "编辑用户",
        "edit_title" => "编辑用户名",
        "edit_description" => "修改用户信息",
        "name" => "名称",
        "email" => "电子邮件",
        "balance" => "余额",
        "login" => "登录",
        "uri" => "URI",
        "roles" => "角色",
        "information" => "用户信息",
        "created_at" => "创建日期",
        "verified" => "已验证",
        "hidden" => "隐藏",
        "not_verf" => "未验证",
        "verf" => "已验证",
        "not_hid" => "未隐藏",
        "hid" => "隐藏",
        "logs" => "日志",
        "social" => "社交网络",
        "devices" => "设备",
        "not_found" => "找不到用户",
        "action" => "操作",
        "action_details" => "详情",
        "action_date" => "操作日期",
        "device" => "设备",
        "login_error" => "无效的登录格式",
        "role_priority_error" => "角色 'role' 的优先级高于您的角色",
        "cannot_remove_highest_role" => "您无法删除与您优先级相等的角色！",
        "permission_error" => "首先要长大，然后我们会看到",
        "cannot_delete_self" => "您不能删除自己！",
        "invoices" => [
            "title" => "充值",
            "gateway" => "支付网关",
            "amount" => "金额",
            "promo" => "促销代码",
            "paid_at" => "支付日期"
        ]
    ],
    "roles" => [
        "priority" => "优先级",
        "header" => "角色列表",
        "description" => "在此页面中，显示了 Flute 中的所有现有角色",
        "empty" => "角色列表为空",
        "add" => "创建角色",
        "edit_title" => "编辑角色 - name",
        "edit_description" => "角色修改页面",
        "role_label" => "角色名称",
        "role_color" => "角色突出显示颜色",
        "permissions" => "权限",
        "perm_desc" => "为角色选择必要的权限",
        "no_access" => "您无权访问此角色！",
        "add_title" => "添加角色",
        "add_description" => "在此页面中，您可以添加新角色",
        "confirm_delete" => "您确定要删除此角色吗？"
    ],
    "navigation" => [
        "confirm_delete" => "您确定要删除此项吗？",
        "header" => "导航列表",
        "description" => "在此页面上，您可以配置所有导航项",
        "add" => "添加项目",
        "not_found" => "找不到项目",
        "add_title" => "添加项目",
        "add_description" => "在此页面上，您可以添加新的导航项",
        "navigation_label" => "项目名称",
        "icon_label" => "图标",
        "icon_desc" => "从 <a href=\"https://phosphoricons.com/\" target=\"_blank\">此处</a> 获取图标。 <br> （示例）仅输入粗体部分中突出显示的内容：<br><b>&lt;i class=&quot;<b>ph ph-air-traffic-control</b>&quot;&gt;&lt;/i&gt;</b>",
        "url_label" => "URL",
        "new_tab" => "新标签页",
        "new_tab_description" => "链接是否在新标签页中打开？",
        "visible_only_for_guests" => "仅对访客可见性",
        "visible_only_for_guests_description" => "是否仅向未经授权的用户显示此项？",
        "visible_only_for_logged_in" => "仅对已登录用户可见性",
        "visible_only_for_logged_in_description" => "是否仅向已登录用户显示此项？",
        "roles" => "角色",
        "roles_desc" => "选择将具有查看此项权限的角色。您可以将其留空",
        "edit_title" => "编辑名称",
        "edit_description" => "在此页面上，您可以修改导航项",
        "edit" => "编辑项目",
    ],
    "footer" => [
        "social" => "社交网络",
        "confirm_delete" => "您确定要删除此链接吗？",
        "social_confirm_delete" => "您确定要删除此社交网络吗？",
        "header" => "页脚链接列表",
        "description" => "在此页面上，您可以配置站点页脚中的所有链接",
        "add" => "添加链接",
        "not_found" => "找不到链接",
        "add_title" => "添加链接",
        "add_description" => "在此页面上，您可以在页脚中添加新链接",
        "footer_label" => "链接名称",
        "url_label" => "URL",
        "new_tab" => "新标签页",
        "new_tab_description" => "链接是否在新标签页中打开？",
        "edit_title" => "编辑名称",
        "edit_description" => "在此页面上，您可以编辑页脚中的链接",
        "edit" => "编辑链接",
        "social_delete" => "删除社交网络",
        "social_change" => "更改社交网络",
        "social_header" => "导航中的社交网络列表",
        "social_description" => "在此页面上，显示了站点页脚中显示的所有社交网络",
        "social_add" => "添加社交网络",
        "social_add_title" => "添加社交网络",
        "social_add_description" => "在此页面上，您可以在站点页脚中添加新的社交网络",
        "social_footer_label" => "链接名称",
        "social_icon_label" => "图标代码",
        "social_url_label" => "URL",
        "social_edit_title" => "编辑 - 名称",
        "social_edit_description" => "在此页面上，您可以修改链接的参数"
    ],
    "pages" => [
        "title" => "自定义页面",
        "header" => "自定义页面",
        "add" => "添加页面",
        "description" => "在此页面上，您可以为不同路径创建自定义页面。无需为规则编写模块！：）",
        "edit_title" => "编辑页面：:name",
        "edit_description" => "在此处更改页面的参数",
        "add_title" => "添加自定义页面",
        "add_description" => "在此页面上，您可以添加自定义页面",
        "route_label" => "路由",
        "route_desc" => "通过此链接将访问页面",
        "title_label" => "标题",
        "description_label" => "描述",
        "keywords_label" => "关键词",
        "keywords_desc" => "为搜索引擎索引此链接输入关键字。<b>（例如，\"csgo，cs2，cs2 server\"）</b>",
        "robots_label" => "机器人指令",
        "robots_desc" => "使用哪种索引参数。<a href=\"https://developers.google.com/search/docs/crawling-indexing/robots-meta-tag?hl=en#directives\" target=\"_blank\">这里列出了所有规则</a>",
        "og_title_label" => "OG：标题",
        "og_description_label" => "OG：描述",
        "og_image_label" => "OG：图片",
        "permission_label" => "权限",
        "permission_description" => "对此页面的访问控制",
        "permissions" => "访问权限",
        "perm_desc" => "选择将能够查看此页面的访问权限",
        "validate_route_error" => "您的链接无效",
        "route_exists" => "已存在具有此链接的页面！",
        "not_found" => "找不到此类页面！",
        "content" => "页面内容",
    ],
    "notifications" => [
        "title" => "通知",
        "header" => "自定义通知",
        "description" => "在此页面上，您可以为引擎中的任何事件配置自定义通知",
        "add" => "添加通知",
        "not_found" => "找不到此类事件！",
        "event" => "事件",
        "icon" => "图标",
        "icon_desc" => "从 <a href=\"https://phosphoricons.com/\" target=\"_blank\">此处</a> 获取图标。 <br> （示例）按照示例中显示的内容输入：<br><b>&lt;i class=&quot;ph ph-air-traffic-control&quot;&gt;&lt;/i&gt;</b>",
        "url" => "链接（可选）",
        "title_label" => "通知标题",
        "content" => "通知内容",
        "content_desc" => "可用参数：<code>{name}</code>、<code>{login}</code>、<code>{email}</code>、<code>{balance}</code>",
        "edit_title" => "编辑通知",
        "edit_description" => "在此页面上，您可以更改通知的监听器参数。",
        "add_title" => "添加监听器",
        "add_description" => "在此页面上，您可以为 Flute CMS 中的任何事件添加通知"
    ],
    "api" => [
        "add_title" => "添加新的API密钥",
        "add_description" => "在这个页面上，您可以发行一个具有特定权限的新API密钥",
        "key" => "您的密钥",
        "permissions" => "密钥权限",
        "perm_desc" => "密钥需要有执行权限。这里就是选择它们的地方",
        "header" => "已发行API密钥列表",
        "description" => "这个页面展示了引擎中所有密钥的列表",
        "add" => "添加新的API密钥",
        "regenerate" => "重新生成"
    ],
    "databases" => [
        "title" => "数据库连接",
        "server_not_found" => "服务器未找到",
        "params_empty" => "某些参数为空",
        "setting_description" => "在这里，您可以配置特定数据库驱动程序到服务器的绑定",
        "add" => "添加连接",
        "dbname" => "数据库名称",
        "dbname_desc" => "该数据库将由驱动程序使用",
        "server" => "绑定的服务器",
        "add_description" => "在这个页面上，您可以添加服务器与数据库之间的新连接",
        "mod" => "驱动名称",
        "mod_desc" => "这是将要绑定到服务器的驱动",
        "server_label" => "服务器",
        "edit_title" => "修改连接",
        "edit_description" => "在这个页面上，您可以修改特定服务器的连接",
        "settings" => "额外设置"
    ],    
    "composer" => [
        "title" => "作曲家",
        "setting_description" => "在这个页面上，您可以添加或删除一个新的Composer包",
        "name" => "包名",
        "installed" => "已安装版本",
        "add" => "添加包",
        "add_description" => "这个页面展示了所有Composer包的表格。你可以安装任何一个",
        "packageName" => "包名",
        "description" => "描述",
        "downloads" => "下载次数",
        "download" => ""
    ],
    "translate" => [
        "title" => "翻译",
        "setting_description" => "在这个页面上，您可以为Flute创建自定义短语，使用<kbd>custom.</kbd>键",
        "edit" => "更改翻译短语 - :code",
        "edit_description" => "在这个页面上，您可以使用<kbd>custom.</kbd>键创建或修改新的翻译",
        "translations" => "短语"
    ],
    "currency" => [
        "title" => "货币",
        "setting_description" => "Flute创建的自定义货币列表",
        "currency" => "货币（代码）",
        "add" => "添加货币",
        "add_description" => "在这个页面上，您可以添加新的货币",
        "min_value" => "最小值",
        "min_value_desc" => "请指定为这种货币充值的最小金额",
        "exchange_rate" => "汇率",
        "exchange_rate_desc" => "请指定将金额转换为这种货币的百分比",
        "gateway" => "适用于哪些支付网关",
        "edit" => "修改货币",
        "edit_description" => "在这个页面上，您可以修改货币的参数"
    ],
    "confirm_install" => "您确定要安装它吗？",
    "may_have_errors" => "这个功能可能会不稳定工作！"
];
