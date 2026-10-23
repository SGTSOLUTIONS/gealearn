
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'GeoLearn GIS')</title>

    <!-- Bootstrap 5 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Bootstrap Icons -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        rel="stylesheet"
    >

    <!-- OpenLayers CSS (for GIS map pages) -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/ol@10.6.1/ol.css"
    >

    <!-- Page-specific CSS -->
    @stack('styles')
</head>

<body>

    <!-- Main page content -->
    @yield('content')

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- OpenLayers JavaScript (for GIS map pages) -->
    <script src="https://cdn.jsdelivr.net/npm/ol@10.6.1/dist/ol.js"></script>

    <!-- Page-specific JavaScript -->
    @stack('scripts')

</body>
</html>
