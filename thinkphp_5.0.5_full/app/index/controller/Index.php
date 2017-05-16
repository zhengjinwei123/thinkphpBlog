<?php
namespace app\index\controller;

use app\common\controller\Index as commonIndex;
use phpDocumentor\Reflection\Types\Integer;
use phpDocumentor\Reflection\Types\String_;
use think\Config;
use think\Env;
use think\Request;

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

    public function config()
    {
        $res = Config::get();
        var_dump($res);
    }

    public function env()
    {
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
        $e = Env::get("statuss", "prod");
        var_dump($e);
    }

    public function info($id)
    {

        echo url('index/index/index', ["id" => $id]) . "</br>";
        echo url('index/index/info', ["id" => $id]) . "</br>";
        return $id;
    }

    public function req(Request $req)
    {
//        $req = request();
//        var_dump($req);

//        $req = Request::instance();

        # 浏览器输入框的值
        var_dump($req->domain());
        var_dump($req->pathinfo());
        var_dump($req->path());

        # 请求类型
        var_dump($req->method());
        var_dump($req->isGet());
        var_dump($req->isPost());
        var_dump($req->isAjax());

        #参数
        var_dump($req->get());
        var_dump($req->param());
        var_dump($req->post());

        session("name", "zjw");
        var_dump($req->session());

        cookie("email", "2538698032@qq.com");
        var_dump($req->cookie());
        var_dump($req->cookie("email"));
        var_dump($req->param("id"));

        # 模块，控制器，操作
        var_dump($req->module());
        var_dump($req->controller());
        var_dump($req->action());

        var_dump($req->url());
        var_dump($req->baseUrl());
    }

    public function type($type = 'json')
    {
        if (!in_array($type, ['json', 'xml', 'jsonp'])) {
            $type = 'json';
        }

        Config::set('default_return_type', $type);

        $result = [
            "code" => "200",
            "list" => [1, 2, 3, 4, 5, 6]
        ];

        return $result;
    }

    public function view1()
    {
        return view();
    }

}
