<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NuevoEncargoMail extends Mailable
{
    use Queueable, SerializesModels;

    public array $datos;

    public function __construct(array $datos)
    {
        $this->datos = $datos;
    }

    public function build()
    {
        return $this
            ->subject('Nuevo encargo - El Dulce de la Nona')
            ->view('emails.nuevo-encargo')
            ->with([
                'datos' => $this->datos,
            ]);
    }
}
