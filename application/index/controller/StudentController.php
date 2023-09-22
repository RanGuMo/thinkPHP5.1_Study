<?php
namespace app\index\controller;
use think\Controller;

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
}



?>