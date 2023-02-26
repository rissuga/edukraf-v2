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

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="mb-4">
                        <a href="{{ url('webinar') }}" class="link-secondary text-light font-size-12 link-back">← Kembali</a>
                    </div>
                    <h1 class="font-strong"><b>{{ $webinar->title }}</b></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ img_url($webinar->cover) }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-6">
                    <div class="card card-panel-2">
                        <div class="card-body">
                            <div class="p-3">
                                <div class="mb-2">
                                    <p>{{ $webinar->desc }}</p>
                                </div>
                                <div class="mb-2">
                                    <label class="text-grey font-space-3 font-size-14 mb-1"> <i class="bx bx-user"></i>
                                        {{ $webinar->speaker }}
                                    </label>
                                    <p class="text-grey "><i class="bx bx-calendar"></i>&nbsp;{{ tgl_indo($webinar->date) }}
                                    </p>
                                    {{-- <h4 class="font-strong"><b>Rp20.000</b></h4> --}}
                                </div>

                                <hr class="text-grey">
                                @if (strtotime($webinar->date) >= strtotime(gmdate('Y-m-d', time() + 60 * 60 * 7)))
                                    <div class="course-info d-flex justify-content-between align-items-center">
                                        <h5><i class="bx bx-link"></i> Link pendaftaran</h5>
                                        <a href="{{ $webinar->link_webinar }}"
                                            class="btn btn-success btn-sm"style="margin-left: 4px; color:#fff;">Daftar</a>
                                    </div>
                                @endif

                                @if ($webinar->link_record != null)
                                    <span><a class="btn btn-success" href="{{ $webinar->link_record }}">Record</a></span>
                                @else
                                @endif
                                {{-- <div>
                                    <a href="" class="btn btn-success"><b>Beli Sekarang!</b></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mb-1 font-strong"><strong>Pilihan Webinar Lainnya</strong></h4>
                    <p class="text-grey mb-4">Webinar yang mungkin cocok untuk kamu</p>
                </div>
            </div>

            <div class="row">
                @foreach ($select as $key => $web)
                    <div class="col-md-3 d-flex align-items-stretch">
                        <div class="card card-2 card-button"
                            onclick="window.location='{{ url("$rootLink/detail/$web->id") }}'">
                            <div class="card-body">
                                <img src="{{ img_url($web->cover) }}" class="img-fluid w-100"
                                    style="height: 250px; object-fit: cover;">

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
@endsection
