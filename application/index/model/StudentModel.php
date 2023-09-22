<?php
namespace app\index\model;
use think\Model;

use think\Db;

class StudentModel extends Model{
    // 查询列表
    public function index(){
        $list = Db::table('student')->select();
        return $list;
    }

    // 添加功能
    public function adds($data){
        $adds = Db::table('student')->insert([
            'name' => $data['name'],
            'age' => $data['age'],
            'sex' => $data['sex'],
            'classes'=> $data['class'],
            'create_time'=>time(),
            'update_time'=>time()
        ]
        );
        return $adds;
    }
}



?>