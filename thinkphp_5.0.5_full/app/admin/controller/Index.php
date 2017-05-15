<?php

namespace app\admin\controller;

use app\common\controller\Index as commonIndex;

class Index
{
    public function index()
    {
        return "admin Index index";
    }

    public function common()
    {
        $common = new commonIndex();
        return $common->index();
    }

    public function conf(){
        var_dump(config());
    }
}