<?php

namespace Routes\Api;

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('/auth')->group(function ($router) {

    Route::post('/login', [AuthController::class, 'login'])->name('loginUsuario');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logoutUsuario');

    Route::post('/refresh', [AuthController::class, 'refresh'])->name('refreshlogin');
});
