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

    <section class="py-5 text-center bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="font-strong"><b>Webinar Edukraf</b></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" id="list-class">
        <div class="container" data-aos="fade-up">
            <div class="my-5" id="card-type-2">

                <div class="row justify-content-center mb-5 mt-3">
                    <div class="col-md-2 d-grid">
                        <a class="btn py-2 {{ empty(Request::segment(2)) ? 'btn-secondary' : 'btn-outline-secondary' }}"
                            href="{{ route('webinar') }}">Semua</a>
                    </div>
                    <div class="col-md-2 d-grid">
                        <a class="btn py-2 {{ Request::segment(2) == 'soon' ? 'btn-secondary' : 'btn-outline-secondary' }}"
                            href="{{ route('webinar-soon') }}" role="button">Akan Datang</a>
                    </div>
                    <div class="col-md-2 d-grid">
                        <a class="btn py-2 {{ Request::segment(2) == 'done' ? 'btn-secondary' : 'btn-outline-secondary' }}"
                            href="{{ route('webinar-done') }}" role="button">Selesai</a>
                    </div>
                </div>

                <div class="row">
                    @foreach ($webinar as $key => $web)
                        <div class="col-md-3 d-flex align-items-stretch">
                            <div class="card card-2 card-button"
                                onclick="window.location='{{ route('detail', $web->id) }}'">
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
        </div>
    </section>
@endsection
