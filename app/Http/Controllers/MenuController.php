<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function contactanos(){
        return view('contacto');
    }

    public function landing(){
        return view('landing');
    }

}
