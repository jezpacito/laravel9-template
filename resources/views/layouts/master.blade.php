<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Enlink - Admin Dashboard Template</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">

    <!-- page css -->
    <link href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    @livewireStyles
    @powerGridStyles

</head>

<body>
    <div class="app">
        <div class="layout">
            @include('layouts.partials.header')
            @include('layouts.partials.sidenav')

            <!-- Page Container START -->
            <div class="page-container">
                <!-- Content Wrapper START -->
                <div class="main-content">
                    @yield('content')

                </div>
                <!-- Content Wrapper END -->

                @include('layouts.partials.footer')

            </div>
            <!-- Page Container END -->

        </div>
    </div>


    <!-- Core Vendors JS -->
    <script src="assets/js/vendors.min.js"></script>

    <!-- page js -->
    <script src="assets/vendors/chartjs/Chart.min.js"></script>
    <script src="assets/js/pages/dashboard-e-commerce.js"></script>

    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>

    <!-- Scripts -->
    @livewireScripts
    @powerGridScripts

    {{-- <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>
