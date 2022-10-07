<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //index
    public function index(){
        return view('home.index');
    } 


    //soon index
    public function soonIndex(){
        return view('home.soon');
    } 
}
