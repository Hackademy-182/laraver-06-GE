<x-layout title="Cars">
    <a class="btn btn-success mb-3" href="/cars/create">+ New Ad</a>

    <div class="row g-3">
        @foreach ($cars as $car)
            <div class="col-md-4">
                <div class="card p-3">
                    <h5 class="mb-1">{{ $car->brand }} {{ $car->model }}</h5>
                    <div class="text-muted">{{ strtoupper($car->condition) }}</div>
                    <div class="fw-bold mt-2">€ {{ $car->price_eur }} • {{ $car->mileage_km }} km</div>
                    <a class="btn btn-outline-primary mt-3" href="/cars/{{ $car->id }}">Dettaglio</a>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
