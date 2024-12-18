<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('Pages.Home.index');
    }

    public function login(){
        return view('auth.auth-login');
    }

    public function register(){
        return view('auth.auth-register');
    }

    public function index_ar(){
        return view('Pages.Home.index_ar');
    }

    public function login_ar(){
        return view('auth.auth-login-ar');
    }

    public function register_ar(){
        return view('auth.auth-register-ar');
    }
   public function test(){
      return view('Pages.test.speakers');
}

}
