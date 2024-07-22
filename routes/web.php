<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware(['guest'])->group(function () {

    //Pagina Inicio
    Route::get('/', function () {
        return Inertia::render('Bienvenido', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
        ]);
    })->name('benvenido');

    Route::get('/informacion', function () {
        return "TEST";
    })->name('informacion');
    
  /*****************************************************
     *  INVITADOS
     ****************************************************/
    require 'invitados/invitados.php';


});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

  
});
