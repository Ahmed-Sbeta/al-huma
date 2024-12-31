<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Participation;
use App\Models\Organizer;
use App\Models\events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

use Auth;

class UserController extends Controller
{
    public function index(){
        return view('Pages.Profile.profile');
    }

    public function all_events(){
        if(Auth::user()->role == 2){
            $events= events::latest()->paginate(8);
            return view('Pages.Profile.profile_events',compact('events'));
        }

        $events = Auth::user()->events;
        return view('Pages.Profile.profile_events',compact('events'));
    }

    public function all_users(){
        $users = User::paginate(7);
        return view('Pages.Profile.profile_users',compact('users'));
    }

    public function add_event(){
        return view('Pages.Profile.profile_add_event');
    }
    public function add_organizer(){
        return view('Pages.Profile.profile_add_organizer');
    }

    public function Register(Request $request){

        $user = new User;
        $user->name = request('name');
        $user->email = request('email');
        $user->phone_number = request('phone_number');
        $user->age = request('Age');
        $user->sex = request('Gender');
        $user->role = 1;
        $user->password = Hash::make(request('password'));
        $user->save();
        return redirect()->back()->with('msg','تــمــت إضــافــة مـسـتـخـدم بــنــجــاح');

    }

    public function editinfo(Request $request){
        $user= User::find(Auth::user()->id);
        $user->name = request('name');
        $user->email = request('email');
        $user->phone_number = request('phone_number');
        $user->age = request('Age');
        $user->save();
        return redirect()->back()->with('msg','تــم تعديل بيانات المـسـتـخـدم بــنــجــاح');

    }

    public function addOrganizer(Request $request){
        $organizer = new User;
        $organizer->name = request('name');
        $organizer->email = request('email');
        $organizer->phone_number = "0920000000";
        $organizer->age = "100" ;
        $organizer->sex = "Male";
        $organizer->role = 2;
        $organizer->password = Hash::make(request('password'));
        $organizer->save();
        $org = new Organizer;
        $org->name = request('name');
        $org->email = request('email');
        $org->phone_number = "0920000000";
        $org->password = Hash::make(request('password'));
        $org->save();
        return redirect()->back()->with('msg','تــمــت إضــافــة منظم بــنــجــاح');
    }

    public function updatePicture(Request $request){
    
    $user = Auth::user();

    if ($user->image) {
        // Delete the old image
        Storage::delete($user->image);
    }

    // Save the image to storage
    $imageName = time() . '.' . $request->image->extension();
    $image = $request->file('image');

    // Update the user record
    $user->image= $image->storeAs('public',$imageName);
    $user->save();

    return redirect()->back()->with('msg', 'تم تغيير الصورة بنجاح');
    }

    public function delete($id){
    $event = events::find($id)->delete();
    $participants = Participation::where('events_id',$id)->delete();

    return redirect()->back()->with('msg', 'تم الحذف بنجاح');
    }

}
