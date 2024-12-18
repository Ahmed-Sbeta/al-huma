<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return view('Pages.Profile.profile');
    }

    public function all_events(){
        return view('Pages.Profile.profile_events');
    }

    public function all_users(){
        return view('Pages.Profile.profile_users');
    }

    public function add_event(){
        return view('Pages.Profile.profile_add_event');
    }

    public function Register(Request $request){

        $Aya = new User;
        $Aya->name = request('name');
        $Aya->email = request('email');
        $Aya->phone_number = request('phone_number');
        $Aya->age = request('Age');
        $Aya->sex = request('Gender');
        $Aya->role = 1;
        $Aya->password = Hash::make(request('password'));
        $Aya->save();
        return redirect()->back()->with('success','تــمــت إضــافــة مـسـتـخـدم بــنــجــاح');

    }
}
