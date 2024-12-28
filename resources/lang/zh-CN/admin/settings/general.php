<?php

return [
    'ad'				        => 'Active Directory活动目录',
    'ad_domain'				    => 'AD域',
    'ad_domain_help'			=> '通常(但并非全部情况下)这与您的邮件域相同',
    'ad_append_domain_label'    => '附加域名',
    'ad_append_domain'          => '添加域名到用户名字段',
    'ad_append_domain_help'     => '不要求用户输入“"username@domain.local"，他们只需输入“username”。',
    'admin_cc_email'            => '邮件抄送',
    'admin_cc_email_help'       => '如果你想给用户额外的邮件账户发送签入/签出副本，请在此输入邮箱地址，否则请留空。',
    'admin_settings'            => '管理员设置',
    'is_ad'				        => '这是AD域服务器',
    'alerts'                	=> '警报',
    'alert_title'               => '更新通知设置',
    'alert_email'				=> '发送警报',
    'alert_email_help'    => '您希望向其发送警报的电子邮件地址或通讯组列表，以逗号分隔',
    'alerts_enabled'			=> '警报已启用',
    'alert_interval'			=> '警报阈值(天)',
    'alert_inv_threshold'		=> '库存警报阈值',
    'allow_user_skin'           => '允许用户自定义皮肤',
    'allow_user_skin_help_text' => '勾选此框将允许用户以不同的方式覆盖界面皮肤。',
    'asset_ids'					=> '资产ID',
    'audit_interval'            => '盘点时间间隔',
    'audit_interval_help'       => '如果您需要定期对您的资产进行盘点，请输入时间间隔（以月为单位）。如果您更新此值，则将更新具有即将到来的盘点日期的资产的所有“下一个盘点日期”。',
    'audit_warning_days'        => '盘点开始提醒',
    'audit_warning_days_help'   => '需要提前多少天让我们通知您需要盘点资产？',
    'auto_increment_assets'		=> '生成自动递增的资产标签',
    'auto_increment_prefix'		=> '前缀（可选）',
    'auto_incrementing_help'    => '先启用自动递增资产标签来设置这个',
    'backups'					=> '备份',
    'backups_help'              => '创建、下载、恢复备份 ',
    'backups_restoring'         => '从备份中还原',
    'backups_clean' => '恢复前清理备份数据库',
    'backups_clean_helptext' => "如果您数据库版本发生变化，这可能是有用的",
    'backups_upload'            => '上传备份',
    'backups_path'              => '服务器上的备份存储在 <code>:path</code>',
    'backups_restore_warning'   => '使用恢复按钮 <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> 从上次备份恢复。 (目前无法使用 S3 文件存储或 Docker容器。)<br><br>您的 <strong>完整的 :app_name 数据库和任何上传的文件将被备份文件中的内容完全替换</strong>  ',
    'backups_logged_out'         => '恢复完成后，包括您在内的所有现有用户都将被注销。',
    'backups_large'             => '非常大的备份在恢复尝试时可能会超时，可能仍然需要通过命令行运行。 ',
    'barcode_settings'			=> '条码设置',
    'confirm_purge'			    => '确认清除',
    'confirm_purge_help'		=> '在下面的框中输入文本“DELETE”以清除已删除的记录。此操作无法撤消，将永久删除所有软删除的项目和用户。（为了安全起见，你应该先做个备份。）',
    'custom_css'				=> '自定义 CSS',
    'custom_css_help'			=> '键入你喜欢的CSS格式覆盖。不要包括：&lt;style&gt;&lt;/style&gt; 标签。',
    'custom_forgot_pass_url'	=> '密码重置网址',
    'custom_forgot_pass_url_help'	=> '这将替换登录屏幕上的忘记密码URL，有助于将用户引导至内部或托管的LDAP密码重置服务。它将禁用本地用户密码重置功能。',
    'dashboard_message'			=> '仪表盘消息',
    'dashboard_message_help'	=> '此文本将显示在仪表盘上，供有权查看仪表盘的任何人使用。',
    'default_currency'  		=> '默认货币',
    'default_eula_text'			=> 'Default EULA',
    'default_language'			=> '默认语言',
    'default_eula_help_text'	=> '你也可以将自定义的EULA与特定资产分类相关联。',
    'acceptance_note'           => '为您的决定添加备注(可选)',
    'display_asset_name'        => '显示资产名称',
    'display_checkout_date'     => '显示借出日期',
    'display_eol'               => '以表格形式显示寿命期限',
    'display_qr'                => '显示二维码',
    'display_alt_barcode'		=> '显示条码',
    'email_logo'                => '电子邮件标志',
    'barcode_type'				=> '二维码类型',
    'alt_barcode_type'			=> '条码类型',
    'email_logo_size'       => '电子邮件中最好使用方形标志。 ',
    'enabled'                   => '启用',
    'eula_settings'				=> '最终用户许可协议(EULA)设置',
    'eula_markdown'				=> 'EULA中可以使用<a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>.',
    'favicon'                   => '收藏夹图标',
    'favicon_format'            => '可接受的文件类型是ico、png和gif。其他图像格式可能无法在所有浏览器中显示。',
    'favicon_size'          => '收藏图标 应该是方形图像，16x16像素。',
    'footer_text'               => '附加页脚文本 ',
    'footer_text_help'          => '此文本将显示在右侧页脚中。链接允许使用 <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>。换行符、页眉、图像等可能会导致不可预知的结果。',
    'general_settings'			=> '一般设置',
    'general_settings_keywords' => '公司支持、 签名、 接受、 电子邮件格式、 用户名格式、 图片、每页、 缩略图、 eula、 gravatar、 tos、 仪表盘、 隐私保护',
    'general_settings_help'     => '默认的 EULA和更多',
    'generate_backup'			=> '生成备份',
    'google_workspaces'         => 'Google Workspaces',
    'header_color'              => '标题颜色',
    'info'                      => '这些设置允许您自定义安装的某些方面',
    'label_logo'                => '标签标志',
    'label_logo_size'           => '方形标志看起来最好——将显示在每个资产标签的右上角。 ',
    'laravel'                   => 'Laravel版本',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => '默认权限组',
    'ldap_default_group_info'   => '选择要分配给新同步用户的组。注意，用户会获得分配给他们的组的权限。',
    'no_default_group'          => '没有默认组',
    'ldap_help'                 => 'LDAP/Active Directory',
    'ldap_client_tls_key'       => 'LDAP 客户端TLS 密钥',
    'ldap_client_tls_cert'      => 'LDAP 客户端TLS 证书',
    'ldap_enabled'              => '启用LDAP验证',
    'ldap_integration'          => 'LDAP集成',
    'ldap_settings'             => 'LDAP 设置',
    'ldap_client_tls_cert_help' => 'LDAP 连接的客户端TLS 证书和密钥通常仅用于谷歌工作空间配置，两者都是必需的。',
    'ldap_location'             => 'LDAP 位置',
'ldap_location_help'             => '如果<strong>在 Base Bind DN 中没有使用OU</strong>，则LDAP 位置字段应当被使用；如果正在使用OU Search，请将此项留空。',
    'ldap_login_test_help'      => '根据你指定的base DN，输入有效的LDAP用户名和密码，以测试您的LDAP登录是否配置正确。当然您必须先保存您更改的LDAP设置。',
    'ldap_login_sync_help'      => '这只证明了LDAP同步正确。如果您的LDAP身份验证查询设置不正确，用户可能仍然无法登录。当然您必须先保存您的LDAP设置。',
    'ldap_manager'              => 'LDAP 领导（Manager）',
    'ldap_server'               => 'LDAP 服务器',
    'ldap_server_help'          => '此处应该以 ldap:// (对于未加密的) 或 ldaps:// (对于TLS 或 SSL) 开始',
    'ldap_server_cert'			=> '检验LDAP的SSL证书',
    'ldap_server_cert_ignore'	=> '允许未通过校验的SSL证书',
    'ldap_server_cert_help'		=> '如果你使用了自签发证书，请勾选',
    'ldap_tls'                  => '使用TLS',
    'ldap_tls_help'             => '仅当LDAP服务器使用STARTTLS时本选项才被勾选',
    'ldap_uname'                => 'LDAP 用户名',
    'ldap_dept'                 => 'LDAP 部门',
    'ldap_phone'                => 'LDAP 电话号码',
    'ldap_jobtitle'             => 'LDAP 职位',
    'ldap_country'              => 'LDAP 国家',
    'ldap_pword'                => 'LDAP 密码',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'LDAP 过滤器',
    'ldap_pw_sync'              => 'LDAP 密码同步',
    'ldap_pw_sync_help'         => '若您不想让 LDAP 密码与系统密码同步，请勿勾选此项。取消同步设置将造成当系统与 LDAP 失去连接时，用户无法登录。',
    'ldap_username_field'       => '用户名字段',
    'ldap_lname_field'          => '姓氏',
    'ldap_fname_field'          => 'LDAP用户名字字段',
    'ldap_auth_filter_query'    => 'LDAP认证请求',
    'ldap_version'              => 'LDAP 版本',
    'ldap_active_flag'          => 'LDAP 启用标志',
    'ldap_activated_flag_help'  => '此值用于确定同步用户是否可以登录到 Snipe-IT。 <strong>它不会影响物品是否可以借出或归还给这些用户</strong>，此值应该是您的 AD/LDAP 中 <strong>属性名称（attribute name）</strong> ， 而<strong>不是值</strong>。 <br><br>如果此字段设置为您的 AD/LDAP 中不存在的字段名称，或 AD/LDAP 字段中的值被设置为 <code>0</code> 或 <code>false</code>, <strong>用户登录将被禁用</strong>。 如果AD/LDAP字段中的值被设置为 <code>1</code> 或 <code>true</code> 或 <em>其他文本</em> 那意味着用户可以登录。 当此字段在您的AD域控中为空时，我们会尊重 <code>userAccountControl</code> 属性，通常允许非暂停用户登录。',
    'ldap_emp_num'              => 'LDAP 员工号',
    'ldap_email'                => 'LDAP Email',
    'ldap_test'                 => '测试 LDAP',
    'ldap_test_sync'            => '测试 LDAP 同步',
    'license'                   => '软件许可证',
    'load_remote'               => '加载远程头像',
    'load_remote_help_text'		=> '如果您的安装不能从外部网络加载脚本，请取消选中此项。 这将防止Snipe-IT 尝试从 Gravatar 或其他外部来源加载头像。',
    'login'                     => '登录尝试',
    'login_attempt'             => '登录尝试',
    'login_ip'                  => 'IP 地址',
    'login_success'             => '成功？',
    'login_user_agent'          => '浏览器版本(User Agent)',
    'login_help'                => '尝试登录的列表',
    'login_note'                => '登陆提示',
    'login_note_help'           => '可选择性地在登陆界面显示一些信息，例如给找到丢失或者被偷设备的用户提供帮助。这里支持<a href="https://help.github.com/articles/github-flavored-markdown/">Github的markdown语法</a>。',
    'login_remote_user_text'    => '远程用户登录选项',
    'login_remote_user_enabled_text' => '启用远程用户头登录',
    'login_remote_user_enabled_help' => '这个选项根据“通用网关接口（rfc3875）”标准，开启使用 REMOTE_USER 头的认证。',
    'login_common_disabled_text' => '禁用其他认证机制',
    'login_common_disabled_help' => '该选项将禁用其他身份验证机制。请您确定只有您的REMOTE_USER登录已经可用，才启用此选项',
    'login_remote_user_custom_logout_url_text' => '自定义注销网址',
    'login_remote_user_custom_logout_url_help' => '如果此处提供了URL，则在用户注销Snipe-IT后，用户将被重定向到此URL。这对于正确关闭身份验证提供程序的用户会话非常有用。',
    'login_remote_user_header_name_text' => '自定义用户名前缀',
    'login_remote_user_header_name_help' => '使用指定的用户前缀而不是REMOTE_USER',
    'logo'                    	=> '徽标',
    'logo_print_assets'         => '在打印中使用',
    'logo_print_assets_help'    => '在打印资产列表中使用品牌 ',
    'full_multiple_companies_support_help_text' => '限制归属特定公司的用户（包括管理员）仅能访问该公司资产',
    'full_multiple_companies_support_text' => '完整多企业支持',
    'show_in_model_list'   => '在模型下拉列表中显示',
    'optional'					=> '可选',
    'per_page'                  => '每页搜索结果',
    'php'                       => 'PHP版本',
    'php_info'                  => 'PHP 信息',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, system, info',
    'php_overview_help'         => 'PHP 系统信息',
    'php_gd_info'               => '您必须安装php-gd显示二维码，请参阅安装说明。',
    'php_gd_warning'            => 'PHP图像处理的GD[php-gd]插件没有安装',
    'pwd_secure_complexity'     => '密码复杂度',
    'pwd_secure_complexity_help' => '选择您想执行哪种密码复杂性规则。',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => '密码不能与名字、姓氏、电子邮件或用户名相同',
    'pwd_secure_complexity_letters' => '至少需要一个字母',
    'pwd_secure_complexity_numbers' => '至少需要一个数字',
    'pwd_secure_complexity_symbols' => '至少需要一个符号',
    'pwd_secure_complexity_case_diff' => '至少需要一个大写和一个小写',
    'pwd_secure_min'            => '密码最少包含的字符',
    'pwd_secure_min_help'       => '允许的最小值是 8',
    'pwd_secure_uncommon'       => '禁止使用常见密码',
    'pwd_secure_uncommon_help'  => '这将会禁止用户使用最常见的10000个密码。',
    'qr_help'                   => '允许二维码首次设置',
    'qr_text'                   => '二维码文本',
    'saml'                      => 'SAML',
    'saml_title'                => '更新 SAML 设置',
    'saml_help'                 => 'SAML 设置',
    'saml_enabled'              => 'SAML 已启用',
    'saml_integration'          => 'SAML 集成',
    'saml_sp_entityid'          => '实体 ID',
    'saml_sp_acs_url'           => '申明消费者服务 (ACS) URL',
    'saml_sp_sls_url'           => '单次注销服务 (SLS) URL',
    'saml_sp_x509cert'          => '公开证书',
    'saml_sp_metadata_url'      => '元数据URL',
    'saml_idp_metadata'         => 'SAML IdP 元数据',
    'saml_idp_metadata_help'    => '您可以使用 URL 或 XML 文件指定IdP 元数据。',
    'saml_attr_mapping_username' => '属性映射 - 用户名',
    'saml_attr_mapping_username_help' => '如果属性映射未指定或无效，将使用NameID。',
    'saml_forcelogin_label'     => 'SAML 强制登录',
    'saml_forcelogin'           => '将SAML 设为主要登录',
    'saml_forcelogin_help'      => '您可以使用 \'/login?nosaml\' 进入正常登录页面。',
    'saml_slo_label'            => 'SAML 单一注销',
    'saml_slo'                  => '注销时向IdP发送注销请求',
    'saml_slo_help'             => '这将导致用户在注销时首先被重定向到IdP。如果IdP不能正确地支持SP发起的SAML SLO，则不勾选。',
    'saml_custom_settings'      => 'SAML 自定义设置',
    'saml_custom_settings_help' => '您可以为onelogin/php-saml库指定额外的设置。请自行承担风险。',
    'saml_download'             => '下载元数据',
    'setting'                   => '设置',
    'settings'                  => '设置',
    'show_alerts_in_menu'       => '在顶部菜单中显示警告',
    'show_archived_in_list'     => '归档资产',
    'show_archived_in_list_text'     => '在 "所有资产" 列表中显示归档资产',
    'show_assigned_assets'      => '显示分配给资产的资产',
    'show_assigned_assets_help' => '在 "查看用户->资产"、"查看用户->信息->打印所有已分配的资产 "和 "账户->查看已分配的资产 "中显示已分配资产。',
    'show_images_in_email'     => '在电子邮件中显示图片。',
    'show_images_in_email_help'   => '如果外部用户无法在邮件中通过你安装在VPN或内网的Snipe-IT加载图片，请取消此复选框。',
    'site_name'                 => '站点名称',
    'integrations'               => '集成',
    'slack'                     => 'Slack',
    'general_webhook'           => '常规Webhook',
    'ms_teams'                  => 'Microsoft Teams',
    'webhook'                   => ':app',
    'webhook_presave'           => '测试以保存',
    'webhook_title'               => '更新 Webhook 设置',
    'webhook_help'                => '集成设置',
    'webhook_botname'             => ':app Botname',
    'webhook_channel'             => ':app 频道',
    'webhook_endpoint'            => ':app Endpoint',
    'webhook_integration'         => ':app 设置',
    'webhook_test'                 =>'测试 :app 集成',
    'webhook_integration_help'    => ':app 集成是为可选项，但如果您想要使用它，则需要endpoint和channel。 要配置 :app 集成，您必须先<a href=":webhook_link" target="_new" rel="noopener">在您的 :app 账户上创建传入的 webhook</a> 。 在保存之前请点击 <strong>测试 :app 集成</strong> 按钮确认您的设置是否正确。 ',
    'webhook_integration_help_button'    => '一旦您保存了您的 :app 信息，测试按钮将会出现。',
    'webhook_test_help'           => '测试您的 :app 集成配置是否正确。您必须保存您更新的 :app 设置',
    'shortcuts_enabled'         => '启用快捷键',
    'shortcuts_help_text'       => '<strong>Windows</strong>: Alt + Access key, <strong>Mac</strong>: Control + Option + Access key',
    'snipe_version'  			=> 'Snipe-IT version',
    'support_footer'            => '支持页脚链接 ',
    'support_footer_help'       => '指定谁可以看到指向Snipe-IT支持信息和用户手册的链接',
    'version_footer'            => '页脚版本 ',
    'version_footer_help'       => '指定谁可以看到Snipe-IT版本和内部版本号。',
    'system'                    => '系统信息',
    'update'                    => '更新设置',
    'value'                     => '价值',
    'brand'                     => '品牌',
    'brand_keywords'            => '页脚、 Logo、 打印、 主题、 皮肤、 页眉、 颜色、 颜色、 css',
    'brand_help'                => 'Logo，站点名称',
    'web_brand'                 => '网页品牌类型',
    'about_settings_title'      => '设置',
    'about_settings_text'       => '这些设置允许您自定义您的安装偏好',
    'labels_per_page'           => '每页显示',
    'label_dimensions'          => 'Label 尺寸（英尺）',
    'next_auto_tag_base'        => '下一个自动增量',
    'page_padding'              => '页面边框',
    'privacy_policy_link'       => '链接到隐私条款。',
    'privacy_policy'            => '隐私条款',
    'privacy_policy_link_help'  => '如果此处包含 url, 则将在应用程序页脚和系统发送的任何电子邮件中包含指向您的隐私策略的链接, 以符合 GDPR 的要求。 ',
    'purge'                     => '清除已标记删除的记录',
    'purge_deleted'             => '清除已删除 ',
    'labels_display_bgutter'    => '标签底部装订线',
    'labels_display_sgutter'    => '标签侧装订线',
    'labels_fontsize'           => '标签字体大小',
    'labels_pagewidth'          => '标签宽度',
    'labels_pageheight'         => '标签宽度',
    'label_gutters'        => '标签间隔(英寸)',
    'page_dimensions'        => '页面尺寸(英寸)',
    'label_fields'          => '标签可见字段',
    'inches'        => '英尺',
    'width_w'        => '宽',
    'height_h'        => '高',
    'show_url_in_emails'                => '链接到Snipe-IT在电子邮件',
    'show_url_in_emails_help_text'      => '如果您不希望链接回电子邮件页脚中的Snipe-IT安装，请取消选中此框。如果您的大多数用户从未登录，则很有用',
    'text_pt'        => '磅',
    'thumbnail_max_h'   => '最大缩略图高度',
    'thumbnail_max_h_help'   => '以像素为单位的缩略图可能在列表视图中显示的最大高度。最小25，最高 500。',
    'two_factor'        => '两步验证',
    'two_factor_secret'        => '两步验证验证码',
    'two_factor_enrollment'        => '加入两步验证',
    'two_factor_enabled_text'        => '启用两步验证',
    'two_factor_reset'        => '重设两步验证密钥',
    'two_factor_reset_help'        => '这将迫使用户再次选用他们的身份验证器应用程序。 如果他们目前登记的设备丢失或被盗，这样做可能是有用的。 ',
    'two_factor_reset_success'          => '成功重设两步验证设备',
    'two_factor_reset_error'          => '两步验证设备重设失败',
    'two_factor_enabled_warning'        => '启用两步验证将需要您立即用登记的移动设备验证身份。如您尚未设置两步验证，您现在可以登记您的设备。',
    'two_factor_enabled_help'        => '此操作将用 Google Authenticator 启用两步验证',
    'two_factor_optional'        => '可选项（如果允许，用户可以启用或禁用）',
    'two_factor_required'        => '强制所有用户启用',
    'two_factor_disabled'        => '已停用',
    'two_factor_enter_code'	=> '输入两步验证代码',
    'two_factor_config_complete'	=> '发送两步验证代码',
    'two_factor_enabled_edit_not_allowed' => '你的管理员不允许您编辑此设置。',
    'two_factor_enrollment_text'	=> "本系统强制两步验证，但您尚未登记您的移动设备。请启动您的 Google Authenticator 应用并扫描下方二维码以设置两步验证。在您完成后，请在下方输入生成的认证代码。",
    'require_accept_signature'      => '需要签名',
    'require_accept_signature_help_text'      => '启用此功能将需要用户亲自签署来接受一项资产。',
    'left'        => '左',
    'right'        => '右',
    'top'        => '顶部',
    'bottom'        => '底部',
    'vertical'        => '竖向',
    'horizontal'        => '水平',
    'unique_serial'                => '唯一的序列号',
    'unique_serial_help_text'                => '选中此框将强制对资产序列进行唯一性约束',
    'zerofill_count'        => '资产标签长度，包括补零',
    'username_format_help'   => '只有在没有提供用户名并且我们必须为您生成用户名时，导入过程才会使用此设置。',
    'oauth_title' => 'OAuth API 设置',
    'oauth_clients' => 'OAuth 客户端',
    'oauth' => 'OAuth',
    'oauth_help' => 'Oauth Endpoint 设置',
    'oauth_no_clients' => '您尚未创建任何 OAuth 客户端。',
    'oauth_secret' => 'Secret',
    'oauth_authorized_apps' => '授权的应用程序',
    'oauth_redirect_url' => '重定向 URL',
    'oauth_name_help' => ' 您的用户会识别和信任一些东西。',
    'oauth_scopes' => 'Scopes',
    'oauth_callback_url' => '您的应用程序授权回调URL。',
    'create_client' => '创建客户端',
    'no_scopes' => 'No scopes',
    'asset_tag_title' => '更新资产标签设置',
    'barcode_title' => '更新条形码设置',
    'barcodes' => '条形码',
    'barcodes_help_overview' => '条形码 &amp; QR 设置',
    'barcodes_help' => '这将尝试删除缓存条形码。 这通常只有在您的条码设置已经更改或您的Snipe-IT 链接已经更改时才使用。 下次访问时将重新生成条码。',
    'barcodes_spinner' => '正在尝试删除文件...',
    'barcode_delete_cache' => '删除条形码缓存',
    'branding_title' => '更新品牌设置',
    'general_title' => '更新常规设置',
    'mail_test' => '发送测试',
    'mail_test_help' => '这将尝试发送测试邮件到 :replyto。',
    'filter_by_keyword' => '通过设置关键字过滤',
    'security' => '安全',
    'security_title' => '更新安全设置',
    'security_keywords' => '密码、密码、要求、两个因素、两个因素、常用密码、远程登录、注销、验证',
    'security_help' => '双重认证，密码限制',
    'groups_keywords' => '权限、权限组、授权',
    'groups_help' => '帐户权限组',
    'localization' => '本地化',
    'localization_title' => '更新本地化设置',
    'localization_keywords' => '本地化、货币、本地、本地、时区、时区、国际、内部、语言、语言、翻译',
    'localization_help' => '语言，日期显示',
    'notifications' => '通知',
    'notifications_help' => '电子邮件警报和盘点设置',
    'asset_tags_help' => '递增和前缀',
    'labels' => '标签',
    'labels_title' => '更新标签设置',
    'labels_help' => '标签大小 &amp; 设置',
    'purge_keywords' => '永久删除',
    'purge_help' => '清除已删除的记录',
    'ldap_extension_warning' => '它看起来不像在这个服务器上安装或启用LDAP扩展。 您仍然可以保存您的设置，但您需要启用 PHP 的 LDAP 扩展，然后LDAP 同步或登录才能正常工作。',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => '员工号码',
    'create_admin_user' => '创建用户 ::',
    'create_admin_success' => '成功！您的管理员用户已添加！',
    'create_admin_redirect' => '点击这里进入您的应用登录！',
    'setup_migrations' => '数据库迁移 ::',
    'setup_no_migrations' => '没有什么可以迁移。您的数据库表已设置！',
    'setup_successful_migrations' => '您的数据库表已创建',
    'setup_migration_output' => '迁移输出：',
    'setup_migration_create_user' => '下一步：创建用户',
    'ldap_settings_link' => 'LDAP 设置页面',
    'slack_test' => '测试 <i class="fab fa-slack"></i> 集成',
    'label2_enable'           => '新标签引擎',
    'label2_enable_help'      => '切换到新的标签引擎。<b> 注意：在设置其他设置之前，您需要保存此设置。</b>',
    'label2_template'         => '模板',
    'label2_template_help'    => '选择用于生成标签的模板',
    'label2_title'            => '名称',
    'label2_title_help'       => '显示在支持它的标签上的名称',
    'label2_title_help_phold' => '占位符 <code>{COMPANY}</code> 将被替换为资产所在公司的名称',
    'label2_asset_logo'       => '使用资产Logo',
    'label2_asset_logo_help'  => '使用资产&apos;s 分配公司的Logo，而不是 <code>:setting_name</code>',
    'label2_1d_type'          => '一维条码类型',
    'label2_1d_type_help'     => '一维条码格式',
    'label2_2d_type'          => '二维码类型',
    'label2_2d_type_help'     => '二维码格式',
    'label2_2d_target'        => '二维码目标',
    'label2_2d_target_help'   => '扫描时二维码指向的 URL',
    'label2_fields'           => '字段定义',
    'label2_fields_help'      => '字段可以在左列中添加、删除和重新排序。对于每个字段，可以在右列中添加、删除和重新排序包括标签、数据源等多个选项。',
    'help_asterisk_bold'    => '输入为 <code>**text**</code> 的文本将显示为粗体。',
    'help_blank_to_use'     => '留空以使用 <code>:setting_name</code> 的值',
    'help_default_will_use' => '<code>:default</code> 将使用 <code>:setting_name</code>的值。 <br>请注意，条码的值必须符合相应的条码规范才能成功生成。请参阅 <a href="https://snipe-it.readme.io/docs/barcodes">文档 <i class="fa fa-external-link"></i></a> 了解更多详细信息。 ',
    'default'               => '默认',
    'none'                  => '无',
    'google_callback_help' => '这应该作为回调URL输入在您的组织内的 Google OAuth 应用程序设置。&apos;s <strong><a href="https://console.cloud.google.com/" target="_blank">Google 开发者控制台 <i class="fa fa-external-link" aria-hidden="true"></i></a></strong>',
    'google_login'      => 'Google Workspace 登录设置',
    'enable_google_login'  => '允许用户使用 Google Workspace 登录',
    'enable_google_login_help'  => '这些用户将不会被自动配置。 他们必须拥有一个已存在的账户以及 一个 Google Workspace 账户，并且已存在账户的用户名必须与 Google Workspace 账户的电子邮件地址相匹配。 ',
    'mail_reply_to' => '邮件回复地址',
    'mail_from' => '发件人地址',
    'database_driver' => '数据库驱动程序',
    'bs_table_storage' => '表存储',
    'timezone' => '时区',
    'profile_edit'          => '编辑个人资料',
    'profile_edit_help'          => '允许用户编辑自己的个人资料。',
    'default_avatar' => '上传自定义默认头像',
    'default_avatar_help' => '如果用户没有个人资料照片，此图像将作为个人资料显示。',
    'restore_default_avatar' => '恢复 <a href=":default_avatar" data-toggle="lightbox" data-type="image">原始系统默认头像</a>',
    'restore_default_avatar_help' => '',
    'due_checkin_days' => '到期归还警告',
    'due_checkin_days_help' => '资产应在预计归还多少天前列入“到期归还”页面中？',
    'no_groups' => '尚未创建任何群组。请访问<code>Admin Settings > Permission Groups</code>添加权限群组。',

];
