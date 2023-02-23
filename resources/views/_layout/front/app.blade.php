<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edukraf</title>

    <link rel="stylesheet" href="{{ asset('assets/mazer') }}/css/main/app.css" />
    <link rel="shortcut icon" href="{{ asset('assets/mazer') }}/images/logo/favicon.svg" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('assets/mazer') }}/images/logo/favicon.png" type="image/png" />

    <link rel="stylesheet" href="{{ asset('assets/mazer') }}/css/shared/iconly.css" />


    <link rel="stylesheet" href="{{ asset('assets/pragmatic-ui') }}/css/custom.css">
    <link rel="stylesheet" href="{{ asset('assets/pragmatic-ui') }}/css/style.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-3">
                <nav class="navbar navbar-expand-lg fixed-top bg-white">
                    <div class="container">
                        <a class="navbar-brand font-space-3" href="#">
                            Edukraf
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ps-md-5 ps-0 mt-2 mt-md-0">
                                <li class="nav-item me-md-2 me-0 mb-2 mb-md-0">
                                    <a class="nav-link" aria-current="page" href="{{ url('/') }}">Beranda</a>
                                </li>
                                <li class="nav-item me-md-2 me-0 mb-2 mb-md-0">
                                    <a class="nav-link" href="{{ url('ensiklopedia') }}">Ensiklopedia</a>
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

            <div class="mb-5 pt-4"></div>

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

                    <p class="mb-0">Made with 💖 by <a href="" target="_blank"
                            class="link-light text-decoration-none"><b>Edukraf Team</b></a>
                    </p>
                </div>
            </section>
        </div>
    </div>
    <script src="{{ asset('assets/mazer') }}/js/bootstrap.js"></script>
    <script src="{{ asset('assets/mazer') }}/js/app.js"></script>
    <script src="{{ asset('assets/mazer') }}/js/pages/horizontal-layout.js"></script>

    <script src="{{ asset('assets/mazer') }}/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="{{ asset('assets/mazer') }}/js/pages/dashboard.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    <!-- Icons from Fontawesome -->
    <script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/js/fontawesome.min.js"
        integrity="sha256-CmI2IEcfp/ocwrmWKlpyn/Ms5CuLnZ2WWGa1nmooYvE=" crossorigin="anonymous"></script>
</body>

</html>
