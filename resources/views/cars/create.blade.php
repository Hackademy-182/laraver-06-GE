<x-layout title="Create Car">
    <form method="POST" action="/cars" class="vstack gap-2">
        @csrf
        <input class="form-control" name="brand" placeholder="Brand">
        <input class="form-control" name="model" placeholder="Model">
        <input class="form-control" type="number" name="engine_cc" placeholder="Engine CC">
        <input class="form-control" type="number" name="horsepower" placeholder="Horsepower">
        <input class="form-control" type="number" name="production_year" placeholder="Production year">
        <textarea class="form-control" name="description" placeholder="Description"></textarea>
        <input class="form-control" name="body_type" placeholder="Body type (sedan/suv...)">
        <input class="form-control" type="number" name="doors" placeholder="Doors">
        <select class="form-select" name="condition">
            <option value="new">New</option>
            <option value="used" selected>Used</option>
        </select>
        <input class="form-control" type="number" name="price_eur" placeholder="Price EUR">
        <input class="form-control" type="number" name="mileage_km" placeholder="KM">
        <button class="btn btn-primary">Save</button>
    </form>
</x-layout>
