<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::latest()->get();

        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        return view('cars.create');
    }

    public function store(Request $request)
    {
        Car::create($request->only(['brand', 'model', 'condition', 'mileage_km', 'price_eur']));

        return redirect('/cars');
    }

    public function show(Car $car)
    {
        return view('cars.show', compact('car'));
    }
}
