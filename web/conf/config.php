<?php

return array(
    "app_email" => "2538698032@qq.com",
    "app_author" => "jade",
    "app_debug" => true,
    "auto_bind_module" => true,
    'url_route_on' => true,
    'url_route_must' => false,
    'session' => [
        'id' => 'jade',
        // SESSION_ID的提交变量,解决flash上传跨域
        'var_session_id' => 'jade_',
        // SESSION 前缀
        'prefix' => 'think',
        // 驱动方式 支持redis memcache memcached
        'type' => '',
        // 是否自动开启 SESSION
        'auto_start' => true
    ],
    // 视图输出字符串内容替换
    'view_replace_str' => [
        '__IMG__' => '/static/img',
        '__BLOG__' => '睿智的博客'
    ],
    'template' => [
        // 模板引擎类型 支持 php think 支持扩展
        'type' => 'Think',
        // 视图基础目录，配置目录为所有模块的视图起始目录
        'view_base' => '',
        // 当前模板的视图目录 留空为自动获取
        'view_path' => '',
        // 模板后缀
        'view_suffix' => 'html',
        // 模板文件名分隔符
        'view_depr' => "_",
        // 模板引擎普通标签开始标记
        'tpl_begin' => '{',
        // 模板引擎普通标签结束标记
        'tpl_end' => '}',
        // 标签库标签开始标记
        'taglib_begin' => '{',
        // 标签库标签结束标记
        'taglib_end' => '}',
        //layout
        'layout' => true,
        'layout_name' => 'layout'
    ],
);