<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PageController extends Controller
{
    // Mostrar la portada
    public function welcome()
    {
        return view('welcome');
    }

    // Mostrar el formulario de encargo
    public function encargar()
    {
        return view('encargar');
    }

    // Mostrar la página de Sobre Mí
    public function sobreMi()
    {
        return view('sobre-mi');
    }

    // Procesar los datos del formulario (El método POST)
    public function procesarEncargo(Request $request)
    {
        $datos = $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'pedido' => 'required',
            'detalles' => 'nullable'
        ]);

        // Guardamos en el log temporalmente
        Log::info('NUEVO PEDIDO RECIBIDO:', $datos);

        return redirect('/')->with('exito', '¡Tu encargo ha sido enviado con éxito! Te contactaremos pronto.');
    }
}