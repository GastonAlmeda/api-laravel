<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('asociados', \App\Http\Controllers\Api\AsociadoController::class)
    ->middleware('auth:sanctum');

Route::post('login',
    [\App\Http\Controllers\Api\LoginController::class, 'login']
);
