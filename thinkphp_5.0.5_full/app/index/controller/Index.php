<?php
namespace app\index\controller;

use app\common\controller\Index as commonIndex;
use think\Config;
use think\Env;

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

    public function config(){
        $res = Config::get();
        var_dump($res);
    }

    public function env(){
//        var_dump($_ENV);
//        var_dump($_COOKIE);
//        var_dump($_GET);
//        var_dump($_SESSION);
        $e = Env::get("name");
        var_dump($e);
        $e = Env::get("database.host");
        var_dump($e);
        $e = Env::get("database_host");
        var_dump($e);
        $e = Env::get("status");
        var_dump($e);
        $e = Env::get("statuss","prod");
        var_dump($e);
    }

    public function info($id){

        echo url('index/index/index',["id"=>$id])."</br>";
        echo url('index/index/info',["id"=>$id])."</br>";
        return $id;
    }
}
