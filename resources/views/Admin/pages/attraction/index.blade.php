@extends('Admin.master')

@section('content')
<div class="container">
    <h1>Manage Attractions</h1>

    <a href="{{ route('Admin.pages.attraction.create') }}" class="btn btn-primary mb-3">
        Add New Attraction
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Zone</th>
                <th>Name</th>
                <th>Description</th>
                <th>Ticket Price</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($attractions as $attraction)
                <tr>
                    <td>{{ $attraction->zone->zone_name ?? '-' }}</td>
                    <td>{{ $attraction->name }}</td>
                    <td>{{ $attraction->description }}</td>
                    <td>{{ $attraction->ticket_price }}</td>

                    <td>
                        @if($attraction->image)
                            <img src="{{ asset('storage/' . $attraction->image) }}" width="100">
                        @else
                            No Image
                        @endif
                    </td>

                    <td>
                        <a href="{{ route('Admin.pages.attraction.edit', $attraction->id) }}" class="btn btn-warning">
                            Edit
                        </a>

                        <form action="{{ route('Admin.pages.attraction.destroy', $attraction->id) }}" 
                              method="POST" 
                              style="display:inline-block;">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger" 
                                    onclick="return confirm('Are you sure?')">
                                Delete
                            </button>

                            <a href="{{ route('Admin.pages.attraction.show', $attraction->id) }}" class="btn btn-info ms-2">
                                View
                            </a>

                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection