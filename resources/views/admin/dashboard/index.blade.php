@extends('_layout/admin/app')

@section('title')
    Dashboard
@endsection

@section('content')
    @php
        use Illuminate\Support\Facades\Auth;
        $user = Auth::user();
    @endphp
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Beranda</h3>
                {{-- <p class="text-subtitle text-muted">Edukraf</p> --}}
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Beranda</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Edukraf
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header ">
                Edukraf
                {{-- <h4 class="card-title mb-0">Edukraf</h4> --}}
            </div>
            <div class="card-body">
                <blockquote>
                    <h5 class="text-subtitle text-muted mb-1">Halo, {{ $user->name }}</h5>
                    <p>
                        Selamat datang di Edukraf, sebuah sistem edukasi digital yang memberikan kemudahan dalam mengelola
                        data edukasi pelaku ekonomi kreatif
                    </p>

                    <footer class="blockquote-footer mt-2"><cite title="Source Title">Menjaga
                            kesehatan tubuh adalah kewajiban, jika tidak kita tidak akan dapat menjaga
                            pikiran kita kuat dan jernih.</cite></footer>
                </blockquote>

            </div>


        </div>
    </section>
@endsection
