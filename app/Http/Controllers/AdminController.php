<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class AdminController extends Controller
{
    function index(){
        return view('backend.dashboard');
    }

    function addCategory(){
        return view('backend.addcategory');
    }
    function store(Request $req){
//        return $req->file('img');
         $category = new Category();
         $category->createCategory($req);
         return redirect('add-category')->with('msg', "Category added Successfully");
    }
    function addProduct(){
        $categories= Category::all();
        return view('backend.addProduct',['categories'=>$categories]);
    }
    function pstore(Request $request){
        $products = new Product();
        $products->createProduct($request);
        return redirect('add-product')->with('pmsg', "Product Add Successfully");

    }

    function manageProduct(){
        $products = Product::all();
        return view('backend.manageProduct', ['ourproducts' => $products]);
    }
    function pedit($product){
        $desirep = Product::find($product);
        return view('backend.productUpdate', [ "product" => $desirep ]);
    }
    function pupdate(Request $request ,$p){
        $desirep = Product::find($p);
        $p = new Product();
        if ($request->file('img')){
            if(file_exists($desirep->image)){
              unlink($desirep->image);
            }
            $desirep->image = $p->imageProcessing($request);
        }
        $desirep->product_title = $request->pnmae;
        $desirep->product_sd = $request->psd;
        $desirep->product_ld = $request->pld;
        $desirep->product_price = $request->pprice;


        $desirep->save();
        return redirect('manage-product');
    }

    public function pdelete($p){
        $product = Product::find($p);
        if(file_exists($product->image)){
            unlink($product->image);
        }
        $product->delete();

        return back()->with('pmsg','Product Deleted Successfully!');


    }
}
