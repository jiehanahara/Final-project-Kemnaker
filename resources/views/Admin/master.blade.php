<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="Codescandy" name="author">

    <title>Blank | Dasher - Responsive Bootstrap 5 Admin Dashboard</title>

    @include('Admin.components.icons')

    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="{{ asset('assets/images/favicon/ms-icon-144x144.png') }}" />
    <meta name="theme-color" content="#ffffff" />

    @include('Admin.components.jshead')
    @include('Admin.components.css')

    <style>
        :root {
    --primary-green: #7FAF9B;
    --soft-green: #A8CFC0;
    --light-green: #E8F3EF;
    --dark-green: #4F7A6D;
    --text-dark: #2F3E3A;
}

/* Global */
body {
    background-color: #F6FBF9;
    color: var(--text-dark);
}

/* 🌿 Welcome Card */
.welcome-card {
    background: linear-gradient(135deg, var(--soft-green), var(--primary-green));
    color: white;
    border-radius: 16px;
    padding: 30px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.08);
}

/* 📦 Section Cards */
.section-card {
    background: white;
    border-radius: 14px;
    padding: 20px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    transition: 0.2s;
}

.section-card:hover {
    transform: translateY(-3px);
}

/* 🟢 Buttons */
.btn-green {
    background-color: var(--primary-green);
    color: white;
    border-radius: 8px;
    padding: 8px 16px;
    border: none;
    transition: 0.2s;
}

.btn-green:hover {
    background-color: var(--dark-green);
    color: white;
}

/* 📝 Titles */
.page-title {
    font-weight: 600;
    margin-bottom: 20px;
}

/* 🔗 Links */
.quick-link {
    text-decoration: none;
    color: var(--text-dark);
    font-weight: 500;
}

.quick-link:hover {
    color: var(--primary-green);
}

/* 🌿 Sidebar */
.sidebar-green {
    width: 240px;
    min-height: 100vh;
    background: #F0F7F4;
    padding: 20px 15px;
    border-right: 1px solid #E0ECE7;
}

/* Logo */
.site-logo-text {
    color: var(--dark-green);
}

/* Nav links */
.sidebar-green .nav-link {
    display: flex;
    align-items: center;
    gap: 10px;
    color: var(--text-dark);
    padding: 10px 12px;
    border-radius: 10px;
    transition: 0.2s;
}

.sidebar-green .nav-link:hover {
    background: var(--light-green);
    color: var(--dark-green);
}

/* Active state (you can add 'active' class manually or via route check) */
.sidebar-green .nav-link.active {
    background: var(--primary-green);
    color: white;
}

/* Icons */
.nav-icon {
    font-size: 18px;
}

/* Section heading */
.nav-heading {
    font-size: 12px;
    text-transform: uppercase;
    color: #8AA9A0;
    margin-bottom: 5px;
    padding-left: 10px;
}
/* 🌿 Navbar */
.navbar-green {
    background: rgba(255, 255, 255, 0.7);
    backdrop-filter: blur(10px);
    border-bottom: 1px solid #E0ECE7;
}

/* Title */
.text-dark-green {
    color: var(--dark-green);
}

/* Search */
.form-search {
    border-radius: 10px;
    border: 1px solid #DDEAE5;
    padding: 6px 12px;
}

.form-search:focus {
    border-color: var(--primary-green);
    box-shadow: none;
}

/* Icons */
.nav-icon-btn {
    font-size: 18px;
    cursor: pointer;
    position: relative;
}

/* Notification badge */
.notif-badge {
    position: absolute;
    top: -5px;
    right: -8px;
    background: #FF6B6B;
    color: white;
    font-size: 10px;
    padding: 2px 6px;
    border-radius: 50%;
}

/* Dropdown */
.dropdown-item {
    border-radius: 8px;
}

.dropdown-item:hover {
    background: var(--light-green);
}

/* 📦 Table Card */
.table-card {
    background: white;
    border-radius: 14px;
    padding: 20px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
}

/* 🌿 Custom Table */
.custom-table {
    border-collapse: separate;
    border-spacing: 0 10px;
}

.custom-table thead th {
    border: none;
    font-size: 13px;
    color: #7A9E94;
    font-weight: 600;
}

.custom-table tbody tr {
    background: #F9FCFB;
    border-radius: 10px;
    transition: 0.2s;
}

.custom-table tbody tr:hover {
    background: #EEF7F3;
}

.custom-table td {
    border: none;
    vertical-align: middle;
}

/* 🖼 Image */
.table-img {
    width: 80px;
    height: 55px;
    object-fit: cover;
    border-radius: 8px;
}

/* 🟢 Soft badge */
.badge-soft {
    background: var(--light-green);
    color: var(--dark-green);
    padding: 5px 10px;
    border-radius: 20px;
    font-size: 12px;
}

/* 🌿 Light button */
.btn-light-green {
    background: var(--light-green);
    color: var(--dark-green);
}

.btn-light-green:hover {
    background: var(--soft-green);
    color: white;
}
    </style>
    @stack('styles')
</head>

<body class="d-flex flex-column min-vh-100">

    @include('Admin.partial.sidenavbar')

    <div id="content" class="d-flex flex-column min-vh-100">

    @include('Admin.partial.topnavbar')

    <!-- Page Content -->
    <div class="custom-container flex-grow-1">
        <div class="row">
            <div class="col-12">
                <div class="mb-5">

                   @yield('content')
                   
                </div>
            </div>
        </div>
    </div>

    <!-- Footer INSIDE content -->
    <footer class="footer mt-auto bg-light py-3">
        <div class="container text-center">
            <p class="mb-0">
                © All rights reserved by 
                <a href="https://codescandy.com" target="_blank">Codescandy</a>.
                Distributed by 
                <a href="https://themewagon.com" target="_blank">Themewagon</a>.
            </p>
        </div>
    </footer>

</div>

    @include('Admin.components.js')

</body>
</html>