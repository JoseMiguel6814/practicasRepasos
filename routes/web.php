<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerCalculadora;

use App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('Inicio_portada');
})->name('inicio');

Route::get('/calcular',[controllercalculadora::class,'index'])->name('Vcalculadora');
Route::post('/convertir', [ControllerCalculadora::class, 'convertir'])->name('convertir');