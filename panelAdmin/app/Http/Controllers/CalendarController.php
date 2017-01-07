<?php

namespace panelAdmin\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function __construct(){

        $this->middleware('auth');

    }

    public function index(){

        return view('calendar.index');

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
