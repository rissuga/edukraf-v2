@extends('_layout.front.app')

@section('content')
    <section class="py-5 text-center bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="font-space-3 font-size-13 mb-2">Kategori Kelas</p>
                    <h1 class="font-strong"><b>Sales & Marketing</b></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5 py-5">
        <div class="container">

            <div class="row">
                @foreach ($class as $key => $clsrm)
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card card-button card-default"
                            onclick="window.location='{{ url('class/detail', $clsrm->id) }}'">
                            <div class="card-body">
                                <img class="card-img-top" src="https://img.youtube.com/vi/{{ $clsrm->link }}/0.jpg"
                                    alt="Test" style="height: 300px; object-fit: cover; ">
                                <div class="card-content p-1" style="width:auto;">
                                    <a class="badge bg-primary text-light mt-3 mb-1" href="">
                                        {{ $clsrm->category['title_category'] }}</a>
                                    <h5 class="mb-3 mt-2 font-weight-1"><b>{{ $clsrm->title }}</b></h5>
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
