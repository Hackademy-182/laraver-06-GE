<x-layout title="Motorbike Detail">
    <h1>{{ $motorbike->brand }} {{ $motorbike->model }}</h1>
    <img class="w-100 rounded-4 mb-3" style="max-height:320px;object-fit:cover"
        src="https://picsum.photos/1200/500?random={{ $motorbike->id + 1000 }}" alt="">

    <p class="text-muted">{{ $motorbike->production_year }} • {{ strtoupper($motorbike->condition) }}</p>
    <p class="fw-bold">€ {{ $motorbike->price_eur }} • {{ $motorbike->mileage_km }} km</p>

    <ul class="list-group">
        <li type="text" class="list-group-item">Engine: {{ $motorbike->engine_cc }} cc</li>
        <li type="text" class="list-group-item">HP: {{ $motorbike->horsepower }}</li>
        <li type="text" class="list-group-item">Category: {{ $motorbike->category }}</li>
        <li type="text"class="list-group-item">License: {{ $motorbike->license_type }}</li>
    </ul>

    <p class="mt-3">{{ $motorbike->description }}</p>
    <a class="btn btn-secondary" href="/motorbikes">Back</a>
</x-layout>
