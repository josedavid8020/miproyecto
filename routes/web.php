<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Asegúrate de que la línea termine en punto y coma
Route::get('/hola', function () {
    return view('saludo', ['nombre' => 'ventana']);
}); 
