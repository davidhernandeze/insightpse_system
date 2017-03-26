<?php

namespace panelAdmin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use panelAdmin\Calendar;
use panelAdmin\Patient;
use DB;

class AppointmentController extends Controller
{

    public function create($id){
        $appointment = Calendar::findOrFail($id);
        $patient = Patient::findOrFail($appointment->patient_id);

        if(Auth::user()->id == $appointment->user_id){

            return view('appointment.create', ['patient' => $patient->names.' '.$patient->surnames, 'appointment' =>$appointment]);

        }

    }

    public function store(Request $request){



    }

    public function newForm(Calendar $appointment, $form_type){

        switch ($form_type){

            case 'admision':
                return view('forms.admision', ['appoinment' => $appointment]);

            case 'primera_vez':
                return view('forms.primera_vez');

            case 'seguimiento':
                return view('forms.seguimiento');

            case 'egreso':
                return view('forms.egreso');

        }

    }

    public function getForms(Calendar $appointment){

        $forms = [];

        $admission = DB::table('admission_forms')->where('calendar_id', '=', $appointment->id)->pluck('id');
        $forms['admission'] = $admission;

        $admission = DB::table('admission_forms')->where('calendar_id', '=', $appointment->id)->pluck('id');


    }

}
