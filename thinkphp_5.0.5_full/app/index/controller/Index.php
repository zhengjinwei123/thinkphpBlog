<?php
namespace app\index\controller;

use app\common\controller\Index as commonIndex;

class Index
{
    public function __construct()
    {
        config("before", "beforeAction");
    }

    public function index()
    {
        return "index Index index";
    }

    public function common()
    {
        $common = new commonIndex();
        return $common->index();
    }

    public function conf()
    {
        var_dump(config());
//        var_dump(config("before"));
    }
}
