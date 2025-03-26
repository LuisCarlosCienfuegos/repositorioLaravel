<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['nombreEjemplo' => 'Juan']);
})->name('nameUno'); // NOMBRE DE LA RUTA

Route::get('/returnRoute', function () {
    return route('nameUno'); // EL PARAMETRO ES EL NOMBRE QUE SE LE ASIGNA A LA RUTA
})->name('nameDos'); // NOMBRE DE LA RUTA

// RUTA ESTATICA
Route::get('/holaMundo', function () {
    return 'hola mundo';
});

// RUTA CON PARAMETROS DINAMICOS OBLIGATORIOS
Route::get('/suma/{x}/{y}', function ($x,$y) {
    return $x + $y;
});

// RUTA CON PARAMETROS DINAMICOS OBLIGATORIOS {nombreVariable?}
Route::get('/nombreObliga/{nombre}', function ($nombre = "juan") {
    return "tu nombre es: ".$nombre;
});

// RUTA CON PARAMETROS DINAMICOS OPCIONALES {nombreVariable?} CON VALOR POR DEFECTO
Route::get('/nombreOpcional/{nombre?}', function ($nombre = "juan") {
    return "tu nombre es: ".$nombre;
});

// CON VALIDACION DE PARAMETROS USANDO EXPRESIONES REGULARES
Route::get('/nombreObligaRegular/{nombre?}', function ($nombre = "juan") {
    return "tu nombre es: ".$nombre;
})->where('nombre', '[A-Za-z]+');

Route::get('/sumaObligaRegular/{x}/{y}', function ($x,$y) {
    return $x + $y;
})->where(['x' => '[0-9]+', 'y' => '[0-9]+']);

// VERIFICAR SI LA RUTA EXISTE
Route::get('/verificarRuta', function ($request) {

})->name('nameTres');

// redirecciona de una ruta a otra
// 301 PERMANENTE
// 302 TEMPORAL (DEFECTO)
Route::redirect('/hola', '/iniciandoLaravel/public/holaMundo',302);
