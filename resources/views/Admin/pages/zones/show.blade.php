@extends('Admin.master')

@section('content')
<h1>{{ $zone->zone_name }}</h1>
<p>{{ $zone->description }}</p>
<p>Price Range: {{ $zone->price_range }}</p>
<img src="{{ asset('storage/' . $zone->image) }}" alt="{{ $zone->zone_name }}" width="300">
<a href="{{ route('Admin.pages.zones.index') }}" class="btn btn-secondary mt-3">Back to Zones</a>
<a href="{{ route('Admin.pages.zones.edit', $zone->id) }}" class="btn btn-sm btn-warning">Edit</a>

@endsection