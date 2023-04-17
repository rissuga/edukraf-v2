@extends('_layout.front.app')

@section('content')
    <section class="py-5 text-center bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {{-- <p class="font-space-3 font-size-13 mb-2"></p> --}}
                    <h1 class="font-strong"><b>Kategori Kelas</b></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" id="categories">
        <div class="container">
            <h4 class="mb-1 font-strong"><strong>Kategori Kelas</strong></h4>
            <p class="text-grey mb-4">Kelas yang mungkin cocok untuk kamu</p>

            <div class="row">
                @foreach ($category as $key => $cat)
                    <div class="col-md-3 d-flex align-items-stretch">
                        <div class="card card-3 w-100 card-button"
                            onclick="window.location='{{ url("$rootLink/list/$cat->id") }}'">
                            <div class="card-body">
                                <div class="card-content p-3">
                                    <div class="box-icon mb-3 text-white">
                                        <i class="bx bxs-book mb-3 text-primary"></i>
                                    </div>
                                    <p class="mb-0 text-grey">
                                        <b>{{ $cat->title_category }}</b>
                                    </p>
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
