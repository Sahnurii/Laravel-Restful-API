<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/users', [UserController::class, 'register']);
Route::post('/users/login', [UserController::class, 'login']);

Route::middleware(\App\Http\Middleware\ApiAuthMiddleware::class)->group(function (){
    Route::get('users/current', [\App\Http\Controllers\UserController::class, 'get']);
    Route::patch('users/current', [\App\Http\Controllers\UserController::class, 'update']);
    Route::delete('users/logout', [\App\Http\Controllers\UserController::class, 'logout']);
});
