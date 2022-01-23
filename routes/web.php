<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriberConfirm;
use App\Http\Controllers\LeadController;
use App\Models\Job;


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

Route::get('/', function () {
    return view('home', ['jobs' => Job::all()]);
})->name('home');

Route::fallback(function () {
    return view('home');
});

Route::get('/searchJob', function () {
    return view('searchJob', ['jobs' => Job::all()]);
})->name('search');

Route::get('/postJob', function () {
    return view('postJob');
})->name('post');

Route::get('subscription_email', function(){
	Mail::to('pablo.guelu@gmail.com')->send(new SubscriberConfirm);
});

Route::resource('/lead', LeadController::class);