<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Response;
use App\User;
use App\ViewModels\HomeViewModel;
use Illuminate\Http\Request;
use App\ViewModels\BlogViewModel;

class HomeController extends LayoutController
{
    public function homeIndex(){
//             auth()->logout();

        $model = new HomeViewModel('home', 1);
        $model->homeBlog = Blog::limit(5)
            ->orderByRaw('created_at desc')
            ->get();
        $model->homeResponse = Response::limit(5)->get();
      // dd($model);



        return view("home", compact('model'));
    }
}
