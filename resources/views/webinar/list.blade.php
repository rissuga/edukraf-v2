@extends('_layout.front.app')

@section('content')
    <section class="py-5 text-center bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="font-space-3 font-size-13 mb-2">COMPONENT</p>
                    <h1 class="font-strong"><b>Webinar Edukraf</b></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card card-button card-default" onclick="window.location='{{ url('webinar/detail') }}'">
                        <div class="card-body">
                            <!-- <div class="position-absolute p-2 badge bg-warning m-2">
                                                                                                    <p class="mb-0">Sold Out!</p>
                                                                                                </div> -->
                            <img class="card-img-top" src="{{ asset('assets/pragmatic-ui/img/kelas4.jpg') }}" alt="Test"
                                style="height: 300px; object-fit: cover; ">
                            <div class="card-content p-1" style="width:auto;">
                                <h5 class="mb-0 mt-2 font-strong"><b>Laris Manis Berjualan di Ecommerce</b></h5>
                                <small class="text-grey font-space-1 mb-2">Sales & Marketing</small>

                                <div style="width: 800px;"></div>
                                <p class="text-primary mb-0 mt-1"><b>Rp400.000</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
