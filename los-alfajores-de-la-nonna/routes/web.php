<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
// Cambiamos Mail por Log temporalmente
use Illuminate\Support\Facades\Log; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/encargar', function () {
    return view('encargar');
});

Route::post('/encargar', function (Request $request) {
    // 1. Validamos los datos
    $datos = $request->validate([
        'nombre' => 'required',
        'email' => 'required|email',
        'pedido' => 'required',
        'detalles' => 'nullable'
    ]);

    // 2. EN LUGAR DE ENVIAR EMAIL, LO GUARDAMOS EN EL REGISTRO DE LARAVEL
    Log::info('NUEVO PEDIDO RECIBIDO:', $datos);

    // 3. Devolvemos al cliente a la portada con un mensaje de éxito
    return redirect('/')->with('exito', '¡Tu encargo ha sido enviado con éxito! Te contactaremos pronto.');
});