<?php

namespace panelAdmin\Http\Controllers;

use Faker\Provider\cs_CZ\DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
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
        $formattedDate = $date->format('d-m-Y');

        $hour = date_create($request['hour']);
        $formattedHour = $hour->format('h:i A');

        $patients = Patient::all();

        return view('forms.appointment', ['patients' => $patients, 'professional' => $professional, 'date' => $formattedDate, 'hour' => $formattedHour]);

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



    }

    public function edit($id){



    }

    public function update(Request $request){



    }

    public function destroy($id){



    }


}
