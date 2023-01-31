@extends('_layout/admin/app')

@section('title')
    Edit Data Kategori Kelas
@endsection

@section('content')
    <div class="page-title mb-5">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Kategori Kelas</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ url($rootLink) }}">Data Kategori Kelas</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Edit
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit Data</h5>
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

                        <form action="{{ url("$rootLink/do-update/$category->id") }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="title_category" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="title_category" name="title_category"
                                    value="{{ $category->title_category }}">
                            </div>
                            <div class="form-group mt-4">
                                <label for="exampleTextarea1">Deskripsi</label>
                                <textarea class="form-control" id="exampleTextarea1" name="desc_category" rows="4" required>{{ $category->desc_category }}</textarea>
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
