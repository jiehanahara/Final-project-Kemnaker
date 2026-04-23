@extends('Admin.master')

@section('content')

<h1>Create New Attraction</h1>
<form action="{{ route('Admin.pages.attraction.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="zone_id" class="form-label"> Select Zone</label>
        <select class="form-control" id="zone_id" name="zone_id" required>
            <option value="">-- Select Zone --</option>
            @foreach($zones as $zone)
                <option value="{{ $zone->id }}" {{ old('zone_id') == $zone->id ? 'selected' : '' }}>
                    {{ $zone->zone_name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Attraction Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="ticket_price" class="form-label">Ticket Price</label>
        <input type="number" class="form-control" id="ticket_price" name="ticket_price" step="0.01" required>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" name="image" accept="image/*">
    </div>
    <button type="submit" class="btn btn-primary">Create Attraction</button>
</form>
<a href="{{ route('Admin.pages.attraction.index') }}" class="btn btn-secondary mt-3">Back to Attractions</a>

@endsection