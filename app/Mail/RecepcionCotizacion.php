<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RecepcionCotizacion extends Mailable
{
    use Queueable, SerializesModels;

    protected $nombre;
    protected $consulta;
    protected $presupuesto;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre,$consulta,$presupuesto)
    {
        $this->nombre = $nombre;
        $this->consulta = $consulta;
        $this->presupuesto = $presupuesto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.recepcion.cotizacion')
                          ->subject('Nueva Cotización')
                          ->with('nombre',$this->nombre)
                          ->with('consulta',$this->consulta)
                          ->with('presupuesto',$this->presupuesto);

    }
}
