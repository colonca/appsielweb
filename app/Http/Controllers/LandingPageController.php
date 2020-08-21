<?php

namespace App\Http\Controllers;

use App\LandingPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LandingPageController extends Controller
{
    public function store(Request $request){

        $request->correo = strtoupper($request->correo);

        $validate = Validator::make($request->all(),[
            'correo' => 'required|email',
            'nombre' => 'required|email',
        ]);

        if($validate->fails()){
            return response()->json([
                'status' => 'validate',
                'message' => $validate->errors()
            ]);
        }

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
