<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('Pages.Contact_us.contact');
    }

    public function index_ar(){
        return view('Pages.Contact_us.contact_ar');
    }
}
