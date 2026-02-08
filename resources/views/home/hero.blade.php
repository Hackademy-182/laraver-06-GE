<div class="d-flex justify-content-between align-items-end mb-3">
    <div>
        <h1 class="fw-bold m-0">Auto & Moto</h1>
        <div class="text-muted">Ultimi annunci inseriti</div>
    </div>


    <div id="hero" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3200">
        <div class="carousel-inner">
            @foreach ($heroAds as $i => $ad)
                <div class="carousel-item @if ($i === 0) active @endif">
                    <img class="w-100 hero-slide"
                        src="https://picsum.photos/1200/360?random={{ $ad['type'] }}{{ $ad['id'] }}"
                        alt="">
                    <div class="carousel-caption text-start">
                        <div class="overlay-box p-3 d-inline-block">
                            <div class="fw-bold">{{ $ad['title'] }}</div>
                            <div>€ {{ $ad['price'] }} • {{ $ad['km'] }} km</div>
                            <a class="btn btn-sm btn-light mt-2"
                                href="/{{ $ad['type'] === 'car' ? 'cars' : 'motorbikes' }}/{{ $ad['id'] }}">
                                Apri dettaglio
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
