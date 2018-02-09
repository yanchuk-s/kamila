<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Helpers\Languages;
use App\ViewModels\BlogViewModel;
use Illuminate\Http\Request;

class BlogController extends LayoutController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($language = Languages::DEFAULT_LANGUAGE)
    {
        Languages::localizeApp($language);
        
        $model = new BlogViewModel($language ,'blog-list', 1);

//        $model->blogs = Blog::limit($model->limit)
//            ->offset($model->offset)
//            ->orderByRaw('created_at desc')
//            ->get();

        $model->blogs = Blog::select([
            'id',
            'category_id',
            'title_' . $model->language . ' as title',
            'slug',
            'description_' . $model->language . ' as description',
            'image_path',
            'view_count',
            'created_at',
            'updated_at',
        ])
            ->limit($model->limit)
            ->offset($model->offset)
            ->orderByDesc('created_at')
            ->get();


        $model->randomBlogs = Blog::select([
            'id',
            'category_id',
            'title_' . $model->language . ' as title',
            'slug',
            'description_' . $model->language . ' as description',
            'image_path',
            'view_count',
            'created_at',
            'updated_at',
        ])->limit(5)
            ->orderByRaw('view_count desc')
            ->get();
        
        $model->categoryes = Category::select([
            'id',
            'name_' . $model->language . ' as name',
            'slug',
            'created_at',
            'updated_at',
        ])->get();

        $model->blogsTotalCount = Blog::count();

        return view("blogs-list", compact('model'));
    }
    
    
    public function indexPagination($page = 1, $language = Languages::DEFAULT_LANGUAGE)
    {
        Languages::localizeApp($language);

        $model = new BlogViewModel($language ,'blog-list', $page);


        $model->blogs = Blog::select([
            'id',
            'category_id',
            'title_' . $model->language . ' as title',
            'slug',
            'description_' . $model->language . ' as description',
            'image_path',
            'view_count',
            'created_at',
            'updated_at',
        ])
            ->limit($model->limit)
            ->offset($model->offset)
            ->orderByDesc('created_at')
            ->get();

        $model->randomBlogs = Blog::select([
            'id',
            'category_id',
            'title_' . $model->language . ' as title',
            'slug',
            'description_' . $model->language . ' as description',
            'image_path',
            'view_count',
            'created_at',
            'updated_at',
        ])->limit(5)
            ->orderByRaw('view_count desc')
            ->get();

        $model->categoryes = Category::select([
            'id',
            'name_' . $model->language . ' as name',
            'slug',
            'created_at',
            'updated_at',
        ])->get();

        $model->blogsTotalCount = Blog::count();

        return view("blogs-list", compact('model'));
    }


    public function categoryIndex($slugCaregory, $language = Languages::DEFAULT_LANGUAGE)
    {

        Languages::localizeApp($language);

        $model = new BlogViewModel($language ,'blog-list', 1);

        $model->category = Category::whereSlug($slugCaregory)->first();

        $model->blogs = Blog::select([
            'id',
            'category_id',
            'title_' . $model->language . ' as title',
            'slug',
            'description_' . $model->language . ' as description',
            'image_path',
            'view_count',
            'created_at',
            'updated_at',
        ])->

            whereCategoryId($model->category->id)->limit($model->limit)
            ->offset($model->offset)
            ->orderByRaw('created_at desc')
            ->get();

        $model->blogsTotalCount = Blog::whereCategoryId($model->category->id)->count();

        $model->randomBlogs = Blog::select([
            'id',
            'category_id',
            'title_' . $model->language . ' as title',
            'slug',
            'description_' . $model->language . ' as description',
            'image_path',
            'view_count',
            'created_at',
            'updated_at',
        ])->limit(5)
            ->orderByRaw('view_count desc')
            ->get();

        $model->categoryes = Category::select([
            'id',
            'name_' . $model->language . ' as name',
            'slug',
            'created_at',
            'updated_at',
        ])->get();

        return view("category", compact('model'));
    }


    public function categoryIndexPagination($slugCaregory, $page = 1, $language = Languages::DEFAULT_LANGUAGE)
    {

        Languages::localizeApp($language);

        $model = new BlogViewModel($language ,'blog-list', $page);


        $model->category = Category::whereSlug($slugCaregory)->first();

        $model->blogs = Blog::select([
            'id',
            'category_id',
            'title_' . $model->language . ' as title',
            'slug',
            'description_' . $model->language . ' as description',
            'image_path',
            'view_count',
            'created_at',
            'updated_at',
        ])->

        whereCategoryId($model->category->id)->limit($model->limit)
            ->offset($model->offset)
            ->orderByRaw('created_at desc')
            ->get();

        $model->blogsTotalCount = Blog::whereCategoryId($model->category->id)->count();

        $model->randomBlogs = Blog::select([
            'id',
            'category_id',
            'title_' . $model->language . ' as title',
            'slug',
            'description_' . $model->language . ' as description',
            'image_path',
            'view_count',
            'created_at',
            'updated_at',
        ])->limit(5)
            ->orderByRaw('view_count desc')
            ->get();

        $model->categoryes = Category::select([
            'id',
            'name_' . $model->language . ' as name',
            'slug',
            'created_at',
            'updated_at',
        ])->get();

        return view("category", compact('model'));
    }



    public function blogIndex($slug, $language = Languages::DEFAULT_LANGUAGE){

        Languages::localizeApp($language);

        $model = new BlogViewModel($language ,'blog', 1);


        $model->blog = Blog::select([
            'id',
            'category_id',
            'title_' . $model->language . ' as title',
            'slug',
            'description_' . $model->language . ' as description',
            'image_path',
            'view_count',
            'created_at',
            'updated_at',
        ])->

        whereSlug($slug)->first();

        $model->blog->increment('view_count');

        $model->randomBlogs = Blog::select([
            'id',
            'category_id',
            'title_' . $model->language . ' as title',
            'slug',
            'description_' . $model->language . ' as description',
            'image_path',
            'view_count',
            'created_at',
            'updated_at',
        ])->limit(5)
            ->orderByRaw('view_count desc')
            ->get();

        $model->categoryes = Category::select([
            'id',
            'name_' . $model->language . ' as name',
            'slug',
            'created_at',
            'updated_at',
        ])->get();



        return view("blog", compact('model'));
    }

    
    
}



