<?php

namespace App\Http\Controllers;

use App\Response;

use App\ViewModels\HomeViewModel;
use App\ViewModels\AdminResponseViewModel;
use Illuminate\Http\Request;

class ResponseController extends LayoutController
{
    
    public function responseShowIndex()
    {

        $model = new AdminResponseViewModel('admin.adminResponse', 1);

        $model->response = Response::limit($model->limit)
            ->offset($model->offset)
            ->orderByRaw('created_at desc')
            ->get();

        $model->responseTotalCount = Response::count();
        //dd($model);

        return view("admin.adminResponse", compact('model'));
    }

    public function indexPagination($page = 1)
    {
        $model = new AdminResponseViewModel('admin.adminResponse', $page);

        $model->response = Response::limit($model->limit)
            ->offset($model->offset)
            ->orderByRaw('created_at desc')
            ->get();


        $model->responseTotalCount = Response::count();

        return view("admin.adminResponse", compact('model'));
    }


    public function addResponseForm()
    {
        $model = new AdminResponseViewModel('admin.adminAddResponse', 1);


        return view("admin.adminAddResponse", compact('model'));
    }

    
    public function addResponse()
    {
        $user_name = request('user_name');
        $response = request('response');

        $addresponse = new Response();
        $addresponse->user_name = $user_name;
        $addresponse->response = $response;
        $addresponse->save();

        return response()->json([
            'status' => 'success'
        ]);

    }

    public function deleteResponse()
    {
        $id = request('id');


        $deleteResponse = Response::whereId($id)->first();
        $deleteResponse->delete();

        return response()->json([
            'status' => 'success'
        ]);

    }
    
}


