<x-layout title="Cars">
    <a class="btn btn-success mb-3" href="/cars/create">+ New Ad</a>

    <div class="row g-3">
        @foreach ($cars as $car)
            <div class="position-relative mb-2">
                <img class="w-100 rounded-4" style="height:160px;object-fit:cover;filter:brightness(.78)"
                    src="https://picsum.photos/600/400?random={{ $car->id }}" alt="">
                <div class="position-absolute bottom-0 start-0 m-2 px-2 py-1 text-white overlay-box">
                    € {{ $car->price_eur }} • {{ $car->mileage_km }} km
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
