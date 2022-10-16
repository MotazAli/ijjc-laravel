<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    //indes show all schedule
    function index(){
        return view('menu.schedule');
    }
}
