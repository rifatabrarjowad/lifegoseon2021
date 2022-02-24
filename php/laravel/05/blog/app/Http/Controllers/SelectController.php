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
}