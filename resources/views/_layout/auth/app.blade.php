<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Web Edukasi Ekonomi Kreatif">
    <meta name="keywords" content="Edukraf, Ekraf, UMKM, Jember, Disbudpar Jember, Disbudpar,">
    <meta name="author" content="Edukraf Team">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edukraf</title>

    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!--External CSS-->
    <link rel="stylesheet" href="{{ asset('assets/mazer') }}/css/main/app.css" />
    <link rel="stylesheet" href="{{ asset('assets/mazer') }}/css/pages/auth.css" />
    <link rel="stylesheet" href="{{ asset('assets/mazer') }}/css/shared/iconly.css" />
    <link rel="stylesheet" href="{{ asset('assets/mazer') }}/css/custom.css" />
</head>

<body>
    <div id="auth">
        @yield('content')
    </div>
    <script src="{{ asset('assets/mazer') }}/js/bootstrap.js"></script>
    <script src="{{ asset('assets/mazer') }}/js/app.js"></script>
    <script src="{{ asset('assets/mazer') }}/js/pages/horizontal-layout.js"></script>

    <script src="{{ asset('assets/mazer') }}/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="{{ asset('assets/mazer') }}/js/pages/dashboard.js"></script>
</body>

</html>
