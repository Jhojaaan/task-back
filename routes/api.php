<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login', [AuthController::class, 'login']);
Route::get('me', [AuthController::class, 'me']);
Route::post('logout', [AuthController::class, 'logout']);
Route::get('tasks', [TaskController::class, 'index']); 
Route::post('tasks', [TaskController::class, 'store']);
Route::put('tasks/{task}', [TaskController::class, 'update']);
Route::put('tasks/status/{task}', [TaskController::class, 'complete']);
Route::delete('tasks/{task}', [TaskController::class, 'destroy']);