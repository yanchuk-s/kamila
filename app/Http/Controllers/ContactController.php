<?php

namespace App\Http\Controllers;

use App\Helpers\Languages;
use App\Mail\ContactPage;
use App\ViewModels\ContactViewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends LayoutController
{
   public function contactPage($language = Languages::DEFAULT_LANGUAGE){
       Languages::localizeApp($language);

       $model = new ContactViewModel($language ,'contact',1);

       return view('contact', compact('model'));
   }
    
    public function send(){
        $name = request('name');
        $email = request('email');
        $text = request('text');
        
        Mail::to('yanchukserhiy96@gmail.com')->send(new ContactPage(
            $name,
            $email,
            $text
        ));

        return response()->json([
            'status' => 'success',
            'name' => $name,
            'email' => $email,
            'text' => $text
        ]);
    }
}
