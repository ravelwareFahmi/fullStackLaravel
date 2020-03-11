<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //
    public function showAll($id){
        dd($id);
        $dataProduct = Product::all(); 
        return view('product.display', ["product" => $dataProduct]);
    }

    public function saveNew(Request $request){
        
    }
}
