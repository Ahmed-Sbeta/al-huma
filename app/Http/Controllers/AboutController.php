<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('Pages.About.about');
    }

    public function index_ar(){
        return view('Pages.About.about_ar');
    }
}
