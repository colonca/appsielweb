<?php

namespace App\Http\Controllers;

use App\LandingPage;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function store(Request $request){

        $request->correo = strtoupper($request->correo);

        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|unique:landing_page'
        ]);

        $landing = new LandingPage($request->all());
        foreach ($landing as $key => $value) {
            $landing->$key = strtoupper($value);
        }

        $result = $landing->save();

        if($result){
            $message = 'has sido suscrito correctamente, pronto te haremos llegar este maravilloso libro.';
            return redirect()->back()->with('message',$message);
        }

    }
}
