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
        $user_name = request('userName');
        $response = request('responsDescr');



        $extension = request()->file('responseImg')->getClientOriginalExtension(); // getting image extension
        $dir = 'uploads/users/';
        $filename = uniqid() . '_' . time() . '.' . $extension;
        request()->file('responseImg')->move($dir, $filename);

        $image_path = "/uploads/users/$filename";

        $addresponse = new Response();
        $addresponse->user_name = $user_name;
        $addresponse->response = $response;
        $addresponse->image_response = $image_path;
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
    
    
    public function showResponseEdit($id){
        $response = Response::whereId($id)->first();
        return view('admin.adminEditResponse', compact('response'));
    }
    
    public function editResponse(){
        $user_name = request('userName');
        $response = request('responsDescr');
        $id = request('responseId');

        $editresponse = Response::whereId($id)->first();

        $editresponse->user_name = $user_name;
        $editresponse->response = $response;

        if (request()->file('responseImg') || !is_null(request()->file('responseImg'))){


            $extension = request()->file('responseImg')->getClientOriginalExtension(); // getting image extension
            $dir = 'uploads/users/';
            $filename = uniqid() . '_' . time() . '.' . $extension;
            request()->file('responseImg')->move($dir, $filename);

            $image_path = "/uploads/users/$filename";

            $editresponse->image_response = $image_path;

        }

        $editresponse->save();

        return response()->json([
            'status' => 'success'
        ]);


    }
    
}


