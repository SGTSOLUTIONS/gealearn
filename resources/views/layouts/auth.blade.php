<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'GeoLearn GIS | Login')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        :root {
            --forest: #14532D;
            --forest-deep: #166534;
            --cream: #FFFDF5;
            --slate: #334155;
            --gold: #D9A441;
            --muted: #64748B;
            --border: #D8DEE5;
        }

        body {
            background-color: var(--cream);
            color: var(--slate);
        }

        .auth-hero {
            background-image: linear-gradient(180deg, rgba(20,83,45,.55) 0%, rgba(20,83,45,.25) 55%, rgba(22,101,52,.55) 100%),
                              url("{{ asset('images/gis-landscape.png') }}");
            background-size: cover;
            background-position: center;
            min-height: 100vh;
        }

        .auth-brand-name { color: #fff; }
        .auth-accent { color: var(--gold); }

        .auth-card {
            background: #FFFFFF;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(51,65,85,.12);
        }

        .auth-input {
            border-color: var(--border);
            height: 46px;
        }

        .auth-input:focus {
            border-color: var(--forest);
            box-shadow: 0 0 0 .2rem rgba(20,83,45,.15);
        }

        .auth-btn {
            background-color: var(--forest);
            border-color: var(--forest);
            color: #fff;
            height: 46px;
        }

        .auth-btn:hover {
            background-color: var(--forest-deep);
            border-color: var(--forest-deep);
            color: #fff;
        }

        .auth-link { color: var(--forest); }
        .auth-link:hover { color: var(--forest-deep); }

        .auth-muted { color: var(--muted); }
        .auth-heading { color: var(--slate); }
    </style>
</head>
<body>
    @yield('content')

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>