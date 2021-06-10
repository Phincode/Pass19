<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title>Pass19 - Covid19 Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
    <meta name="keywords" content="Appointment, Booking, System, Dashboard, Health" />
    <meta name="author" content="Shreethemes" />
    <meta name="email" content="shreethemes@gmail.com" />
    <meta name="website" content="http://www.shreethemes.in/" />
    <meta name="Version" content="v1.0.0" />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <!-- Bootstrap -->
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- simplebar -->
    <link href="{{ url('css/simplebar.css') }}" rel="stylesheet" type="text/css" />
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ url('css/select2.min.css') }}"/>
    <!-- Icons -->
    <link href="{{ url('css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('css/remixicon.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ url('css/line.css') }}">
    <!-- SLIDER -->
    <link rel="stylesheet" href="{{ url('css/tiny-slider.css') }}"/>
    <!-- Css -->
    <link href="{{ url('css/style.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>
<!-- Loader -->
@include('layouts.load')
<!-- Loader -->

<div class="page-wrapper chiller-theme toggled">
    @include('layouts.sidebar')
    <!-- sidebar-wrapper  -->

    <!-- Start Page Content -->
    <main class="page-content bg-light">
        @include('layouts.header')

       @yield('content')

        <!-- Footer Start -->
        @include('layouts.footer')
        <!-- End -->
    </main>
    <!--End page-content" -->
</div>
<!-- page-wrapper -->

<!-- javascript -->
<script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
<!-- simplebar -->
<script src="{{ url('js/simplebar.min.js') }}"></script>
<!-- Chart -->
<script src="{{ url('js/apexcharts.min.js') }}"></script>
<script src="{{ url('js/columnchart.init.js') }}"></script>
<!-- Icons -->
<script src="{{ url('js/feather.min.js') }}"></script>
<!-- Main Js -->
<script src="{{ url('js/app-admin.js') }}"></script>


</body>
</html>
