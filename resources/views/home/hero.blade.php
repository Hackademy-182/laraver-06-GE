<div class="d-flex justify-content-between align-items-end mb-3">
    <div>
        <h1 class="fw-bold m-0">Auto & Moto</h1>
        <div class="text-muted">Ultimi annunci inseriti</div>
    </div>
    <div><a class="btn btn-primary" href="/cars">Esplora Auto</a> <a class="btn btn-outline-primary"
            href="/motorbikes">Esplora Moto</a></div>
</div>
<div id="hero" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3500">
    <div class="carousel-inner">
        @foreach ($latestCars as $i => $c)
            <div class="carousel-item @if ($i === 0) active @endif">
                <img class="w-100 hero-slide" src="https://picsum.photos/1200/360?random={{ $c->id }}"
                    alt="">
                <div class="carousel-caption text-start">
                    <div class="overlay-box p-3 d-inline-block">
                        <div class="fw-bold">{{ $c->brand }} {{ $c->model }}</div>
                        <div>€ {{ $c->price_eur }} • {{ $c->mileage_km }} km</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
