<?php

namespace App\Http\Controllers;

use App\LandingPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class LandingPageController extends Controller
{
    public function store(Request $request){

        $request->correo = strtoupper($request->correo);

        $validate = Validator::make($request->all(),[
            'correo' => 'required|email',
            'nombre' => 'required',
        ]);

        if(!$validate->fails()){

            $landing = new LandingPage($request->all());
            foreach ($landing as $key => $value) {
                $landing->$key = strtoupper($value);
            }

            $result = $landing->save();

            if($result){
                $user = new \stdClass();
                $user->name = $request->nombre;
                $user->email = $request->correo;
                Mail::to($user->email)->send(new \App\Mail\CampañaEbook($user));
                $message = 'Gracias por tu interes en nuestro libro,te hemos enviado el libro al correo electronico.';
                return response()->json([
                   'status' => 'ok',
                   'message' => $message
                ]);
            }else{
                $message = 'hubo error, por favor intentalo nuevamente más tarde.';
                return response()->json([
                    'status' => 'error',
                    'message' => $message
                ]);
            }
        }else{
            $message = 'hubo error, por favor verifique el formato de los datos enviados.';
            return response()->json([
                'status' => 'error',
                'message' => $message
            ]);
        }

    }

    public function documento(){
        return response()->download(storage_path('app/public/docs/1587639685.pdf'));
    }

}
