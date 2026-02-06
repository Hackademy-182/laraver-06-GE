<?php

namespace App\Http\Controllers;

use App\Models\Motorbike;
use Illuminate\Http\Request;

class MotorbikeController extends Controller
{
    public function index()
    {
        $motorbikes = Motorbike::latest()->get();

        return view('motorbikes.index', compact('motorbikes'));
    }

    public function create()
    {
        return view('motorbikes.create');
    }

    public function store(Request $request)
    {
        Motorbike::create($request->only([
            'brand', 'model', 'engine_cc', 'horsepower', 'production_year',
            'description', 'category', 'license_type',
            'condition', 'mileage_km', 'price_eur',
        ]));

        return redirect('/motorbikes');
    }

    public function show(Motorbike $motorbike)
    {
        return view('motorbikes.show', compact('motorbike'));
    }
}
