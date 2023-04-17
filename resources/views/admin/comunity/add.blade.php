@extends('_layout/admin/app')

@section('title')
    Tambah Data Komunitas
@endsection

@section('content')
    <div class="page-title mb-5">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Komunitas</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ url($rootLink) }}">Data Komunitas</a>
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
            <div class="col-md-7">
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

                        <form action="{{ url("$rootLink/do-add") }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Komunitas</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Contoh: UMKM Edukraf" value="{{ old('name') }}">
                            </div>
                            <div class="mb-3">
                                <label for="platform" class="form-label">Platform</label>
                                <input type="text" class="form-control" id="platform" name="platform"
                                    placeholder="Ccontoh: Whatsapp" value="{{ old('platform') }}">
                            </div>
                            <div class="mb-3">
                                <label for="link" class="form-label">Link</label>
                                <input type="text" class="form-control" id="link" name="link"
                                    placeholder="Masukkan undangan komunitas " value="{{ old('link') }}">
                            </div>
                            {{-- <div class="form-group mt-4">
                                <label for="platform">Platform</label>
                                <textarea class="form-control" id="platform" name="platform" rows="4" required></textarea>
                            </div> --}}

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
