<?php

namespace Routes\Api;

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::prefix('/clientes')->group(function ($router) {

    Route::post('/', [ClienteController::class, 'cadastrarCliente']);

    Route::get('/', [ClienteController::class, 'listarClientess']);

    Route::get('/{id}', [ClienteController::class, 'mostrarCliente']);

    /*** COMPROMISSOS */
    Route::post('/{id}/compromissos', [ClienteController::class, 'cadastrarCompromisso']);

    Route::get('/{id}/compromissos', [ClienteController::class, 'listarCompromissos']);

    Route::get('/{id}/compromissos/{comp}', [ClienteController::class, 'mostrarCompromisso']);

    /*** FAVORITOS */
    Route::post('/{id}/favoritos', [ClienteController::class, 'cadastrarFavorito']);

    Route::get('/{id}/favoritos', [ClienteController::class, 'listarFavoritos']);

    Route::get('/{id}/favoritos/{fav}', [ClienteController::class, 'mostrarFavorito']);

    /**** AVALIACOES */
    Route::post('/{id}/avaliacoes', [ClienteController::class, 'cadastrarAvaliacao']);

    Route::get('/{id}/avaliacoes', [ClienteController::class, 'listarAvaliacoes']);

    Route::get('/{id}/avaliacoes/{ava}', [ClienteController::class, 'mostrarAvaliacao']);

    /*** DEPOIMENTOS */
    Route::post('/{id}/depoimentos', [ClienteController::class, 'cadastrarDepoimento']);

    Route::get('/{id}/depoimentos', [ClienteController::class, 'listarDepoimentos']);

    Route::get('/{id}/depoimentos/{dep}', [ClienteController::class, 'mostrarDepoimento']);

});
