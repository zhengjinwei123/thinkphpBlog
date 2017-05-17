<?php

namespace app\index\controller;

use think\Controller;
use think\Config;

class Common extends Controller
{
    /*
    * 网站主题
    */
    protected $theme = 'default';

    /*
    * 数据表前缀
    */
    protected $prefix = '';

    public function _initialize()
    {
        parent::_initialize();

        $this->prefix = Config::get('database.prefix');
//        $this->theme = get_user_info('','site_theme');
    }

    /*
     * 空操作
     */
    public function _empty()
    {
        abort(404,'页面不存在');
    }

}