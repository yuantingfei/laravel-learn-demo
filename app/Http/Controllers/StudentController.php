<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
    public function test($id)
    {
        //插入
        // $bool = DB::insert('insert into student(name,age) values(?,?)',['ytf',18]);
        //查询
        //$students = DB::select("select * from student");
        //修改
        // $num =DB::update('update student set age = ? where name = ?',[20,'ytf']);
        //dd($students);
        //删除
        $num = DB::delete('delete from student where id = ?',[1]);
        var_dump($num);
        return "ytf-".$id;

    }
    public function query()
    {
        //插入 返回是否成功
        $bool = DB::table('student')->insert(
            ["name"=>"liuwen","age"=>222]
        );
        //插入 返回插入id
        $id = DB::table('student')->insertGetId(
            ["name"=>"liuwen","age"=>222]
        );
        return $id;
    }
    public function query2()
    {
        //更新
        $num = DB::table('student')
        ->where('id',3)
        ->update(
            ["name"=>"lpppen","age"=>222]
        );
        //自增 默认为1
        DB::table("student")->where('id',3)->increment('age');
        //DB::table("student")->where('id',3)->increment('age',3);
        //删除
        //DB::table("student")->where('id',3)->delete();
        return "test";
    }
}
