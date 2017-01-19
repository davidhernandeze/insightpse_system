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
Route::post('citas/store', 'CalendarController@store');

Route::get('generar', function (){

    $pdf = new Codedge\Fpdf\Fpdf\FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(40,10,'Hola PAPÁ');
    $pdf->Output();
    exit;

});



Route::get('logout', function(){
    Auth::logout();
    return redirect('/');
})->middleware('auth');

Route::get('pacientes/create', 'PatientController@create');
Route::get('pacientes', 'PatientController@index');
Route::get('pacientes/edit/{id}', 'PatientController@edit');

Route::get('pacientes/array', 'PatientController@getDataTable');
Route::post('pacientes/store', 'PatientController@store');


Auth::routes();


