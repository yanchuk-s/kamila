<?php

namespace App\Http\Controllers;

use App\User;


class LoginController extends LayoutController
{
    public function loginPage(){
        if ( auth()->check()){
            return redirect('/admin');
        } else{
            return view("admin.login");
        }

    }

    //login
    public function login()
    {
        $email = request('admin_email');
        $password = request('admin_password');

        $user = User::whereEmail($email)->first();
//        $user = User::whereEmail($email)->count();

        if ($user)
        {
            if ($user->password == $password)
            {
                auth()->login($user);

//                if (!auth()->guard()->attempt([
//                    'email' => request('admin_email'),
//                    'password' => request('admin_password')
//                ]))
//                {
//                    return response()->json([
//                        'status' => 'error',
//                        'message' => 'wrong password'
//                    ]);
//                }

                return response()->json([
                    'status' => 'success'
                ]);
            }
            else
            {
                return response()->json([
                    'status' => 'error',
                    'message' => 'wrong password'
                ]);
            }
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'wrong password'
            ]);   
        }
    }
}
