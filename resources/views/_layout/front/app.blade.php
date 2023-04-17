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

    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!--External CSS-->
    <link rel="stylesheet" href="{{ asset('assets/pragmatic-ui') }}/css/custom.css">
    <link rel="stylesheet" href="{{ asset('assets/pragmatic-ui') }}/css/style.css">

    <!--Box Icon-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        body {
            font-family: 'Nunito', sans-serif !important;
        }
    </style>
</head>

<body>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-3">
                <nav class="navbar navbar-expand-lg fixed-top bg-white">
                    <div class="container">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('assets/logo-edukraf.svg') }}" alt="Logo Edukraf" width="130">
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ps-md-5 ps-0 mt-2 mt-md-0">
                                <li class="nav-item me-md-2 me-0 mb-2 mb-md-0">
                                    <a class="nav-link" aria-current="page" href="{{ url('/') }}">Beranda</a>
                                </li>
                                <li class="nav-item me-md-2 me-0 mb-2 mb-md-0">
                                    <a class="nav-link" href="{{ url('class/category') }}">Kelas</a>
                                </li>
                                <li class="nav-item me-md-2 me-0 mb-2 mb-md-0">
                                    <a class="nav-link" aria-current="page" href="{{ url('webinar') }}">Webinar</a>
                                </li>
                                <li class="nav-item me-md-2 me-0 mb-2 mb-md-0">
                                    <a class="nav-link" href="{{ url('komunitas') }}">Komunitas</a>
                                </li>
                                <li class="nav-item me-md-2 me-0 mb-2 mb-md-0">
                                    <a class="nav-link" href="{{ url('ensiklopedia') }}">Kategori Ekraf</a>
                                </li>
                                <li class="nav-item me-md-2 me-0 mb-2 mb-md-0">
                                    <a class="nav-link" href="{{ url('tentang-kami') }}">Tentang Kami</a>
                                </li>
                            </ul>

                            {{-- <div class="dropdown">
                                <a href="#" id="topbarUserDropdown"
                                    class="user-dropdown d-flex align-items-center dropend dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="avatar avatar-md2">
                                        <img src="{{ asset('assets/mazer') }}/images/faces/2.jpg" alt="Avatar" />
                                    </div>
                                    <div class="text">
                                        <h6 class="user-dropdown-name">Rahmat Ramadhan</h6>
                                        <p class="user-dropdown-status text-sm text-muted">
                                            Member
                                        </p>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow-lg"
                                    aria-labelledby="topbarUserDropdown">
                                    <li><a class="dropdown-item" href="#">My Account</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="auth-login.html">Logout</a>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>


                    </div>
                </nav>
            </header>

            <div class="mb-5 pt-1"></div>

            {{-- <div class="my-5"></div> --}}

            @yield('content')

            {{-- <footer>
                <div class="container mt-5 ">
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2022 &copy; Mazer</p>
                        </div>
                        <div class="float-end">
                            <p>
                                App by <a href="https://rahmatrdn.github.io">Rahmat Ramadhan</a> |

                                Template by <a href="https://saugi.me">Saugi</a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer> --}}

            <section class="py-3 bg-dark text-white text-center">
                <div class="container">
                    <div class="row">
                        <div class="container">
                            <h5 class="text-white">Edukraf</h5>
                            {{-- <img src="assets/img/log-white.png" alt="Logo White" class="img-fluid" width="300"> --}}
                            <p class="mb-0">Website Edukasi Pelaku Ekonomi Kreatif</p>
                            <p class="font-weight-bold mb-0">Dinas Pariwisata dan Kebudayaan</p>
                            <p class="font-weight-bold">Kabupaten Jember</p>
                        </div>
                    </div>

                    <hr>

                    <p class="mb-0">by <a href="" target="_blank"
                            class="link-light text-decoration-none"><b>Edukraf Team</b></a>
                    </p>
                </div>
            </section>
        </div>
    </div>
    <script src="{{ asset('assets/mazer') }}/js/app.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    <!-- Icons from Fontawesome -->
    <script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/js/fontawesome.min.js"
        integrity="sha256-CmI2IEcfp/ocwrmWKlpyn/Ms5CuLnZ2WWGa1nmooYvE=" crossorigin="anonymous"></script>
</body>

</html>
