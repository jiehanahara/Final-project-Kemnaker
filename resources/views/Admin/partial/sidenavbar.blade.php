<div id="miniSidebar" class="sidebar-green">

  <!-- Logo -->
  <div class="brand-logo mb-4">
    <a class="d-flex align-items-center gap-2" href="{{ route('admin.index') }}">
      <img src="{{ asset('storage/admin/assets/images/brand/logo/logo-icon.svg') }}" width="30">
      <span class="fw-bold fs-4 site-logo-text">C.J</span>
    </a>
  </div>

  <ul class="navbar-nav flex-column">

    <!-- Reviewer -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('landing.pages.detail') }}">
        <span class="nav-icon">📝</span>
        <span class="text">Be a Reviewer</span>
      </a>
    </li>

    <!-- Divider -->
    <li class="nav-item mt-3">
      <div class="nav-heading">Management</div>
    </li>

    <!-- Zones -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('Admin.pages.zones.index') }}">
        <span class="nav-icon">🌿</span>
        <span class="text">Zones</span>
      </a>
    </li>

    <!-- Attractions -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('Admin.pages.attraction.index') }}">
        <span class="nav-icon">📍</span>
        <span class="text">Attractions</span>
      </a>
    </li>

    <!-- Reviews -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('Admin.pages.reviews.index') }}">
        <span class="nav-icon">⭐</span>
        <span class="text">Reviews</span>
      </a>
    </li>

    <!-- Back -->
    <li class="nav-item mt-3">
      <a class="nav-link" href="/">
        <span class="nav-icon">🏠</span>
        <span class="text">Back to Landing</span>
      </a>
    </li>

  </ul>

</div>