<x-layout title="Car Detail">
    <h1>{{ $car->brand }} {{ $car->model }}</h1>
    <p class="text-muted">{{ strtoupper($car->condition) }}</p>
    <p class="fw-bold">€ {{ $car->price_eur }} • {{ $car->mileage_km }} km</p>
    <a class="btn btn-secondary" href="/cars">Back</a>
</x-layout>
