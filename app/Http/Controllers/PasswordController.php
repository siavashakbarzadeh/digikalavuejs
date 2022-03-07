<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Auth;

class PasswordController extends Controller
{


    public  function index(){


        return view('auth.reset');


    }


    public  function Change(PasswordRequest $request){

        $user_id=auth()->user()->id;


        $password1=bcrypt($request->password_confirmation);


        $user=User::where('id',$user_id)->update([
           'password'=>$password1


        ]);


        if ($user){
            return redirect('/profile/');
        }


    }
}
