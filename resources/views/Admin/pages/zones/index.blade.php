@extends('Admin.master')

@section('content')

<h1>Manage Zones</h1>

<a href="{{ route('Admin.pages.zones.create') }}" class="btn btn-primary mb-3">Create New Zone</a>

<table class="table">
    <thead>
        <tr>
            <th>Zone Name</th>
            <th>Description</th>
            <th>Price Range</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($zones as $zone)
            <tr>
                <td>{{ $zone->zone_name }}</td>
                <td>{{ $zone->description }}</td>
                <td>{{ $zone->price_range }}</td>
                <td><img src="{{ asset('storage/' . $zone->image) }}" alt="{{ $zone->zone_name }}" width="100"></td>
                <td>
                    <a href="{{ route('Admin.pages.zones.edit', $zone->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('Admin.pages.zones.destroy', $zone->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        <a href="{{ route('Admin.pages.zones.show', $zone->id) }}" class="btn btn-sm btn-info">View</a>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">No zones found.</td>
            </tr>

        @endforelse
    </tbody>
</table>

@endsection