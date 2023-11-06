<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    function imageProcessing($req){

        $image = $req->file('img');
        $imageName = $image->getClientOriginalName();
        $directory = "product-image/";
        $image->move($directory, $imageName);
        return $directory.$imageName;
    }

    function createProduct($request){
        $products = new Product();
        $products->category_id = $request->category_id;
        $products->product_title = $request->pnmae;
        $products->product_sd = $request->psd;
        $products->product_ld = $request->pld;
        $products->product_price = $request->pprice;
        $products->image = $products->imageProcessing($request);
        $products->save();
    }
}
