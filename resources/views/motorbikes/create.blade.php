<x-layout title="Create Motorbike">
    <form method="POST" action="/motorbikes" class="vstack gap-2">
        @csrf

        <input class="form-control" name="brand" placeholder="Brand">
        <input class="form-control" name="model" placeholder="Model">

        <select class="form-select" name="condition">
            <option value="new">New</option>
            <option value="used" selected>Used</option>
        </select>

        <input class="form-control" name="engine_cc" type="number" placeholder="Engine CC">
        <input class="form-control" name="horsepower" type="number" placeholder="Horsepower">
        <input class="form-control" name="production_year" type="number" placeholder="Production year">

        <input class="form-control" name="category" placeholder="Category (es. naked)">
        <input class="form-control" name="license_type" placeholder="License type (es. A)">

        <input class="form-control" name="mileage_km" type="number" placeholder="KM">
        <input class="form-control" name="price_eur" type="number" placeholder="Price EUR">

        <textarea class="form-control" name="description" rows="3" placeholder="Description"></textarea>

        <button class="btn btn-primary">Save</button>
    </form>
</x-layout>
