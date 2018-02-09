<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Helpers\Languages;
use App\ViewModels\AdminBlogViewModel;
use Illuminate\Http\Request;

class AdminBlogController extends LayoutController
{
    public function adminBlogs(){

        $model = new AdminBlogViewModel('admin.adminLayout', 1);

        $model->blogs = Blog::select([
            'id',
            'category_id',
            'title_' . $model->language . ' as title',
            'slug',
            'description_' . $model->language . ' as description',
            'image_path',
            'view_count',
            'created_at',
            'updated_at',])->

            limit($model->limit)
            ->offset($model->offset)
            ->orderByRaw('created_at desc')
            ->get();

        $model->blogsTotalCount = Blog::count();

        return view("admin.adminLayout", compact('model'));
    }


    public function indexPagination($page = 1)
    {
        $model = new AdminBlogViewModel('admin.adminLayout', $page);

        $model->blogs = Blog::select([
            'id',
            'category_id',
            'title_' . $model->language . ' as title',
            'slug',
            'description_' . $model->language . ' as description',
            'image_path',
            'view_count',
            'created_at',
            'updated_at',])->

        limit($model->limit)
            ->offset($model->offset)
            ->orderByRaw('created_at desc')
            ->get();


        $model->blogsTotalCount = Blog::count();

        return view("admin.adminLayout", compact('model'));
    }
}




