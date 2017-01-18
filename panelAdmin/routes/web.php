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

    return view('index');

})->middleware('auth');

Route::get('citas', 'CalendarController@index')->middleware('auth');
Route::get('citas/{pro_id}/{date}', 'CalendarController@getData');
Route::get('citas/create', 'CalendarController@create');
Route::get('citas/store', 'CalendarController@store');



Route::get('logout', function(){
    Auth::logout();
    return redirect('/');
})->middleware('auth');

Route::get('pacientes/create', 'PatientController@create');
Route::get('pacientes', 'PatientController@index');

Route::get('pacientes/array', 'PatientController@getDataTable');
Route::post('pacientes/store', 'PatientController@store');


Auth::routes();


