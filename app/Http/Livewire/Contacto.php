<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contacto extends Component
{
    public $nombre = '';
    public  $email = '';
    public $telefono = '';
    public $presupuesto = '';
    public $consulta = '';
    public $enviado = false;

    public function render()
    {
        return view('livewire.contacto');
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'nombre' => 'required',
            'telefono' => 'required|numeric',
            'email' => 'required|email',
            'consulta' => 'required',
        ]);
    }

    public function guardar(){
        $this->validate([
            'nombre' => 'required',
            'telefono' => 'required|numeric',
            'email' => 'required|email',
            'consulta' => 'required',
        ]);
        Mail::to($this->email)->send(new \App\Mail\Cotización($this->nombre,$this->consulta));
        Mail::to('contacto@appsiel.com.co')->send(new \App\Mail\RecepcionCotizacion($this->nombre,$this->consulta,$this->presupuesto));
        $this->nombre = '';
        $this->email = '';
        $this->telefono = '';
        $this->presupuesto = '';
        $this->consulta = '';
        $this->enviado = true;
    }

}
