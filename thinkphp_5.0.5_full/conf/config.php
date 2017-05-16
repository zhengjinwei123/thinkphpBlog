<?php

return array(
    "app_status"       => "office",
    "app_email"        => "2538698032@qq.com",
    "app_author"       => "jade",
    "app_debug"        => true,
    "auto_bind_module" => true,
    'url_route_on'     => true,
    'url_route_must'   => false,
    'session'                => [
        'id'             => 'jade',
        // SESSION_ID的提交变量,解决flash上传跨域
        'var_session_id' => 'jade_',
        // SESSION 前缀
        'prefix'         => 'think',
        // 驱动方式 支持redis memcache memcached
        'type'           => '',
        // 是否自动开启 SESSION
        'auto_start'     => true
    ],
    // 视图输出字符串内容替换
    'view_replace_str'       => [

    ],
);