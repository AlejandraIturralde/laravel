<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\InteresController;
use App\Http\Controllers\UserController;

//Rutas protegidas por autenticacion
Route::middleware(['auth'])-> group(function () {
    Route::resource('personas', PersonaController::class);
    Route::resource('intereses', InteresController::class);
    Route::resource('usuarios', [UserController::class, 'index'])
        ->name('usuarios.index');
})

Route::get('/', function () {
    return view('welcome');
});
