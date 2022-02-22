<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //
    function DemoName($firstName, $lastName){
        return view('demo', ['firstName' => $firstName, 'lastName' => $lastName]);
    }
}