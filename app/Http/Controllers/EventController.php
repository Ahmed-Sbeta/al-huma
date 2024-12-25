<?php

namespace App\Http\Controllers;
use App\Models\events;
use App\Models\participation;
use Auth;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        return view('Pages.Events.events');
    }

    public function index_ar(){
        $events = events::all();
        return view('Pages.Events.events_ar',compact('events'));
    }

    public function participants(){
        return view('Pages.Events.participantsList');
    }

    public function view($id){
        $event = events::with('participants')->find($id);
        
        $user = Auth::user();

        $hasParticipated = $event->participants->contains($user);
        return view('Pages.Events.event-details',compact('event','hasParticipated'));
    }

    Public function subscribe($id){
        $sub = new participation;
        $sub->User_id = Auth::id();
        $sub->Event_id = $id;
        $sub->save();
        return redirect()->back()->with('msg','تم الاشتراك فالعالية بنجاح');
    }

    Public function unsubscribe($id){
        $sub = participation::where('event_id',$id)->where('user_id',Auth::id())->get();
        $sub->first()->delete();
        return redirect()->back()->with('msg','تم الغاء الاشتراك فالعالية بنجاح');
    }

    public function addEvent(Request $request){
        $event = new events;
        $event->title= request('title');
        $event->description= request('description');
        $event->event_start = request('start-date');
        $event->event_end = request('end-date');
        $event->location = request('location');
        $event->capacity = request('capacity');
        $event->organizerID = Auth::user()->id;
        $event->type = request('type');
        if(request('gender_cond') == 1){
            $event->male_allowed = True;
            $event->female_allowed = True;
        }elseif (request('gender_con') == 2){
            $event->male_allowed = True;
            $event->female_allowed = false;
        }else{
            $event->male_allowed = false;
            $event->female_allowed = True;
        }
        //image
        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        
        $event->image= $image->storeAs('public',$imageName);

        $event->save();
        return redirect()->back()->with('msg', 'Event added succusfully');
    }
}
