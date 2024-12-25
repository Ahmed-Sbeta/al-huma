<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//auth
Route::post('/logout',[LoginController::class, 'logout'])->name('logout'); //logout button
Route::post('/login',[LoginController::class, 'login'])->name('login'); //login button
Route::get('/login',[HomeController::class, 'login']); //login view
Route::get('/register',[HomeController::class, 'register']); //login view
Route::post('/register',[UserController::class,'register'])->name('register');
//Pages

//Home
Route::get('/',[HomeController::class,'index_ar'])->name('homeAR');
//about
Route::get('/about',[AboutController::class,'index']);
//Contact us
Route::get('/ContactUs',[ContactController::class,'index']);
//Events
Route::get('/events',[EventController::class,'index']);
Route::post('/addEvent',[EventController::class,'addEvent'])->name('addEvent');
Route::get('/subscribe/{id}',[EventController::class,'subscribe']);
//profile
Route::get('/profile',[UserController::class,'index']);
//Blog
Route::get('/blog',[BlogController::class,'index']);

route::group(["prefix"=>"ar"],
    function(){
    //Home
    Route::get('/',[HomeController::class,'index_ar']);
    //about
    Route::get('/about',[AboutController::class,'index_ar']);
    //Contact us
    Route::get('/ContactUs',[ContactController::class,'index_ar']);
    //Events
    Route::get('/events',[EventController::class,'index_ar']);
    Route::get('/events/participants',[EventController::class,'participants']);
    Route::get('/event/{id}',[EventController::class,'view']);
    Route::get('/subscribe/{id}',[EventController::class,'subscribe']);    
    Route::get('/unsubscribe/{id}',[EventController::class,'unsubscribe']);    
    //Blog
    Route::get('/blog',[BlogController::class,'index_ar']);
    //profile
    Route::get('/profile',[UserController::class,'index']);
    Route::get('/profile/events',[UserController::class,'all_events']);
    Route::get('/profile/users',[UserController::class,'all_users']);
    Route::get('/profile/add_event',[UserController::class,'add_event']);
    Route::get('/profile/add_organizer',[UserController::class,'add_organizer']);
    //auth
    Route::get('/login',[HomeController::class, 'login_ar']); //login view
    Route::get('/register',[HomeController::class, 'register_ar']); //login view
    Route::get('/test',[HomeController::class, 'test']); //login view

});



