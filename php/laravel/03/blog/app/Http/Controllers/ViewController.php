<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function MyName($nameValue){
        return "<h1>".$nameValue."</h1>";
    }
}