<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $products   = Product::all();
        $categories = Category::all();
        return view('frontend.home', [ 'products' => $products ,'categories'=>$categories]);
    }
    function shop($c){
        $cProducts          = Product::where('category_id',$c)->get();
        $categories = Category::all();
        return view('frontend.shop', ['categories'=>$categories,'products'=>$cProducts]);
    }
    function single(){
        return view('frontend.single');
    }
    function productDetails($id){

        $p = Product::find($id);
        $categories = Category::all();
        return view('frontend.single', ['categories'=>$categories, "product" => $p ]);
    }
}
