<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ReturnRouteController;
use App\Http\Controllers\HolaMundoController;
use App\Http\Controllers\OperacionesController;
use App\Http\Controllers\NombreController;
use App\Http\Controllers\VerificarRutaController;

Route::get('/', [WelcomeController::class, 'index'])->name('nameUno');

Route::get('/returnRoute', [ReturnRouteController::class, 'index'])->name('nameDos');

Route::get('/holaMundo', [HolaMundoController::class, 'index']);

Route::get('/suma/{x}/{y}', [OperacionesController::class, 'suma']);

Route::get('/nombreObliga/{nombre}', [NombreController::class, 'nombreObligatorio']);

Route::get('/nombreOpcional/{nombre?}', [NombreController::class, 'nombreOpcional']);

Route::get('/nombreObligaRegular/{nombre?}', [NombreController::class, 'nombreConValidacion'])
    ->where('nombre', '[A-Za-z]+');

Route::get('/sumaObligaRegular/{x}/{y}', [OperacionesController::class, 'sumaConValidacion'])
    ->where(['x' => '[0-9]+', 'y' => '[0-9]+']);

Route::get('/verificarRuta', [VerificarRutaController::class, 'index'])
    ->name('nameTres');

Route::redirect('/hola', '/iniciandoLaravel/public/holaMundo', 302);

?>
