<?php

namespace Routes\Api;

use App\Http\Controllers\BarbeiroController;
use Illuminate\Support\Facades\Route;

Route::prefix('/barbeiros')->group(function ($router) {

    Route::post('/', [BarbeiroController::class, 'cadastarBarbeiro']);

    Route::get('/', [BarbeiroController::class, 'listaBarbeiros']);

    Route::get('/{id}', [BarbeiroController::class, 'mostrarBarbeiro']);

    /*** DISPONIBILIDADE */
    Route::get('/{id}/disponibilidade', [BarbeiroController::class, 'listarDisponibilidades']);

    Route::get('/{id}/disponibilidade/{disp}', [BarbeiroController::class, 'mostrarDisponibilidade']);

});

