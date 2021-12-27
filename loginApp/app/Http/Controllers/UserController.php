<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class UserController extends Controller
{
    //
    function index(Request $request)
    {
        $user= Product::where('name', $request->name)->first();
        // print_r($data);
            if (!$user) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 404);
            }
        
             
        
            $response = [
                'user' => $user,
                
            ];
        
             return response($response, 201);
    }
}
