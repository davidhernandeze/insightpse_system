<?php

namespace panelAdmin\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;
use panelAdmin\Patient;

class PatientController extends Controller
{
    public function __construct(){

        $this->middleware('auth');

    }

    public function index(){

        return view('patients.index');

    }

    public function create(){

        return view('patients.create');

    }



    public function store(Request $request){


        $this->validate($request,
            [
                'names' => 'required|max:255',
                'surnames' => 'required',
                'birthday' => 'required',
                'sex' => 'required',
                'tel' => 'required|min:7',
                'email' => 'required'
            ],[],
            [
                'names' => 'Nombre',
                'surnames' => 'Apellidos',
                'birthday' => 'Fecha de nacimiento',
                'sex' => 'Sexo',
                'tel' => 'Teléfono',
                'email' => 'Email'

            ]);

        $patient = new Patient();

        $patient->names = $request['names'];
        $patient->surnames = $request['surnames'];
        $patient->register_date = date('y-m-d');
        $patient->birthday = $request['birthday'];
        $patient->sex = $request['sex'];
        $patient->tel = $request['tel'];
        $patient->email = $request['email'];

        $patient->save();

        return redirect('/pacientes');


    }

    public function edit($id){

        $patient = Patient::findOrFail($id);

        $date = date_create($patient->birthday);
        $formatted_date = $date->format('d-m-Y');

        return view('patients.edit', ['patient' => $patient, 'birthday' => $formatted_date]);



    }

    public function update(Request $request){



    }

    public function destroy($id){



    }

    public function getDataTable(){

        return Datatables::of(Patient::all())->make(true);

    }



}
