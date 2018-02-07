<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\ViewModels\BlogViewModel;
use Illuminate\Http\Request;

class BlogController extends LayoutController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $model = new BlogViewModel('blog-list', 1);

        $model->blogs = Blog::limit($model->limit)
            ->offset($model->offset)
            ->orderByRaw('created_at desc')
            ->get();

        $model->randomBlogs = Blog::limit(5)
            ->orderByRaw('view_count desc')
            ->get();
        
        $model->categoryes = Category::get();

        $model->blogsTotalCount = Blog::count();

        return view("blogs-list", compact('model'));
    }
    
    public function indexPagination($page = 1)
    {
        $model = new BlogViewModel('blog-list', $page);

        $model->blogs = Blog::limit($model->limit)
            ->offset($model->offset)
            ->orderByRaw('created_at desc')
            ->get();
    
        $model->randomBlogs = Blog::limit(5)
            ->orderByRaw('view_count desc')
            ->get();

        $model->categoryes = Category::get();

        $model->blogsTotalCount = Blog::count();

        return view("blogs-list", compact('model'));
    }


    public function categoryIndex($slugCaregory)
    {
        $model = new BlogViewModel('blog-list', 1);

        $model->category = Category::whereSlug($slugCaregory)->first();

        $model->blogs = Blog::whereCategoryId($model->category->id)->limit($model->limit)
            ->offset($model->offset)
            ->orderByRaw('created_at desc')
            ->get();

        $model->blogsTotalCount = Blog::whereCategoryId($model->category->id)->count();

        $model->randomBlogs = Blog::limit(5)
            ->orderByRaw('view_count desc')
            ->get();

        $model->categoryes = Category::get();

        return view("category", compact('model'));
    }
    
    
    public function categoryIndexPagination($slugCaregory, $page = 1)
    {
        $model = new BlogViewModel('blog-list', $page);

        $model->category = Category::whereSlug($slugCaregory)->first();

        $model->blogs = Blog::whereCategoryId($model->category->id)->limit($model->limit)
            ->offset($model->offset)
            ->orderByRaw('created_at desc')
            ->get();

        $model->blogsTotalCount = Blog::whereCategoryId($model->category->id)->count();

        $model->randomBlogs = Blog::limit(5)
            ->orderByRaw('view_count desc')
            ->get();

        $model->categoryes = Category::get();

        return view("category", compact('model'));
    }


    
    public function blogIndex($slug){

        $model = new BlogViewModel('blog', 1);

        $model->blog = Blog::whereSlug($slug)->first();

        $model->blog->increment('view_count');

        $model->randomBlogs = Blog::limit(5)
            ->orderByRaw('view_count desc')
            ->get();

        $model->categoryes = Category::get();

        
        return view("blog", compact('model'));
    }


  
    
}



