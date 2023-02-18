@extends('_layout.front.app')

@section('content')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-4">
                        <a href="#" class="link-secondary text-light font-size-12 link-back">← Kembali</a>
                    </div>

                    <p class="font-space-3 font-size-13 mb-1 text-grey">BISNIS KULINER</p>
                    <h1 class="font-strong"><b>Memulai Bisnis Kue Basah</b></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('assets/pragmatic-ui/img/kelas1.jpeg') }}" alt="Monsterra"
                        class="img-fluid w-100 border-radius-3">
                </div>
                <div class="col-md-6">
                    <div class="card card-panel-2">
                        <div class="card-body">
                            <div class="p-3">

                                <div class="mb-2">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, modi non sunt
                                        aliquam culpa ducimus aspernatur autem quae nam, quo obcaecati labore maiores magnam
                                        deleniti ut perferendis dolorem expedita repellat.</p>
                                </div>

                                <div class="mb-2">
                                    <label class="text-grey font-space-3 font-size-14 mb-1">HARGA</label>
                                    <h4 class="font-strong"><b>Rp20.000</b></h4>
                                </div>

                                <hr class="text-grey">
                                <div>
                                    <a href="" class="btn btn-success"><b>Beli Sekarang!</b></a>
                                </div>
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

                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card card-button card-default" onclick="window.location='plant-detail.html'">
                        <div class="card-body">
                            <!-- <div class="position-absolute p-2 badge bg-warning m-2">
                                                                <p class="mb-0">Sold Out!</p>
                                                            </div> -->
                            <img class="card-img-top" src="assets/img/plant/montsera.jpg" alt="Test"
                                style="height: 300px; object-fit: cover; ">
                            <div class="card-content p-1" style="width:auto;">
                                <h5 class="mb-0 mt-2 font-strong"><b>Monsterra King</b></h5>
                                <small class="text-grey font-space-1 mb-2">Tanaman Hias</small>

                                <div style="width: 800px;"></div>
                                <p class="text-primary mb-0 mt-1"><b>Rp400.000</b></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
