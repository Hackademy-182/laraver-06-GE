<x-layout title="Motorbikes">
    <h1>Motorbikes</h1>

    @foreach ($motorbikes as $motorbike)
        <p>{{ $motorbike->brand }} {{ $motorbike->model }}</p>
    @endforeach
</x-layout>
