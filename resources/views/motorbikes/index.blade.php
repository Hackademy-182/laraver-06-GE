<x-layout title="Motorbikes">
    <a class="btn btn-success mb-3" href="/motorbikes/create">+ New Ad</a>

    <div class="row g-3">
        @foreach ($motorbikes as $m)
            <div class="text-muted">
                {{ $m->production_year }} • {{ $m->engine_cc }} cc • {{ $m->horsepower }} hp
            </div>

            <div class="position-relative mb-2">
                <img class="w-100 rounded-4" style="height:160px;object-fit:cover;filter:brightness(.78)"
                    src="https://picsum.photos/600/400?random={{ $m->id + 1000 }}" alt="">
                <div class="position-absolute bottom-0 start-0 m-2 px-2 py-1 text-white overlay-box">
                    € {{ $m->price_eur }} • {{ $m->mileage_km }} km • {{ strtoupper($m->condition) }}
                </div>
            </div>

            <a class="btn btn-outline-primary" href="/motorbikes/{{ $m->id }}">Dettaglio</a>
        @endforeach
    </div>
</x-layout>
