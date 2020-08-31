<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Cotización extends Mailable
{
    use Queueable, SerializesModels;

    protected $nombre;
    protected $consulta;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre,$consulta)
    {
        $this->consulta = $consulta;
        $this->nombre = $nombre;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.formularios.cotizacion')
                    ->with('consulta',$this->consulta)
                    ->with('nombre',$this->nombre);
    }

}
