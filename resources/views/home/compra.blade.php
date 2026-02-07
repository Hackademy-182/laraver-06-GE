<h2 class="fw-bold mb-3">Compra</h2>
<div class="row g-3">
    @foreach ($latestCars as $car)
        <div class="col-md-4">
            <div class="card card-soft p-3">
                <div class="fw-bold">{{ $car->brand }} {{ $car->model }}</div>
                <div class="text-muted">{{ strtoupper($car->condition) }}</div>
                <div class="fw-bold mt-2">€ {{ $car->price_eur }} • {{ $car->mileage_km }} km</div>
            </div>
        </div>
    @endforeach
</div>
