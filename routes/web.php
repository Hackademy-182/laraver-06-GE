<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\MotorbikeController;
use App\Models\Car;
use App\Models\Motorbike;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $cars = Car::latest()->take(5)->get()->map(fn ($c) => [
        'type' => 'car',
        'id' => $c->id,
        'title' => $c->brand.' '.$c->model,
        'price' => $c->price_eur,
        'km' => $c->mileage_km,
    ]);

    $bikes = Motorbike::latest()->take(5)->get()->map(fn ($m) => [
        'type' => 'motorbike',
        'id' => $m->id,
        'title' => $m->brand.' '.$m->model,
        'price' => $m->price_eur,
        'km' => $m->mileage_km,
    ]);

    $latestAds = $cars->merge($bikes)->sortByDesc('id')->take(5)->values();
    $heroAds = $latestAds->take(5);

    return view('home', compact('latestAds', 'heroAds'));
});

Route::get('/cars', [CarController::class, 'index']);
Route::get('/cars/create', [CarController::class, 'create']);
Route::post('/cars', [CarController::class, 'store']);
Route::get('/cars/{car}', [CarController::class, 'show']);

Route::get('/motorbikes', [MotorbikeController::class, 'index']);
Route::get('/motorbikes/create', [MotorbikeController::class, 'create']);
Route::post('/motorbikes', [MotorbikeController::class, 'store']);
Route::get('/motorbikes/{motorbike}', [MotorbikeController::class, 'show']);
