<x-layout title="Create Car">
    <form method="POST" action="/cars" class="vstack gap-2">
        @csrf
        <input class="form-control" name="brand" placeholder="Brand">
        <input class="form-control" name="model" placeholder="Model">
        <select class="form-select" name="condition">
            <option value="new">New</option>
            <option value="used" selected>Used</option>
        </select>
        <input class="form-control" type="number" name="price_eur" placeholder="Price EUR">
        <input class="form-control" type="number" name="mileage_km" placeholder="KM">
        <button class="btn btn-primary">Save</button>
    </form>
</x-layout>
