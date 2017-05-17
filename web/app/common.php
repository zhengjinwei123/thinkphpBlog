<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

use think\db;

function get_user_info($userName, $key)
{
    $userModel = Db::name("user");

    $results = $userModel->where(["username" => $userName])->select();

    if (!empty($results) && isset($results[$key])) {
        return $results[$key];
    }
    return null;
}
