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

    // 删除功能
    public function del($id){
        $del = Db::table('student')->where('id',$id)->delete();
        return $del;
    }


    // 根据id查询一条数据
    public function edit($id){
        $find = Db::table('student')->where('id',$id)->find();
        return $find;
    }

    // 修改功能
    public function edits($data){
        $edits = Db::table('student')->where('id',$data['id'])->update([
            'name' => $data['name'],
            'age' => $data['age'],
            'sex' => $data['sex'],
            'classes'=> $data['class'],
            'update_time'=>time()
        ]
        );
        return $edits;
    }


}



?>