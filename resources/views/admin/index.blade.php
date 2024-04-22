<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | GembongLoker</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('asset/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('asset/dist/css/adminlte.min.css') }}">
</head>

    @include('admin.partials.header')
    @include('admin.partials.sidebar')
    <div class="content-wrapper">
        @yield('content')
    </div>

    <script src="{{ asset('asset/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('asset/dist/js/adminlte.js') }}"></script>

    <script src="{{ asset('asset/plugins/chart.js/Chart.min.js') }}"></script>
</html>
