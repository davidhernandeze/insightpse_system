<?php

namespace panelAdmin\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function show(){

        return view('calendar.index');

    }
}
