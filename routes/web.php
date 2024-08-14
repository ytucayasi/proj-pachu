<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/proyectos', function () {
    return view('proyectos');
});

Route::get('/contacto', function () {
    return view('contacto');
});

require __DIR__ . '/auth.php';
