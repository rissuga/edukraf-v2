@extends('_layout/admin/app')

@section('title')
    Data webinar
@endsection

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


    <div class="page-title mb-5">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Webinar</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">
                            Data Webinar
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-header ms-auto">
                <a href="{{ url("$rootLink/add") }}" class="btn btn-primary"><i class="bi bi-plus"></i> Tambah Data</a>
            </div>
            <div class="card-body">
                @if (empty($webinar))
                    <div class="my-5 text-center">
                        <h5>Data Belum Tersedia</h5>
                        <p>Silahkan melakukan penambahan data</p>
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="table table-hover mb-0 ">
                            <thead>
                                <th>Judul</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Pemateri</th>
                                <th>Cover</th>
                                <th width="200px">Aksi</th>
                            </thead>
                            <tbody>
                                @foreach ($webinar as $key => $webinars)
                                    <tr>

                                        <td>{{ $webinars->title }}</td>
                                        <td>{{ tgl_indo($webinars->date) }}</td>
                                        <td>
                                            @if (strtotime($webinars->date) >= strtotime(gmdate('Y-m-d', time() + 60 * 60 * 7)))
                                                <span class="badge bg-warning text-dark mb-2">Akan Datang</span>
                                            @else
                                                <span class="badge bg-success text-light mb-2">Selesai</span>
                                            @endif
                                        </td>
                                        <td>{{ $webinars->speaker }}</td>
                                        <td><img src="{{ img_url($webinars->cover) }}" width="100px" alt=""></td>


                                        <td>
                                            <a href="{{ url("webinar/detail/$webinars->id") }}"
                                                class="btn btn-sm btn-outline-primary">Lihat</a>
                                            <a href="{{ url("$rootLink/update/$webinars->id") }}"
                                                class="btn btn-sm btn-warning mb-md-0 mb-2">Edit</a>
                                            <a href="{{ url("$rootLink/do-delete/$webinars->id") }}"
                                                class="btn btn-sm btn-danger"
                                                onclick="return confirm('Apakah kamu yakin?')">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
