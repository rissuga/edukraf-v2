@extends('_layout/admin/app')

@section('title')
    Tambah Data Webinar
@endsection

@section('content')
    <div class="page-title mb-5">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Webinar</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ url($rootLink) }}">Data Webinar</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Tambah
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Tambah Data</h5>
                    </div>
                    <div class="card-body">
                        <!-- Menampilkan Error form validation -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <b>Terjadi kesalahan pada proses input data</b> <br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ url("$rootLink/do-update/$webinar->id") }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Judul</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        value="{{ $webinar->title }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="speaker" class="form-label">Pemateri</label>
                                    <input type="text" class="form-control" id="speaker" name="speaker"
                                        value="{{ $webinar->speaker }}">
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6 mt-2">
                                    <label for="date" class="form-label">Tanggal</label>
                                    <input class="form-control" type="date" id="date" name="date"
                                        placeholder="dd/mm/yyyy" value="{{ $webinar->date }}" required>
                                </div>

                                <div class="col-md-6 mt-2">
                                    <label for="link_webinar" class="form-label">Link Webinar</label>
                                    <input type="text" id="link_webinar" name="link_webinar" class="form-control"
                                        value="{{ $webinar->link_webinar }}" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mt-2">
                                    <label for="timeStart" class="form-label">Jam Mulai</label>
                                    <input type="text" name="time_start" class="form-control" placeholder="Contoh: 13.00"
                                        value="{{ $webinar->time_start }}" required>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label for="timeEnd" class="form-label">Jam Selesai</label>
                                    <input type="text" name="time_end" class="form-control" placeholder="Contoh: 14.00"
                                        value="{{ $webinar->time_end }}" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mt-2">
                                    <label for="timeEnd" class="form-label">Cover</label>
                                    <input class="form-control" type="file" name="cover" accept="image/*"
                                        value="{{ $webinar->cover }}" placeholder="Pilih Gambar" required>

                                </div>
                                <div class="col-md-6 mt-2">
                                    <label for="timeEnd" class="form-label">Link Record</label>
                                    <input type="url" name="link_record" class="form-control"
                                        value="{{ $webinar->link_record }}">
                                </div>

                            </div>

                            <div class="form-group mt-4">
                                <label for="exampleTextarea1">Deskripsi</label>
                                <textarea class="form-control" id="exampleTextarea1" name="desc" rows="4" required>{{ $webinar->desc }}</textarea>
                            </div>

                            <div class="mt-4">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-lg btn-primary">Simpan Perubahan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
