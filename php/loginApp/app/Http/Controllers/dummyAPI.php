<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Singup;
class dummyAPI extends Controller
{
    function getData()
    {
        return Singup::all();
    }
}
