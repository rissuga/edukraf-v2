@extends('_layout.front.app')

@section('content')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-4">
                        <a href="#" class="link-secondary text-light font-size-12 link-back">← Kembali</a>
                    </div>

                    <p class="font-space-3 font-size-13 mb-1 text-uppercase text-grey">
                        {{ $class->category['title_category'] }}</p>
                    <h1 class="font-strong"><b>{{ $class->title }}</b></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    {{-- <img src="{{ asset('assets/pragmatic-ui/img/kelas1.jpeg') }}" alt="Monsterra"
                        class="img-fluid w-100 border-radius-3"> --}}
                    <div class="row" style="height: 450px;">

                        <iframe class="col-md-12" src="https://www.youtube.com/embed/{{ $class->link }}"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-panel-2">
                        <div class="card-body">
                            <div class="p-3">
                                <div class="mb-2">
                                    <p>{{ $class->desc }}</p>
                                </div>
                                <div class="mb-1">
                                    <label class="text-grey font-space-3 font-size-14">
                                        Sumber Materi
                                    </label>
                                    {{-- <h4 class="font-strong"><b>Rp20.000</b></h4> --}}
                                </div>
                                <div class="mb-2">
                                    <small class="mb-2">
                                        <i class="bx bxl-youtube"></i>&nbsp;{{ $class->source }}
                                    </small>
                                </div>
                                <hr class="text-grey">
                                {{-- Rencana tombol checklist tonton --}}
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
                    <h4 class="mb-1 font-strong"><strong>Pilihan Kelas Lainnya</strong></h4>
                    <p class="text-grey mb-4">Kelas yang mungkin cocok untuk kamu</p>
                </div>
            </div>

            <div class="row">
                @foreach ($select as $key => $clsrm)
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card card-button card-default"
                            onclick="window.location='{{ url("$rootLink/detail/$clsrm->id") }}'">
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
        </div>
        </div>
    </section>
@endsection
