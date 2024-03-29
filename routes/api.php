<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::apiResource('clientes', ClienteController::class);
// Route::apiResource('api/clientes', \App\Http\Controllers\ClienteController::class);


Route::prefix('api')->group(function () {
    Route::apiResource('clientes', ClienteController::class);
});
