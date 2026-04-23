@extends('Admin.master')

@section('content')
    <div class="container">
        <h1>{{ $attraction->name }}</h1>
        <p><strong>Zone:</strong> {{ $attraction->zone->name }}</p>
        <p><strong>Description:</strong> {{ $attraction->description }}</p>
        <p><strong>Ticket Price:</strong> ${{ $attraction->ticket_price }}</p>
        @if($attraction->image)
            <img src="{{ asset('storage/' . $attraction->image) }}" alt="{{ $attraction->name }}" class="img-fluid">
        @else
            <p>No image available.</p>
        @endif
        <a href="{{ route('Admin.pages.attraction.index') }}" class="btn btn-secondary mt-3">Back to Attractions</a>
        <a href="{{ route('Admin.pages.attraction.edit', $attraction->id) }}" class="btn btn-primary mt-3">Edit Attraction</a>
    </div>

@endsection