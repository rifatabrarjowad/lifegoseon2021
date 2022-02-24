<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelectController extends Controller
{
    function SelectData(){
        $data = \App\Select::all();
        return view('select',['data'=>$data]);
    }
}