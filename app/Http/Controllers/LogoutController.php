<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends LayoutController
{
    public function logout(){
        auth()->logout();
        return redirect('/');
    }
}
