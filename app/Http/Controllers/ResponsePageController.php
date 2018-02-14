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
            'image_response',
            'response',
            'created_at'
        ])
            ->orderByRaw('created_at desc')
            ->get();

        $model->responseTotalCount = Response::count();
        //dd($model);

        return view("responses", compact('model'));
    }
    
    public function showOneResp($language = Languages::DEFAULT_LANGUAGE)
    {
        Languages::localizeApp($language);
        
        $id = request('id');
        
        $model = new ResponseViewModel($language, 'responses', 1);
        
        $model->response = Response::select([
            'id',
            'user_name',
            'image_response',
            'response',
            'created_at'
        ])->whereId($id)->first();

        return response()->json([
            'status' => 'success',
            'response' => $model->response
        ]);
    }
    
}


