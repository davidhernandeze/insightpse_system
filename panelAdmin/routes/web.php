<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {


    if(Auth::user()->profile_type == 'professional' || Auth::user()->profile_type == 'root'){
        return view('index');
    }

    if(Auth::user()->profile_type == 'admin'){
        return view('index');
    }
    return view('index');
})->middleware('auth');

Route::get('citas', 'CalendarController@index')->middleware('auth');


Auth::routes();

