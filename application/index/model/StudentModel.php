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
}



?>