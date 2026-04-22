@extends('Admin.master')

@section('content')

h1>Create New Zone</h1>
<form action="{{ route('Admin.pages.zones.update', $zone->id) }}" method="
POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="zone_name" class="form-label">Zone Name</label>
        <input type="text" class="form-control" id="zone_name" name="zone_name" value="{{ $zone->zone_name }}" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" required>{{ $zone->description }}</textarea>
    </div>
    <div class="mb-3">
        <label for="price_range" class="form-label">Price Range</label>
        <input type="text" class="form-control" id="price_range" name="price_range" value="{{ $zone->price_range }}" required>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" name="image">
        @if ($zone->image)
            <img src="{{ asset('storage/' . $zone->image) }}" alt="{{ $zone->zone_name }}" width="100" class="mt-2">
        @endif
    </div>
    <button type="submit" class="btn btn-primary">Update Zone</button>
<a href="{{ route('Admin.pages.zones.index') }}" class="btn btn-secondary ms-2">Back to Zones</a>
</form>


@endsection