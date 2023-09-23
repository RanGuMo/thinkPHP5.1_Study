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

    // 删除功能
    public function del(Request $request){
        $id = $request->id;
        $model = new StudentModel();
        $to =   $model->del($id);
        if($to){
            return $this->success('删除成功','index');
        }
        return $this->error('删除失败');
    }


     // 修改页面
     public function edit(Request $request){
        $id = $request->id;
        $model = new StudentModel();
        $to = $model->edit($id);
        $this->assign('datas',$to); //回显使用
        return $this->fetch();
    }
    // 修改功能
    public function edits(Request $request){

        $data =[
            'id'=>$request->id, //修改需要传递id
            'name'=>$request->names,
            'sex'=>$request->sex,
            'class'=>$request->classes,
            'age'=>$request->age,
        ];
        $model = new StudentModel();
        $to = $model->edits($data); //调用模型中的方法
        if($to){
            return $this->success('修改成功','index');
        }
        return $this->error('修改失败');
    }




}



?>