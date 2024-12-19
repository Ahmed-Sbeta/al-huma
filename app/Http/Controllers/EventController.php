<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        return view('Pages.Events.events');
    }

    public function index_ar(){
        return view('Pages.Events.events_ar');
    }

    public function details(){
        return view('Pages.Events.event-details');
    }
}
