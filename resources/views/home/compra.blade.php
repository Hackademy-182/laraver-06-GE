<h2 class="fw-bold mb-3">Ultimi annunci</h2>

<div class="row g-3">
    @foreach ($latestAds as $ad)
        <div class="col-md-4">
            <div class="card card-soft overflow-hidden">

                <div class="position-relative">
                    <img class="w-100" style="height:170px;object-fit:cover;filter:brightness(.78)"
                        src="https://picsum.photos/600/400?random={{ $ad['type'] }}{{ $ad['id'] }}" alt="">
                    <div class="position-absolute bottom-0 start-0 m-2 px-2 py-1 text-white overlay-box">
                        € {{ $ad['price'] }} • {{ $ad['km'] }} km
                    </div>
                </div>

                <div class="p-3">
                    <div class="fw-bold">{{ $ad['title'] }}</div>
                    <div class="text-muted text-uppercase small">{{ $ad['type'] }}</div>

                    <a class="btn btn-outline-primary mt-3"
                        href="/{{ $ad['type'] === 'car' ? 'cars' : 'motorbikes' }}/{{ $ad['id'] }}">
                        Dettaglio
                    </a>
                </div>

            </div>
        </div>
    @endforeach
</div>
