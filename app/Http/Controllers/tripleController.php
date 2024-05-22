<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tripleController extends Controller
{
    public function home(){
        return view('home.home');
    }
}
