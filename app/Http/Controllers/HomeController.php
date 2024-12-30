<?php

namespace App\Http\Controllers;
use App\Models\events;

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
        $events = events::latest('created_at')->take(3)->get();
        $Evining = events::where('type','evining')->latest('created_at')->first();
        $galory = events::where('type','galory')->latest('created_at')->first();
        $workshop = events::where('type','workshop')->latest('created_at')->first();
        $discussions = events::where('type','discussions')->latest('created_at')->first();

        $galoryCount = events::where('type','galory')->count();
        $EviningCount = events::where('type','evining')->count();
        $workshopCount = events::where('type','workshop')->count();
        $discussionsCount = events::where('type','discussions')->count();

        return view('Pages.Home.index_ar',compact('events','Evining','galory','workshop','discussions','galoryCount','EviningCount','workshopCount','discussionsCount'));
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
