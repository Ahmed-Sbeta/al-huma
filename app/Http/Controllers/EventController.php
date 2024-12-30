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
        $events = events::latest('created_at')->paginate(9);
        return view('Pages.Events.events_ar',compact('events'));
    }

    public function participants($id){
        $event = Events::findOrFail($id);
        
        $participants = $event->users()->paginate(12);
        return view('Pages.Events.participantsList',compact('participants','event'));
    }

    public function view($id){
        $event = events::with('users')->find($id);
        
        $user = Auth::user();

        $hasParticipated = $event->users->contains($user);
        return view('Pages.Events.event-details',compact('event','hasParticipated'));
    }

    Public function subscribe($id){

        if(!Auth::user()){
            return redirect()->back()->with('err', 'عفوا , عليك تسجيل الدخول كامستخدم للمشاركة في الفعالية');
        }

        $event = events::find($id);
       // Check if the event is restricted for males
        if ($event->male_allowed == 0 && Auth::user()->sex == "Male") {
             return redirect()->back()->with('err', 'عفوا , هذه الفعالية ليست مسموحة للذكور ارجو تفقد فعاليات أخرى');
         }

    // Check if the event is restricted for females
         if ($event->Female_allowed == 0 && Auth::user()->sex == "Female") {
             return redirect()->back()->with('err', 'عفوا , هذه الفعالية ليست مسموحة للنساء ارجو تفقد فعاليات أخرى');
         }

        $sub = new participation;
        $sub->User_id = Auth::id();
        $sub->Events_id = $id;
        $sub->save();
        return redirect()->back()->with('msg','تم الاشتراك فالعالية بنجاح');
    
    }

    Public function unsubscribe($id){
        $sub = participation::where('events_id',$id)->where('user_id',Auth::id())->get();
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
        return redirect()->back()->with('msg', 'تمت اضافة فعالية بنجاح !');
    }

    public function filter(Request $request){
        $filter = $request->input('filter');
        $events = events::query();

        if ($filter == 'women_only') {
            $events->where('female_allowed',1)->where('male_allowed',0); 
        } elseif ($filter == 'discussions') {
            $events->where('type', 'discussions');
        } elseif ($filter == 'workshops') {
            $events->where('type', 'workshop');
        } elseif ($filter == 'evining') {
            $events->where('type', 'Evining');
        }elseif ($filter == 'shows') {
            $events->where('type', 'galory');
        }
    
        // Paginate the events (you can change the number of items per page)
        $events = $events->paginate(9);
    
        // Pass events and filter to the view
        return view('Pages.Events.events_ar', compact('events'));
    }
}
