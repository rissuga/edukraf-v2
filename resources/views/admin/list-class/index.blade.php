@extends('_layout/admin/app')

@section('title')
    Data Kelas Edukraf
@endsection

@section('content')
    <div class="page-title mb-5">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Kelas Edukraf</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">
                            Data Kelas Edukraf
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
                @if (empty($list_class))
                    <div class="my-5 text-center">
                        <h5>Data Belum Tersedia</h5>
                        <p>Silahkan melakukan penambahan data</p>
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="table table-hover mb-0 ">
                            <thead>
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Judul</th>
                                <th>Link</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @foreach ($list_class as $key => $class)
                                    <tr>
                                        <td scope="key"> {{ $key + 1 }}</td>
                                        <td>{{ $class->Category['title_category'] }}</td>
                                        <td>{{ $class->title }}</td>
                                        <td>{{ $class->link }}</td>
                                        <td>{{ $class->desc }}</td>


                                        <td>
                                            <a href="{{ url("$rootLink/update/$class->id") }}"
                                                class="btn btn-sm btn-warning mb-md-0 mb-2">Edit</a>
                                            <a href="{{ url("$rootLink/do-delete/$class->id") }}"
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
