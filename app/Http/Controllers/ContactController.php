<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //show contact page
    function index(){
        return view('contact');
    }
}
