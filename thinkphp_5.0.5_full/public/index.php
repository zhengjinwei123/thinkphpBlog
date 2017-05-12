<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]


// 定义应用目录
define('APP_PATH', __DIR__ . '/../application/');

// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';

////var_dump($_SERVER);
//list($name, $class) = explode("/","name/cls/index.php",2);
//var_dump("$name---$class");
//var_dump(str_replace(['.','#'], [DS, '.'], "name/cls/index.#php"));
//var_dump(strpos("aaa\\aaa", '\\'));
//var_dump(sprintf('%012d', time()));
//
//function func1($param1,$parma2=1){
//    echo __FUNCTION__ . " get param:$param1--$parma2";
//}
//
//call_user_func_array("func1",[22,222]);
