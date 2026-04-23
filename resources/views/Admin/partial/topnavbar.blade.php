<!-- 🌿 Top Navbar -->
<div class="navbar-green navbar navbar-expand-lg px-3 px-lg-4">
  <div class="container-fluid px-lg-0">

    <!-- Left -->
    <div class="d-flex align-items-center gap-3">

      <!-- Mobile toggle -->
      <div class="d-lg-none">
        <a data-bs-toggle="offcanvas" href="#offcanvasExample">
          ☰
        </a>
      </div>

      <!-- Title -->
      <h5 class="mb-0 fw-semibold text-dark-green">
        Dashboard
      </h5>

    </div>

    <!-- Right -->
    <ul class="list-unstyled d-flex align-items-center mb-0 gap-3">

      <!-- Search -->
      <li>
        <input type="text" class="form-control form-search" placeholder="Search...">
      </li>

      <!-- Notifications -->
      <li>
        <a class="nav-icon-btn position-relative">
          🔔
          <span class="notif-badge">2</span>
        </a>
      </li>

      <!-- Profile -->
      <li class="dropdown">
        <a href="#" data-bs-toggle="dropdown">
          <img src="{{ asset('storage/admin/assets/images/avatar/avatar-1.jpg') }}"
               class="avatar avatar-sm rounded-circle">
        </a>

        <div class="dropdown-menu dropdown-menu-end shadow-sm border-0 rounded-3 p-2">

          <div class="px-3 py-2 border-bottom">
            <strong>Admin</strong><br>
            <small class="text-muted">Tourism Manager</small>
          </div>

          <a href="#" class="dropdown-item">Profile</a>
          <a href="#" class="dropdown-item">Settings</a>

          <div class="dropdown-divider"></div>

          <a href="#" class="dropdown-item text-danger">Logout</a>

        </div>
      </li>

    </ul>

  </div>
</div>