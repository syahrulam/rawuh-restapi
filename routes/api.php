<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::post('/login/users', [UserController::class, 'login']);
Route::post('/register/users', [UserController::class, 'register']);
Route::post('/logout/users', [UserController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/users', [UserController::class, 'index']); 
    Route::get('/users/{id}', [UserController::class, 'show']);
    Route::put('/edit/users/{id}', [UserController::class, 'update']); 
    Route::delete('/delete/users/{id}', [UserController::class, 'destroy']); 
});