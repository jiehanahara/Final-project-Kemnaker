@extends('Admin.master')

@section('content')

<h1>Create New Zone</h1>
<form action="{{ route('Admin.pages.zones.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="zone_name" class="form-label">Zone Name</label>
        <input type="text" class="form-control" id="zone_name" name="zone_name" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
    </div>
    <div class="mb-3">
        <label for="price_range" class="form-label">Price Range</label>
        <input type="text" class="form-control" id="price_range" name="price_range" required>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" name="image" required>
    </div>
    <button type="submit" class="btn btn-primary">Create Zone</button>
<a href="{{ route('Admin.pages.zones.index') }}" class="btn btn-secondary ms-2">Back to Zones</a>
</form>


@endsection