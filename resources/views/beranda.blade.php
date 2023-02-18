@extends('_layout.front.app')

@section('content')
    <section class="py-5">
        <div class="container py-5 section-header">
            <div class="row mx-3">
                <div class="col-md-6 d-flex align-items-center mb-md-0 mb-4">
                    <div>
                        <h1 class="font-weight-1">Cari Wawasan Kreatifmu <br> Disini </h1>
                        <p class="text-grey font-size-20">
                            <b>Ikuti berbagai macam kelas dan webinar untuk meningkatkan Keahlianmu!</b>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 text-center d-flex align-content-center">
                    <img src="{{ asset('assets/pragmatic-ui/img/subsektor.png') }}" class="img-fluid" width="100%">
                </div>
            </div>

        </div>
    </section>

    <!-- KATEGORI KELAS  -->
    <section class="py-5" id="categories">
        <div class="container">
            <h4 class="mb-1 font-strong"><strong>Kategori Kelas</strong></h4>
            <p class="text-grey mb-4">Kelas yang mungkin cocok untuk kamu</p>

            <div class="row">

                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card card-3 w-100 card-button" onclick="window.location='{{ url('class/list') }}'">
                        <div class="card-body">

                            <div class="card-content p-3">
                                <div class="box-icon mb-3 text-white">
                                    <i class="bx bxs-book mb-3 text-primary"></i>
                                </div>
                                <p class="mb-0 text-grey">
                                    <b>Sales & Marketing</b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card card-3 w-100 card-button" onclick="window.location='plant-category.html'">
                        <div class="card-body">

                            <div class="card-content p-3">
                                <div class="box-icon mb-3 text-white">
                                    <i class="bx bxs-book mb-3 text-primary"></i>
                                </div>
                                <p class="mb-0 text-grey">
                                    <b>Legalitas</b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card card-3 w-100 card-button" onclick="window.location='plant-category.html'">
                        <div class="card-body">

                            <div class="card-content p-3">
                                <div class="box-icon mb-3 text-white">
                                    <i class="bx bxs-book mb-3 text-primary"></i>
                                </div>
                                <p class="mb-0 text-grey">
                                    <b>Bisnis Kuliner</b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>
    <!-- END OF KATEGORI KELAS -->

    <!-- DAFTAR KELAS -->
    <section class="py-5" id="list-class">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="mb-1 font-strong"><strong>Daftar Kelas</strong></h4>
                    <p class="text-grey mb-4">Kelas yang mungkin cocok untuk kamu</p>
                </div>
                <div class="col-md-6 text-md-end d-none d-md-block d-lg-block">
                    <a href="{{ url('class/list') }}" class="btn btn-outline-success"><b>Lihat Semua</b></a>
                </div>
            </div>

            <div class="row">

                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card card-button card-default" onclick="window.location='{{ url('class/detail') }}'">
                        <div class="card-body">
                            <!-- <div class="position-absolute p-2 badge bg-warning m-2">
                                                                                                                                                                                                                                                                                                        <p class="mb-0">Sold Out!</p>
                                                                                                                                                                                                                                                                                                        </div> -->
                            <img class="card-img-top" src="{{ asset('assets/pragmatic-ui/img/kelas1.jpeg') }}"
                                alt="Test" style="height: 300px; object-fit: cover; ">
                            <div class="card-content p-1" style="width:auto;">
                                <h5 class="mb-0 mt-2 font-weight-1"><b>Memulai Bisnis Kue Basah</b></h5>
                                <small class="text-grey font-space-1 mb-2">Bisnis Kuliner</small>

                                <div style="width: 800px;"></div>
                                <p class="text-primary mb-0 mt-1"><b>Rp400.000</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card card-button card-default" onclick="window.location='plant-detail.html'">
                        <div class="card-body">
                            <img class="card-img-top" src="{{ asset('assets/pragmatic-ui/img/kelas2.jpg') }}" alt="Test"
                                style="height: 300px; object-fit: cover; ">
                            <div class="card-content p-1" style="width:auto;">
                                <h5 class="mb-0 mt-2 font-weight-1"><b>Belajar pentingnya legalitas bagi pemilik toko
                                        (UMKM)</b></h5>
                                <small class="text-grey font-space-1 mb-2">Legalitas</small>

                                <div style="width: 800px;"></div>
                                <p class="text-primary mb-0 mt-1"><b>Rp400.000</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card card-button card-default" onclick="window.location='plant-detail.html'">
                        <div class="card-body">
                            <img class="card-img-top" src="{{ asset('assets/pragmatic-ui/img/kelas3.jpg') }}" alt="Test"
                                style="height: 300px; object-fit: cover; ">
                            <div class="card-content p-1" style="width:auto;">
                                <h5 class="mb-0 mt-2 font-weight-1"><b>2 Jam Pahami Digital Marketing untuk Memulai Bisnis
                                        Anda</b></h5>
                                <small class="text-grey font-space-1 mb-2">Sales & Marketing</small>

                                <div style="width: 800px;"></div>
                                <p class="text-primary mb-0 mt-1"><b>Rp400.000</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card card-button card-default" onclick="window.location='plant-detail.html'">
                        <div class="card-body">
                            <img class="card-img-top" src="{{ asset('assets/pragmatic-ui/img/kelas4.jpg') }}"
                                alt="Test" style="height: 300px; object-fit: cover; ">
                            <div class="card-content p-1" style="width:auto;">
                                <h5 class="mb-0 mt-2 font-weight-1"><b>Laris Manis Berjualan di Ecommerce</b></h5>
                                <small class="text-grey font-space-1 mb-2">Sales & Marketing</small>

                                <div style="width: 800px;"></div>
                                <p class="text-primary mb-0 mt-1"><b>Rp400.000</b></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="text-center mt-2 d-block d-md-none d-lg-none">
                <a href="" class="btn btn-outline-success"><b>Lihat Semua</b></a>
            </div>
        </div>

    </section>
    <!-- END OF DAFTAR KELAS -->


    <!-- DAFTAR WEBINAR -->
    {{-- <section class="py-5" id="list-class">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="mb-1 font-strong"><strong>Daftar Webinar</strong></h4>
                    <p class="text-grey mb-4">Webinar yang mungkin cocok untuk kamu</p>
                </div>
                <div class="col-md-6 text-md-end d-none d-md-block d-lg-block">
                    <a href="" class="btn btn-outline-success"><b>Lihat Semua</b></a>
                </div>
            </div>

            <div class="row">

                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card card-button card-default" onclick="window.location='plant-detail.html'">
                        <div class="card-body">
                            <!-- <div class="position-absolute p-2 badge bg-warning m-2">
                                                                                                                                                                                                                                                                                <p class="mb-0">Sold Out!</p>
                                                                                                                                                                                                                                                                            </div> -->
                            <img class="card-img-top" src="{{ asset('assets/pragmatic-ui/img/kelas1.jpeg') }}"
                                alt="Test" style="height: 300px; object-fit: cover; ">
                            <div class="card-content p-1" style="width:auto;">
                                <h5 class="mb-0 mt-2 font-weight-1"><b>Memulai Bisnis Kue Basah</b></h5>
                                <small class="text-grey font-space-1 mb-2">Bisnis Kuliner</small>

                                <div style="width: 800px;"></div>
                                <p class="text-primary mb-0 mt-1"><b>Rp400.000</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card card-button card-default" onclick="window.location='plant-detail.html'">
                        <div class="card-body">
                            <img class="card-img-top" src="{{ asset('assets/pragmatic-ui/img/kelas2.jpg') }}"
                                alt="Test" style="height: 300px; object-fit: cover; ">
                            <div class="card-content p-1" style="width:auto;">
                                <h5 class="mb-0 mt-2 font-weight-1"><b>Belajar pentingnya legalitas bagi pemilik toko
                                        (UMKM)</b></h5>
                                <small class="text-grey font-space-1 mb-2">Legalitas</small>

                                <div style="width: 800px;"></div>
                                <p class="text-primary mb-0 mt-1"><b>Rp400.000</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card card-button card-default" onclick="window.location='plant-detail.html'">
                        <div class="card-body">
                            <img class="card-img-top" src="{{ asset('assets/pragmatic-ui/img/kelas3.jpg') }}"
                                alt="Test" style="height: 300px; object-fit: cover; ">
                            <div class="card-content p-1" style="width:auto;">
                                <h5 class="mb-0 mt-2 font-weight-1"><b>2 Jam Pahami Digital Marketing untuk Memulai Bisnis
                                        Anda</b></h5>
                                <small class="text-grey font-space-1 mb-2">Sales & Marketing</small>

                                <div style="width: 800px;"></div>
                                <p class="text-primary mb-0 mt-1"><b>Rp400.000</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card card-button card-default" onclick="window.location='plant-detail.html'">
                        <div class="card-body">
                            <img class="card-img-top" src="{{ asset('assets/pragmatic-ui/img/kelas4.jpg') }}"
                                alt="Test" style="height: 300px; object-fit: cover; ">
                            <div class="card-content p-1" style="width:auto;">
                                <h5 class="mb-0 mt-2 font-weight-1"><b>Laris Manis Berjualan di Ecommerce</b></h5>
                                <small class="text-grey font-space-1 mb-2">Sales & Marketing</small>

                                <div style="width: 800px;"></div>
                                <p class="text-primary mb-0 mt-1"><b>Rp400.000</b></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="text-center mt-2 d-block d-md-none d-lg-none">
                <a href="" class="btn btn-outline-success"><b>Lihat Semua</b></a>
            </div>
        </div>
    </section> --}}
    <!-- END OF DAFTAR WEBINAR -->


    <!-- Card Type 2-->
    <section class="py-5" id="list-class">
        <div class="container">
            <!-- Card Type 2-->
            <div class="card" id="card-type-2">
                <h5 class="font-space-1"><b>Card Type 2</b></h5>
                <p class="text-grey">Cocok untuk berita, agenda, produk, dll.</p>
                <div class="row">
                    <div class="col-md-3 d-flex align-items-stretch">
                        <div class="card card-2 card-button" onclick="window.location='card.html'">
                            <div class="card-body">
                                <img src="https://via.placeholder.com/300x200" class="img-fluid w-100">

                                <div class="card-content p-3">
                                    <span class="font-space-2 font-size-12 text-grey">Social and Economy</span>
                                    <h5 class="mt-1"><b>A conversation with Figma's accessibility team</b></h5>
                                    <p class="font-size-12 text-grey"><i class="fa-solid fa-calendar"></i> 12 Januari
                                        2023</p>
                                    <small class="text-grey">Figma's accessibility team shares what they’ve learned from
                                        the community and their vision for what’s ahead...
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-stretch">
                        <div class="card card-2 card-button" onclick="window.location='card.html'">
                            <div class="card-body">
                                <img src="https://via.placeholder.com/300x200" class="img-fluid w-100">

                                <div class="card-content p-3">
                                    <span class="font-space-2 font-size-12 text-grey">Social and Economy</span>
                                    <h5 class="mt-1"><b>A conversation with Figma's accessibility team</b></h5>
                                    <p class="font-size-12 text-grey"><i class="fa-solid fa-calendar"></i> 12 Januari
                                        2023</p>
                                    <small class="text-grey">Figma's accessibility team shares what they’ve learned from
                                        the community and their vision for what’s ahead...
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Default Card -->

        </div>
    </section>

    <!-- End of Default Card -->



    <!-- WHY  -->
    <section class="py-5 bg-light" id="categories">
        <div class="container">
            <h4 class="mb-1 font-strong"><strong>Kenapa Memilih Edukraf</strong></h4>
            <p class="text-grey mb-4">3 alasan belajar disini</p>

            <div class="row">

                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card card-why w-100">
                        <div class="card-body">
                            <div class="card-content p-3">
                                <div class="row">
                                    <div class="col-md-3 d-flex">
                                        <div class="position-relative mb-3 mx-0 mx-md-auto mx-lg-auto icon-model-1">
                                            <div class="bullet"></div>
                                            {{-- <i class="fa-solid fa-truck-fast text-primary ms-2 mb-2"></i> --}}
                                            <i class='bx bxs-happy text-primary ms-2 mb-2'></i>

                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h5 class="font-strong">Relasi</h5>
                                        <p class="text-grey mb-0">Gabung komunitas edukraf jember untuk berjejaring dengan
                                            sesama Ekraf</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card card-why w-100">
                        <div class="card-body">
                            <div class="card-content p-3">
                                <div class="row">
                                    <div class="col-md-3 d-flex">
                                        <div class="position-relative mb-3 mx-0 mx-md-auto mx-lg-auto icon-model-1">
                                            <div class="bullet"></div>
                                            {{-- <i class="fa-solid fa-boxes-packing text-primary ms-2 mb-2"></i> --}}
                                            <i class='bx bx-universal-access text-primary ms-2 mb-2'></i>

                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h5 class="font-strong">Akses Materi on Demand</h5>
                                        <p class="text-grey mb-0">Materi dapat diakses kapan dan dari mana saja</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card card-why w-100">
                        <div class="card-body">
                            <div class="card-content p-3">
                                <div class="row">
                                    <div class="col-md-3 d-flex">
                                        <div class="position-relative mb-3 mx-0 mx-md-auto mx-lg-auto icon-model-1">
                                            <div class="bullet"></div>
                                            {{-- <i class="fa-solid fa-credit-card text-primary ms-2 mb-2"></i> --}}
                                            <i class='bx bxs-happy-heart-eyes text-primary ms-2 mb-2'></i>

                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h5 class="font-strong">Ilmu Gratis</h5>
                                        <p class="text-grey mb-0">Tingkatkan skilmu secara gratis di Edukraf Jember</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- END OF WHY -->
@endsection
