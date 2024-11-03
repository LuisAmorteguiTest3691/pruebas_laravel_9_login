<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrerController;

// ruta para la pagina principal
Route::get('/', function () {
    return view('principal');
});

// obtener pagina register
Route::get('/register', [RegistrerController::class, 'index'])->name('register');
// envio de datos del formulario al servidor
Route::post('/register', [RegistrerController::class, 'store'], 'store');
