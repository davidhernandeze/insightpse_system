<?php

namespace panelAdmin\Http\Controllers;

use Illuminate\Http\Request;
use panelAdmin\Calendar;
use panelAdmin\User;
use DB;

class CalendarController extends Controller
{
    public function __construct(){

        $this->middleware('auth');

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
