<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EncargoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/encargar', [EncargoController::class, 'create'])->name('encargos.create');

Route::post('/encargar', [EncargoController::class, 'store'])->name('encargos.store');