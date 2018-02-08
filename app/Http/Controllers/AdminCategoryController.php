<?php

namespace App\Http\Controllers;

use App\Category;
use App\ViewModels\CategoryViewModel;
use Illuminate\Http\Request;

class AdminCategoryController extends LayoutController
{
    public function categoryshow()
    {
        $model = new CategoryViewModel('admin.adminCategory');

        $model->categories = Category::get();

        return view("admin.adminCategory", compact('model'));
    }
    
    
    public  function addcategoryform(){

        return view("admin.adminAddCategory", compact('model'));
    }


    public  function addcategory(){

        $name = request('name');


        $addcategory = new Category();
        $addcategory->name = $name;
        $addcategory->slug = str_slug($name);

        $addcategory->save();

        return response()->json([
            'status' => 'success'
        ]);

    }

    
}
