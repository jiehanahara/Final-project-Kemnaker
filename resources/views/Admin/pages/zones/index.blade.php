@extends('Admin.master')

@section('content')

<div class="container-fluid">

    <!-- 🌿 Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="page-title mb-0">Manage Zones</h4>
        <a href="{{ route('Admin.pages.zones.create') }}" class="btn btn-green">
            + Create Zone
        </a>
    </div>

    <!-- 📦 Table Card -->
    <div class="table-card">

        <table class="table custom-table align-middle">
            <thead>
                <tr>
                    <th>Zone</th>
                    <th>Description</th>
                    <th>Price Range</th>
                    <th>Image</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($zones as $zone)
                    <tr>
                        <td class="fw-semibold">{{ $zone->zone_name }}</td>

                        <td class="text-muted">
                            {{ Str::limit($zone->description, 60) }}
                        </td>

                        <td>
                            <span class="badge-soft">
                                {{ $zone->price_range }}
                            </span>
                        </td>

                        <td>
                            <img src="{{ asset('storage/' . $zone->image) }}"
                                 class="table-img"
                                 alt="{{ $zone->zone_name }}">
                        </td>

                        <td class="text-end">
                            <a href="{{ route('Admin.pages.zones.show', $zone->id) }}"
                               class="btn btn-sm btn-light-green">View</a>

                            <a href="{{ route('Admin.pages.zones.edit', $zone->id) }}"
                               class="btn btn-sm btn-warning">Edit</a>

                            <form action="{{ route('Admin.pages.zones.destroy', $zone->id) }}"
                                  method="POST"
                                  class="d-inline">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-sm btn-danger"
                                        onclick="return confirm('Delete this zone?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted py-4">
                            No zones found 🌿
                        </td>
                    </tr>
                @endforelse
            </tbody>

        </table>

    </div>

</div>

@endsection