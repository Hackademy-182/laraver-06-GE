<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\MotorbikeController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('home'));
Route::get('/cars', [CarController::class, 'index']);
Route::get('/cars/create', [CarController::class, 'create']);
Route::post('/cars', [CarController::class, 'store']);
Route::get('/cars/{car}', [CarController::class, 'show']);

Route::get('/motorbikes', [MotorbikeController::class, 'index']);
Route::get('/motorbikes/create', [MotorbikeController::class, 'create']);
Route::post('/motorbikes', [MotorbikeController::class, 'store']);
Route::get('/motorbikes/{motorbike}', [MotorbikeController::class, 'show']);
