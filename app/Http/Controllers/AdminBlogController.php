<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
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


    public function addBlogForm($page = 1)
    {
        $model = new AdminBlogViewModel('admin.adminAddBlog', $page);

        $model->categories = Category::select([
            'id',
            'name_' . $model->language . ' as name',
            'slug',
        ])
            ->get();
        
        return view("admin.adminAddBlog", compact('model'));
    }

    public function addBlog()
    {

        $title_ru = request('titleRu');
        $title_uk = request('titleUk');
        $description_ru = request('descriptionRu');
        $description_uk = request('descriptionUk');
        $category_id = request('categoryId');


        $extension = request()->file('blog-img')->getClientOriginalExtension(); // getting image extension
        $dir = 'uploads/';
        $filename = uniqid() . '_' . time() . '.' . $extension;
        request()->file('blog-img')->move($dir, $filename);

        $image_path = "/uploads/$filename";


//        \Debugbar::info (request()->file('blog-img'));


        $addblog = new Blog();
        $addblog->title_ru = $title_ru;
        $addblog->title_uk = $title_uk;
        $addblog->description_ru = $description_ru;
        $addblog->description_uk = $description_uk;
        $addblog->category_id = $category_id;
        $addblog->image_path = $image_path;
        $addblog->slug = str_slug($title_ru);


        $addblog->save();

        return response()->json([
            'status' => 'success'
        ]);
    }


    public function deleteBlog()
    {
        $id = request('id');


        Blog::whereId($id)->delete();

        return response()->json([
            'status' => 'success'
        ]);

    }
    
    
}




