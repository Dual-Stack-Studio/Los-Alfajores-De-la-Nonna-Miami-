<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\NuevoEncargoMail;
use App\Mail\ConfirmacionEncargoClienteMail;

class EncargoController extends Controller
{
    public function create()
    {
        $fechaMinimaEntrega = Carbon::now()->addDays(2)->format('Y-m-d');

        return view('encargar', [
            'fechaMinimaEntrega' => $fechaMinimaEntrega,
        ]);
    }

    public function store(Request $request)
    {
        $fechaMinimaEntrega = Carbon::now()->addDays(2)->format('Y-m-d');

        $datos = $request->validate([
            'nombre' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'telefono' => ['required', 'string', 'max:30'],
            'direccion' => ['required', 'string', 'max:255'],
            'fecha_entrega' => ['required', 'date', 'after_or_equal:' . $fechaMinimaEntrega],
            'pedido' => ['required', 'string', 'min:10', 'max:1000'],
        ], [
            'nombre.required' => 'Por favor, escribe tu nombre.',
            'email.required' => 'Por favor, escribe tu correo electrónico.',
            'email.email' => 'El correo electrónico no es válido.',
            'telefono.required' => 'Por favor, escribe tu teléfono.',
            'direccion.required' => 'Por favor, escribe la dirección de entrega.',
            'fecha_entrega.required' => 'Por favor, selecciona una fecha de entrega.',
            'fecha_entrega.after_or_equal' => 'Los encargos deben realizarse con al menos 48 horas de anticipación.',
            'pedido.required' => 'Por favor, detalla qué deseas encargar.',
            'pedido.min' => 'El pedido debe tener al menos 10 caracteres.',
        ]);

        Mail::to(config('mail.to_address'))->send(new NuevoEncargoMail($datos));

        Mail::to($datos['email'])->send(new ConfirmacionEncargoClienteMail($datos));

        return redirect()
            ->route('encargos.create')
            ->with('exito', '¡Tu encargo ha sido enviado con éxito! Te contactaremos pronto para confirmarlo.');
    }
}
