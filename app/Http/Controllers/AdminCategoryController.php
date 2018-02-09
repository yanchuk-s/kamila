<?php

namespace App\Http\Controllers;

use App\Category;
use App\Helpers\Languages;
use App\ViewModels\CategoryViewModel;
use Illuminate\Http\Request;

class AdminCategoryController extends LayoutController
{
    public function categoryshow()
    {
        $model = new CategoryViewModel(Languages::DEFAULT_LANGUAGE ,'admin.adminCategory');

        $model->categories = Category::select([
            'id',
            'name_' . $model->language . ' as name',
            'slug',
            ])
            ->get();

        return view("admin.adminCategory", compact('model'));
    }
    
    
    public  function addcategoryform(){

        return view("admin.adminAddCategory", compact('model'));
    }


    public  function addcategory(){

        $name_ru = request('name_ru');
        $name_uk = request('name_uk');


        $addcategory = new Category();
        $addcategory->name_ru = $name_ru;
        $addcategory->name_uk = $name_uk;
        $addcategory->slug = str_slug($name_ru);

        $addcategory->save();

        return response()->json([
            'status' => 'success'
        ]);

    }

    
}
