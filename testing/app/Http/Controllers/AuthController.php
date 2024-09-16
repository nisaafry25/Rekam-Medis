<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Termwind\Components\Dd;

class AuthController extends Controller
{

    public function index()
    {}
    public function login (){
        return view("auth.login");
    }

    public function logout (){
        Auth::logout();
        return redirect()->route('login');
    }

    public function postLogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))){
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('login');
        }

        }
            

    }
  

