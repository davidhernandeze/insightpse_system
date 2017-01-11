<?php

namespace panelAdmin\Http\Controllers;

use Illuminate\Http\Request;
use panelAdmin\Calendar;
use DB;

class CalendarController extends Controller
{
    public function __construct(){

        $this->middleware('auth');

    }

    public function index($request = null){

        return view('calendar.index');

    }

    public function getData($date){

        $appointments = Calendar::where('date', '=', $date)
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
