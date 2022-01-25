<?php

use Illuminate\Support\Facades\Route;
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

// Route::fallback(function () {
//     return view('home');
// });

Route::get('/searchJob', function () {
    return view('searchJob', ['jobs' => Job::all()]);
})->name('search');

Route::get('/postJob', function () {
    return view('postJob');
})->name('post');

Route::get('/jobs/{id}', function ($id) {
    return view('jobDetail', ['job' => Job::find($id)]);
});

Route::resource('/lead', LeadController::class);