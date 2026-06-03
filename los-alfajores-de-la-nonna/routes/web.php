<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EncargoController;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/encargar', [EncargoController::class, 'create'])->name('encargos.create');

Route::post('/encargar', [EncargoController::class, 'store'])->name('encargos.store');

Route::get('/sobre-mi', [PageController::class, 'sobreMi']);