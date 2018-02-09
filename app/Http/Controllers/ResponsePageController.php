<?php

namespace App\Http\Controllers;

use App\Helpers\Languages;
use App\Response;

use App\ViewModels\HomeViewModel;
use App\ViewModels\ResponseViewModel;
use Illuminate\Http\Request;

class ResponsePageController extends LayoutController
{
    
    public function responsePageIndex($language = Languages::DEFAULT_LANGUAGE)
    {

        Languages::localizeApp($language);
        

        $model = new ResponseViewModel($language, 'responses', 1);


        $model->response = Response::select([
            'id',
            'user_name',
            'response',
            'created_at'
        ])
            ->orderByRaw('created_at desc')
            ->get();

        $model->responseTotalCount = Response::count();
        //dd($model);

        return view("responses", compact('model'));
    }
    
    
}


