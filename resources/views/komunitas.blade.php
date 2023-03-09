@extends('_layout.front.app')

@section('content')
    {{-- <section class="py-5">
        <div class="container py-5 section-header">
            <div class="row">
                <div class="col-lg-12 align-items-center mb-md-0 mb-4">
                    <div>
                        <div class="comunity-header text-center mb-5">
                            <h3 class="font-weight-1 ">Belajar tekait Ekraf yang asik sekaligus jalin koneksi? <br>
                                Kenapa
                                tidak?</h3>
                            <p class="text-grey font-size-16">
                                <b>Ayo, segera join komunitas Ekraf! Belajar sekaligus menamah koneksi dengan sesama pelaku
                                    Ekraf yang ada di Kabupaten Jember.</b>
                            </p>
                        </div>
                        <div class="row">
                            @foreach ($comunity as $key => $comunities)
                                <div class="col-lg-3 d-flex align-items-stretch">
                                    <div class="card card-2 card-button" onclick="window.location='card.html'">
                                        <div class="card-body">
                                            <div class="card-content p-3">
                                                <span
                                                    class="font-space-2 font-size-12 text-grey">{{ $comunities->platform }}</span>
                                                <h5 class="mt-1 font-weight-1"><b>{{ $comunities->name }}</b></h5>
                                                <div class="d-grid gap-2 my-3">
                                                    <button class="btn btn-success" type="button">Gabung Komunitas</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                    <div class="comunity-img text-center">
                        <img src="{{ asset('assets/pragmatic-ui/img/group_ilustrasi.svg') }}" alt="Group Ilustration"
                            width="80%">
                    </div>

                </div>

            </div>
        </div>
        <div class="container text-center py-5">
        </div>
        </div>
    </section> --}}
    <section>
        <div class="container section-header my-5" id="card-type-3">
            <div class="text-center py-5">
                <h3 class="font-weight-1 ">Belajar tekait Ekraf yang asik sekaligus jalin koneksi? <br>
                    Kenapa
                    tidak?</h3>
                <p class="text-grey font-size-16">
                    <b>Ayo, segera join komunitas Ekraf! Belajar sekaligus menamah koneksi dengan sesama pelaku
                        Ekraf yang ada di Kabupaten Jember.</b>
                </p>
            </div>
            <div class="row">
                @foreach ($comunity as $comunities)
                    <div class="col-md-3 d-flex align-items-stretch">
                        <div class="card card-3 card-button w-100" onclick="">
                            <div class="card-body">

                                <div class="card-content p-3">
                                    <span class="font-space-2 font-size-12 text-grey">{{ $comunities->platform }}</span>
                                    <h5 class="mt-1 font-weight-1"><b>{{ $comunities->name }}</b></h5>
                                    <div class="d-grid gap-2 my-3">
                                        <button class="btn btn-success" type="button"
                                            onclick="window.location.href='{{ $comunities->link }}'">Gabung
                                            Komunitas</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="comunity-img text-center">
                    <img src="{{ asset('assets/pragmatic-ui/img/group_ilustrasi.svg') }}" alt="Group Ilustration"
                        width="80%">
                </div>
            </div>
        </div>
    </section>
@endsection
