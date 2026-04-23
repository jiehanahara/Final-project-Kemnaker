@extends('Admin.master')

@section('content')

<h1>Edit Attraction</h1>

<form action="{{ route('Admin.pages.attraction.update', $attraction->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="zone_id" class="form-label">Zone</label>
        <select class="form-control" id="zone_id" name="zone_id" required>
            @foreach($zones as $zone)
          <option value="">-- Select Zone --</option>
                <option value="{{ $zone->id }}" 
                    {{ $attraction->zone_id == $zone->id ? 'selected' : '' }}>
                    {{ $zone->zone_name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Attraction Name</label>
        <input type="text" class="form-control" id="name" name="name" 
               value="{{ old('name', $attraction->name) }}" required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3">
{{ old('description', $attraction->description) }}</textarea>
    </div>

    <div class="mb-3">
        <label for="ticket_price" class="form-label">Ticket Price</label>
        <input type="number" class="form-control" id="ticket_price" name="ticket_price"
               value="{{ old('ticket_price', $attraction->ticket_price) }}" required>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Image</label>

        @if($attraction->image)
            <div class="mb-2">
                <img src="{{ asset('storage/' . $attraction->image) }}" width="120">
            </div>
        @endif

        <input type="file" class="form-control" id="image" name="image" accept="image/*">
    </div>

    <button type="submit" class="btn btn-primary">Update Attraction</button>
</form>

<a href="{{ route('Admin.pages.attraction.index') }}" class="btn btn-secondary mt-3">
    Back to Attractions
</a>


@endsection