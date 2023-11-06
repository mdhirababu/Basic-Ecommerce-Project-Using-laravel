<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    function imageProcessing($req){
        $image = $req->file('img');
        $imageName = $image->getClientOriginalName();
        $directory = "category-image/";
        $image->move($directory, $imageName);
        return $directory.$imageName;
    }

    function createCategory($data){
        $categories = new Category();
        $categories->category_name = $data->cname;
        $categories->category_desp = $data->ldesp;
        $categories->image = $categories->imageProcessing($data);
        $categories->save();
    }
}
