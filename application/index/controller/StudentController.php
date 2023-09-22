<?php
namespace app\index\controller;
use think\Controller;
use think\Request;

use app\index\model\StudentModel;

class StudentController extends Controller{
    // 查询列表
    public function  index(){
        $model = new StudentModel();
        $to = $model->index();
        // var_dump($to); //打印数据
        // return json($to);
        $this->assign('list',$to);
        return $this->fetch();
    }

    // 添加页面
    public function add(){
        return $this->fetch();
    }
    // 添加功能
    public function adds(Request $request){

        $data =[
            'name'=>$request->names,
            'sex'=>$request->sex,
            'class'=>$request->classes,
            'age'=>$request->age,
        ];
        $model = new StudentModel();
        $to = $model->adds($data); //调用模型中的方法
        if($to){
            return $this->success('添加成功','index');
        }
        return $this->error('添加失败');
    }




}



?>