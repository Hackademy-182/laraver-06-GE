<x-layout title="Motorbikes">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="m-0">Motorbikes</h1>
        <a class="btn btn-success" href="/motorbikes/create">+ New Ad</a>
    </div>

    @if ($motorbikes->count() === 0)
        <div class="alert alert-warning">
            Nessun annuncio moto ancora. Clicca “+ New Ad” per crearne uno.
        </div>
    @endif

    <div class="row g-3">
        @foreach ($motorbikes as $m)
            <div class="col-md-4">
                <div class="card p-3">
                    <h5 class="mb-1">{{ $m->brand }} {{ $m->model }}</h5>
                    <div class="text-muted">{{ strtoupper($m->condition) }} • {{ $m->engine_cc }} cc</div>
                    <div class="fw-bold mt-2">€ {{ $m->price_eur }} • {{ $m->mileage_km }} km</div>
                    <a class="btn btn-outline-primary mt-3" href="/motorbikes/{{ $m->id }}">Dettaglio</a>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
