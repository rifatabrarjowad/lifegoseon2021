<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SelectController extends Controller
{
    function SelectData(){
        $jsonData = DB::select('select * from user');
        $selectData = json_encode($jsonData);
        $viewData = json_decode($selectData);
        return view('select',['viewData'=>$viewData]);
    }
    function InsertData(Request $req){
        $name = $req->input('name');
        $email = $req->input('email');
        $pass = $req->input('pass');
       $ok = DB::insert('INSERT INTO `user`(`name`, `email`, `password`) VALUES (?,?,?)',[$name,$email,$pass]);
        if($ok == true){
            return "Success";
        }else{
            return "faild";
        }
       
    }
    function DeleteData(Request $req){
        $id = $req->input('id');
       
       $ok = DB::insert('DELETE FROM `user` WHERE `id` = ?',[$id]);
        if($ok == true){
            return "Delete Success";
        }else{
            return "faild";
        }
       
    }
}