<?php

/*****************************************************
 *  USER
 ****************************************************/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrador\Configuracion\User\UserController;
use App\Http\Controllers\InvitadosController;

Route::prefix('invitados')->name('invitados.')->controller(InvitadosController::class)->group(function () {
    Route::get ('/',         'inicio')   ->name('inicio');
    Route::get ('/cursos',   'cursos')   ->name('cursos');
});