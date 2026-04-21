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