<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Atlantis Lite - Bootstrap 4 Admin Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{asset('img/admin/icon.ico')}}" type="image/x-icon" />

    <link rel="stylesheet" href="{{asset('css/fonts.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/atlantis.min.css')}}">
</head>

<body>

    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <x-admin.header />
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <x-admin.navbar />
            <!-- End Navbar -->
        </div>

        <!-- Sidebar -->
        <x-admin.sidebar />
        <!-- End Sidebar -->

        {{ $slot }}
    </div>

    <!--   Core JS Files   -->
    <script src="{{asset('js/core/jquery.3.2.1.min.js')}}"></script>
    <script src="{{asset('js/core/popper.min.js')}}"></script>
    <script src="{{asset('js/core/bootstrap.min.js')}}"></script>

    <!-- jQuery UI -->
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/jquery.scrollbar.min.js')}}"></script>
    <script src="{{asset('js/jquery.ui.touch-punch.min.js')}}"></script>

    <!-- Atlantis JS -->
    <script src="{{asset('js/atlantis.min.js')}}"></script>
</body>

</html>
