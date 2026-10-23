
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GeoLearn GIS | Login</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
          rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Background image using Laravel asset() -->
    <style>
        .gis-hero {
            background-image:
                linear-gradient(
                    180deg,
                    rgba(7, 35, 73, 0.48) 0%,
                    rgba(7, 35, 73, 0.15) 55%,
                    rgba(5, 29, 48, 0.45) 100%
                ),
                url("{{ asset('images/gis-landscape.png') }}");
        }
    </style>
</head>
<body>

    @yield('content')

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')
</body>
</html>
