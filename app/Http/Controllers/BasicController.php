<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function home(){
        return view('home');
    }
    public function welcome(){
        return view('welcome');
    }
}
