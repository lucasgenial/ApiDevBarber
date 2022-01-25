<?php

namespace Routes\Api;

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::prefix('/usuarios')->group(function ($router) {

    Route::post('/', [UsuarioController::class, 'cadastrarUsuario']);

    Route::get('/', [UsuarioController::class, 'listarUsuarios']);

    Route::get('/{id}', [UsuarioController::class, 'mostrarUsuario']);

});
