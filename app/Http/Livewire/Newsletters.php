<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Newsletter;

class Newsletters extends Component
{

    public $email = '';

    public function render()
    {
        return view('livewire.newsletters');
    }

    public function sendEmail(){

        $result = $this->validate([
            'email' => 'required|email'
        ]);

        $this->addError('email','El formato del email no es el adecuado');

        $exist = Newsletter::where('email',$this->email)->first();
        $newsletter =  new Newsletter();
        $newsletter->email = $this->email;

        $result = $newsletter->save();

        if($result){
            $this->email = '';
            $this->emit('subcripcionToNewsletter',[
                'status' => 'ok',
                'message' => 'Gracias por suscribirte a nuestro newsletter.'
            ]);
        }else {
            $this->emit('subcripcionToNewsletter',[
                'status' => 'error',
                'message' => 'Error interno. inténtelo nuevamente más tarde.'
            ]);
        }

    }

}
