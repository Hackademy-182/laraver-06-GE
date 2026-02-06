<x-layout title="Car Detail">
    <h1>{{ $car->brand }} {{ $car->model }}</h1>
    <p>{{ $car->production_year }} • {{ strtoupper($car->condition) }}</p>
    <p>€ {{ $car->price_eur }} • {{ $car->mileage_km }} km</p>
    <ul class="list-group">
        <li class="list-group-item">Engine: {{ $car->engine_cc }} cc</li>
        <li class="list-group-item">HP: {{ $car->horsepower }}</li>
        <li class="list-group-item">Body: {{ $car->body_type }}</li>
        <li class="list-group-item">Doors: {{ $car->doors }}</li>
    </ul>
    <p class="mt-3">{{ $car->description }}</p>
    <a class="btn btn-secondary" href="/cars">Back</a>
</x-layout>
