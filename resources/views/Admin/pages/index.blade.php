@extends('admin.master')

@section('content')

<div class="container-fluid">

    <div class="welcome-card mb-4">
        <h2>Welcome back 👋</h2>
        <p>Manage your tourism content, attractions, and reviews all in one place.</p>
    </div>

    <h4 class="page-title">Quick Access</h4>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="section-card">
                <h5>Attractions</h5>
                <p>View, add, and manage tourist attractions.</p>
                <a href="{{ route('Admin.pages.attraction.index') }}" class="btn btn-green">Manage</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="section-card">
                <h5>Zones</h5>
                <p>Organize attractions into themed zones.</p>
                <a href="{{ route('Admin.pages.zones.index') }}" class="btn btn-green">Manage</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="section-card">
                <h5>Reviews</h5>
                <p>Moderate and approve user reviews.</p>
                <a href="{{ route('Admin.pages.reviews.index') }}" class="btn btn-green">Manage</a>
            </div>
        </div>

    </div>

</div>

@endsection