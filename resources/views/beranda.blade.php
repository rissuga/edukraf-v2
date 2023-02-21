@extends('_layout.front.app')

@section('content')
    @php
        function substrwords($text, $maxchar, $end = '...')
        {
            if (strlen($text) > $maxchar || $text == '') {
                $words = preg_split('/\s/', $text);
                $output = '';
                $i = 0;
                while (1) {
                    $length = strlen($output) + strlen($words[$i]);
                    if ($length > $maxchar) {
                        break;
                    } else {
                        $output .= ' ' . $words[$i];
                        ++$i;
                    }
                }
                $output .= $end;
            } else {
                $output = $text;
            }
            return $output;
        }
        
        function tgl_indo($tanggal)
        {
            $bulan = [
                1 => 'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember',
            ];
            $pecahkan = explode('-', $tanggal);
        
            // variabel pecahkan 0 = tahun
            // variabel pecahkan 1 = bulan
            // variabel pecahkan 2 = tanggal
        
            return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
        }
    @endphp

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
                @foreach ($category as $key => $cat)
                    <div class="col-md-3 d-flex align-items-stretch">
                        <div class="card card-3 w-100 card-button"
                            onclick="window.location='{{ route('list-class', $cat->id) }}'">
                            <div class="card-body">
                                <div class="card-content p-3">
                                    <div class="box-icon mb-3 text-white">
                                        <i class="bx bxs-book mb-3 text-primary"></i>
                                    </div>
                                    <p class="mb-0 text-grey">
                                        <b>{{ $cat->title_category }}</b>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
                    <a href="{{ url('class/category') }}" class="btn btn-outline-success"><b>Lihat Semua</b></a>
                </div>
            </div>

            <div class="row">
                @foreach ($class as $key => $clsrm)
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card card-button card-default"
                            onclick="window.location='{{ route('detail-class', $clsrm->id) }}'">
                            <div class="card-body">
                                <img class="card-img-top" src="https://img.youtube.com/vi/{{ $clsrm->link }}/0.jpg"
                                    alt="Test" style="height: 300px; object-fit: cover; ">
                                <div class="card-content p-1" style="width:auto;">
                                    <a class="badge bg-primary text-light mt-2 mb-2" href="">
                                        {{ $clsrm->category['title_category'] }}</a>
                                    <h5 class="mb-2 mt-2 font-weight-1"><b>{{ $clsrm->title }}</b></h5>
                                    <small class="text-grey font-space-1 mb-2"> <i
                                            class="bx bxl-youtube"></i>&nbsp;{{ $clsrm->source }}
                                    </small>
                                    <div style="width: 800px;"></div>
                                    {{-- <p class="text-primary mb-0 mt-1 text-grey">
                                        {{ substrwords($clsrm->desc, 100) }}</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-2 d-block d-md-none d-lg-none">
                <a href="" class="btn btn-outline-success"><b>Lihat Semua</b></a>
            </div>
        </div>
    </section>
    <!-- END OF DAFTAR KELAS -->

    <!-- DAFTAR WEBINAR-->
    <section class="py-5" id="list-class">
        <div class="container">
            <div class="my-5" id="card-type-2">

                <div class="row">
                    <div class="col-md-6">
                        <h4 class="mb-1 font-strong"><strong>Webinar Kelas</strong></h4>
                        <p class="text-grey mb-4">Webinar yang mungkin cocok untuk kamu</p>
                    </div>
                    <div class="col-md-6 text-md-end d-none d-md-block d-lg-block">
                        <a href="{{ url('webinar/list') }}" class="btn btn-outline-success"><b>Lihat Semua</b></a>
                    </div>
                </div>

                <div class="row">
                    @foreach ($webinar as $key => $web)
                        <div class="col-md-3 d-flex align-items-stretch">
                            <div class="card card-2 card-button"
                                onclick="window.location='{{ route('detail', $web->id) }}'">
                                <div class="card-body">
                                    <img src="{{ img_url($web->cover) }}" class="img-fluid w-100"
                                        style="height: 200px; object-fit: cover;">

                                    <div class="card-content p-3">
                                        @if (strtotime($web->date) >= strtotime(gmdate('Y-m-d', time() + 60 * 60 * 7)))
                                            <span class="badge bg-warning text-dark mb-2">Akan Datang</span>
                                        @else
                                            <span class="badge bg-success text-light mb-2">Selesai</span>
                                        @endif
                                        <h5 class="mt-1 font-strong"><b>{{ $web->title }}</b></h5>
                                        <p class="font-size-12 text-grey"><i class="fa-solid fa-calendar"></i>
                                            <i class="bx bx-calendar"></i>{{ tgl_indo($web->date) }}
                                        </p>
                                        <small class="text-grey mb-0">{{ substrwords($web->desc, 80) }}
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- END OF DAFTAR WEBINAR -->

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
