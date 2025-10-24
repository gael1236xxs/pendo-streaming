<?php

use Illuminate\Support\Facades\Route;

// Ruta principal (página de inicio)
Route::get('/', function () {
    return view('welcome');
});

// Ruta para mostrar los servicios de streaming
Route::get('/streaming', function () {
    return view('streaming');
});

// Ruta para mostrar los servicios de música
Route::get('/musica', function () {
    return view('musica');
});

// Ruta para mostrar información de contacto (opcional)
Route::get('/contacto', function () {
    return view('contacto');
});
