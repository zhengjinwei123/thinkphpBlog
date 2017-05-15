<?php

namespace app\index\controller;

use app\common\controller\User as commonUser;

class User extends commonUser
{
    public function demo()
    {
        $commonUser = new commonUser();
        return $commonUser->showName('zjw');
    }

    public function demo1()
    {
        return $this->showName('zjw1');
    }
}