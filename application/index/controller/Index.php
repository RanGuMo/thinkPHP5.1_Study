<?php
namespace app\index\controller;

use think\Controller;

use think\Db; //引入数据库

class Index extends Controller
{
    public function index()
    {
        // return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V5.1<br/><span style="font-size:30px">16载初心不改（2006-2022） - 你值得信赖的PHP框架</span></p></div><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="eab4b9f840753f8e7"></think>';
        // return view();
        // $this->assign("name1","张三");
        // return $this->fetch("hello",["name2"=>"李四"]);
        return view();
    }

    public function hello($name = 'ThinkPHP5')
    {
        // return 'hello,' . $name;
        // return $this->success('成功了','index');
        return $this->error('失败了');
    }

    public function select(){
        $list = Db::table("student")->select(); //查询所有数据
        return json($list); //转为json格式返回
    }
}
