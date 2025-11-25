<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;


// Rutas de acceso y salida
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register',[AuthController::class,'register']);

// Ruta de validacion
Route::get('/validate_token',[AuthController::class,'validate_token'])->middleware('auth:sanctum');