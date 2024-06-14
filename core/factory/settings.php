<?php

use EvolutionCMS\Facades\ManagerTheme;

return [
    'site_name' => 'My Evolution CMS Site',
    'site_start' => 1,
    'error_page' => 1,
    'unauthorized_page' => 1,
    'site_unavailable_page' => '',
    'top_howmany' => 10,
    'custom_contenttype' => 'application/rss+xml,application/pdf,application/vnd.ms-word,application/vnd.ms-excel,text/html,text/css,text/xml,text/javascript,text/plain,application/json',
    'valid_hostnames' => '',
    'enable_filter' => 0,
    'enable_at_syntax' => 0,
    'minifyphp_incache' => 0,
    'rss_url_news' => __('global.rss_url_news_default'),
    'rss_url_security' => __('global.rss_url_security_default'),
    'friendly_urls' => 0,
    'friendly_url_prefix' => '',
    'friendly_url_suffix' => '.html',
    'friendly_alias_urls' => '1',
    'use_alias_path' => '1',
    'make_folders' => '0',
    'seostrict' => '0',
    'alias_listing' => 1,
    'check_files_onlogin' => "index.php\n.htaccess\nmanager/index.php\n/core/config/database/connections/default.php",
    'use_captcha' => 0,
    'pwd_hash_algo' => 0,
    'rb_base_url' => 'assets/',
    'resource_tree_node_name' => 'pagetitle',
    'udperms_allowroot' => 0,
    'failed_login_attempts' => 3,
    'blocked_minutes' => 10,
    'error_reporting' => '1',
    'send_errormail' => '0',
    'enable_bindings' => 1,
    'captcha_words' => __('global.captcha_words_default'),
    'emailsender' => 'you@example.com',
    'smtp_host' => 'smtp.example.com',
    'smtp_port' => 25,
    'smtp_username' => 'emailsender',
    'emailsubject' => __('global.emailsubject_default'),
    'signupemail_message' => __('global.system_email_signup'),
    'websignupemail_message' => __('global.system_email_websignup'),
    'webpwdreminder_message' => __('global.system_email_webreminder'),
    'warning_visibility' => 1,
    'tree_page_click' => 27,
    'use_breadcrumbs' => 0,
    'remember_last_tab' => 0,
    'tree_show_protected' => 0,
    'show_meta' => 0,
    'datepicker_offset' => -10,
    'number_of_logs' => 100,
    'number_of_results' => 30,
    'use_editor' => 1,
    'editor_css_path' => '',
    'filemanager_path' => '[(base_path)]',
    'upload_files' => 'bmp,ico,gif,jpeg,jpg,png,psd,tif,tiff,fla,flv,swf,aac,au,avi,css,cache,doc,docx,gz,gzip,htaccess,htm,html,js,mp3,mp4,mpeg,mpg,ods,odp,odt,pdf,ppt,pptx,rar,tar,tgz,txt,wav,wmv,xls,xlsx,xml,z,zip,JPG,JPEG,PNG,GIF,svg,webp,tpl',
    'upload_images' => 'bmp,ico,gif,jpeg,jpg,png,psd,tif,tiff,svg,webp',
    'upload_media' => 'au,avi,mp3,mp4,mpeg,mpg,wav,wmv',
    'upload_maxsize' => '5000000',
    'new_file_permissions' => '0644',
    'new_folder_permissions' => '0755',
    'use_browser' => 1,
    'which_browser' => 'mcpuk',
    'rb_webuser' => 0,
    'rb_base_dir' => '[(base_path)]assets/',
    'clean_uploaded_filename' => 1,
    'strip_image_paths' => 1,
    'maxImageWidth' => 2600,
    'maxImageHeight' => 2200,
    'clientResize' => 0,
    'noThumbnailsRecreation' => 0,
    'thumbWidth' => 150,
    'thumbHeight' => 150,
    'thumbsDir' => '.thumbs',
    'jpegQuality' => 90,
    'denyZipDownload' => 0,
    'denyExtensionRename' => 0,
    'showHiddenFiles' => 0,
    'session_timeout' => 15,
    'site_unavailable_message' => __('global.siteunavailable_message_default'),
    'allow_eval' => 'with_scan',
    'safe_functions_at_eval' => 'time,date,strtotime,strftime',
    'use_udperms' => '1',
    'email_sender_method' => 1,
    'email_method' => 'mail',
    'smtp_auth' => '0',
    'which_editor' => 'TinyMCE4',
    'auto_menuindex' => '1',
    'tinymce4_theme' => 'custom',
    'validate_referer' => '1',
    'xhtml_urls' => '1',
    'allow_duplicate_alias' => '0',
    'automatic_alias' => '1',
    'datetime_format' => 'dd-mm-YYYY',
    'enable_cache' => '1',
    'cache_type' => '1',
    'server_protocol' => 'http',
    'settings_version' => 0,
    'server_offset_time' => 0,
    'default_template' => 0,
    'publish_default' => '0',
    'cache_default' => '1',
    'search_default' => '1',
    'group_tvs' => 0,
    'global_tabs' => 1,
    'manager_theme_mode' => '3',
    'login_form_position' => 'left',
    'login_form_style' => 'dark',
    'manager_menu_position' => 'top',
    'tinymce4_skin' => 'lightgray',
    'manager_login_startup' => 0,
    'base_url' => '/',
    'virtual_dir' => '',
    'show_picker' => 0,
    'show_newresource_btn' => 1,
    'show_fullscreen_btn' => 0,
    'chunk_processor' => 'DLTemplate',
    'allow_multiple_emails' => 0,
    'manager_menu_height' => 2.2, // rem
    'manager_tree_width' => 20, // rem
    'track_visitors' => 0,
    'login_logo' => '',
    'login_bg' => '',
    'smtp_secure' => '',
    'snapshot_path' => '[(base_path)]assets/backup/',
];
