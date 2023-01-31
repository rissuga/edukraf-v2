@extends('_layout/admin/app')

@section('title')
    Tambah Data Kelas
@endsection

@section('content')
    <div class="page-title mb-5">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Kelas</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ url($rootLink) }}">Data Kelas</a>
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

                        <form action="{{ url("$rootLink/do-add") }}" enctype="multipart/form-data" method="POST">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="title" class="form-label">Judul</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        value="{{ old('title') }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="link" class="form-label">Link Kelas</label>
                                    <input type="text" class="form-control" id="link" name="link"
                                        value="{{ old('link') }}">
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6 mt-2">
                                    <label for="source" class="form-label">Kategori</label>

                                    <select class="form-control " name="category_id" required>
                                        <option value="">Select One</option>
                                        @foreach ($category as $item)
                                            <option value="{{ $item->id }}">{{ $item->title_category }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6 mt-2">
                                    <label for="source" class="form-label">Sumber</label>
                                    <input type="text" id="source" name="source" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group mt-4">
                                <label for="desc">Deskripsi</label>
                                <textarea class="form-control" id="desc" name="desc" rows="4" required></textarea>
                            </div>

                            <div class="mt-4">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-lg btn-primary">Tambahkan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
