<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Helpers\Languages;
use App\Mail\callbackModal;
use App\Mail\OrderColl;
use App\Response;
use App\Slider;
use App\User;
use App\ViewModels\HomeViewModel;
use Illuminate\Http\Request;
use App\ViewModels\BlogViewModel;
use Illuminate\Support\Facades\Mail;

class HomeController extends LayoutController
{
    public function homeIndex($language = Languages::DEFAULT_LANGUAGE) {
//             auth()->logout();
        Languages::localizeApp($language);

        $model = new HomeViewModel($language, 'home', 1);
        $model->homeBlog = Blog::select([
            'id',
            'category_id',
            'title_' . $model->language . ' as title',
            'slug',
            'description_' . $model->language . ' as description',
            'image_path',
            'view_count',
            'created_at',
            'updated_at',
        ])->orderByDesc('created_at')
            ->limit(5)
            ->get();

        $model->homeResponse = Response::orderByDesc('created_at')
            ->limit(5)
            ->get();

      // dd($model);

        $model->slider = Slider::select([
            'id',
            'title_' . $model->language . ' as title',
            'text_' . $model->language . ' as text',
            'image_slide',
            'created_at'
        ])->orderByDesc('created_at')->get();



        return view("home", compact('model'));
    }

    public function collbackModal(){
        $name = request('name');
        $phone = request('phone');
        $email = request('email');
        Mail::to('yanchukserhiy96@gmail.com')->send(new callbackModal(
            $name,
            $phone,
            $email
        ));

        return response()->json([
            'status' => 'success',
            'name' => $name,
            'phone' => $phone,
            'email' => $email
        ]);

    }
    
    public function orderColl(){
        $name = request('name');
        $phone = request('phone');

        Mail::to('yanchukserhiy96@gmail.com')->send(new orderColl(
            $name,
            $phone
        ));

        return response()->json([
            'status' => 'success',
            'name' => $name,
            'phone' => $phone,
        ]);
        
    }
}
