<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// CRUD USERS //
Route::post('/register/users', [UserController::class, 'register']);
Route::put('/edit/users/{id}', [UserController::class, 'update'])->middleware('auth:sanctum');
Route::delete('/delete/users/{id}', [UserController::class, 'destroy'])->middleware('auth:sanctum');
Route::get('/users/{id}', [UserController::class, 'show'])->middleware('auth:sanctum');
Route::get('/users', [UserController::class, 'index'])->middleware('auth:sanctum');


Route::post('/login/users', [UserController::class, 'login']);
Route::post('/logout/users', [UserController::class, 'logout'])->middleware('auth:sanctum');