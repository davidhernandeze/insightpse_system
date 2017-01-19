<?php

namespace panelAdmin\Http\Controllers;

use Faker\Provider\cs_CZ\DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use panelAdmin\AppointmentForm;
use panelAdmin\Calendar;
use panelAdmin\Patient;
use panelAdmin\User;
use DB;

class CalendarController extends Controller
{
    public function __construct(){

        $this->middleware('auth');

    }

    public function create(){

        $request = Input::all();

        $professional_id = $request['prof_id'];
        $professional = User::findOrFail($professional_id);

        $date = date_create($request['date']);
        $sql_date = $date->format('Y-m-d');
        $formattedDate = $date->format('d-m-Y');

        $hour = date_create($request['hour']);
        $sql_hour = $hour->format('h:i');
        $formattedHour = $hour->format('h:i A');

        $patients = Patient::all();

        return view('forms.appointment', ['patients' => $patients, 'professional' => $professional, 'date' => $formattedDate, 'hour' => $formattedHour,
            'sql_hour' => $sql_hour, 'sql_date' => $sql_date]);

    }

    public function index(){

        $professionals = User::where('profile_type', '=', 'root')
            ->orWhere('profile_type', '=', 'professional')->get();

        return view('calendar.index', ['professionals' => $professionals]);

    }

    public function getData($pro_id, $date){

        $appointments = Calendar::where('date', '=', $date)
            ->where('user_id', '=', $pro_id)
            ->leftJoin('patients', 'calendars.patient_id', '=', 'patients.id')
            ->select(DB::raw('calendars.*, patients.names as names, patients.surnames as surnames'))
            ->get()->toJson();

        return $appointments;
    }


    public function store(Request $request){

        $form = new AppointmentForm();

        $form->fecha = $request['fecha'];
        $form->hora_ini = $request['hora_ini'];
        $form->hora_fin = $request['hora_fin'];
        $form->duracion = $request['duracion'];

        $patient = Patient::findOrFail($request['paciente']);
        $form->paciente = $patient->names.' '.$patient->surnames;

        $professional = User::findOrFail($request['agenda']);
        $form->agenda = $professional->name;

        $form->servicio = $request['servicio'];
        $form->motivo_consulta = $request['motivo_consulta'];

        $form->save();

        $appointment = new Calendar();

        $appointment->user_id = $professional->id;
        $appointment->patient_id = $patient->id;
        $appointment->form_id = $form->id;
        $appointment->date = $request['date'];
        $appointment->hour = $request['hour'];
        $appointment->status = 0;

        $appointment->save();

        return redirect('citas');

    }

    public function edit($id){



    }

    public function update(Request $request){



    }

    public function destroy($id){



    }


}
