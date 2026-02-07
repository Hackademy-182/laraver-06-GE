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
            <div class="position-relative mb-2">
                <img class="w-100 rounded-4" style="height:160px;object-fit:cover;filter:brightness(.78)"
                    src="https://picsum.photos/600/400?random={{ $m->id + 1000 }}" alt="">
                <div class="position-absolute bottom-0 start-0 m-2 px-2 py-1 text-white overlay-box">
                    € {{ $m->price_eur }} • {{ $m->mileage_km }} km
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
