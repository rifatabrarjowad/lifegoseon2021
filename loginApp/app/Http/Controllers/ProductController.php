<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
     public function store(Request $request)
     {
  
        $product = new Product;
        $product->name = $request->name;
        $product->password = $request->password;
        $product->save();
        return response()->json(['massage'=>'Login'], 200);
    }
}
