@extends('_layout.front.app')

@section('content')
    <section id="about" class="about py-5 ">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img src="{{ asset('assets/pragmatic-ui/img/subsektor.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content mt-5">
                    <div>
                        <h3 class="font-strong font-weight-1">Apa Itu Edukraf?</h3>
                        <p class="">
                            Edukraf adalah website edukasi dan informasi untuk pelaku ekonomi kreatif.
                            Edukraf ini berisi informasi seputar ekraf dalam berbagai fitur seperti kelas, webinar,
                            dan
                            komunitas
                            untuk pelaku ekraf. Di Edukraf kamu bisa menemukan
                        </p>
                        <ul class="text-list">
                            <li><i class="bi bi-check-circle"></i> Berbagai macam
                                webinar ekonomi kreatif
                            </li>
                            <li><i class="bi bi-check-circle"></i> Beragam kelas
                                yang terdiri dari
                                subsektor ekonomi
                                kreatif</li>
                            <li><i class="bi bi-check-circle"></i> Komunitas para
                                pelaku ekonomi kreatif
                                Jember
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section id="about" class="about py-5">
        <div class="container" data-aos="fade-up">
            <div class="section-title mb-4">
                <h3 class="font-strong text-center font-weight-1">VISI MISI Kabupaten Jember</h3>
            </div>
            <div class="row">
                <div class="col-lg-8 order-1 order-lg-2 content" data-aos="fade-left" data-aos-delay="100">
                    <div class="visi-misi">
                        <div class="visi-misi-item">
                            <h3 class="font-strong">Visi</h3>
                            <p>
                                Sudah Waktunya Membenahi Jember (Wes Wahaye Mbenahi Jember) dengan berprinsip pada
                                Sinergi, Kolaborasi dan Akselerasi dalam Membangun Jember
                            </p>
                            <h3 class="font-strong">Misi</h3>
                            <p>
                            <ul>
                                <li><i class="bi bi-check-circle"></i>Meningkatnya kualitas daya tarik wisata yang
                                    didukung dengan Aktifitas Gelaran (Even) dan Pameran Usaha Ekonomi Kreatif</li>
                                <li><i class="bi bi-check-circle"></i>Meningkatnya SDM Pariwisata dan Pelaku Ekonomi
                                    Kreatif</li>
                                <li><i class="bi bi-check-circle"></i>Meningkatnya Apresiasi dan Kreativitas terhadap
                                    Seni Budaya/Trardisi Lokal yang didukung dengan Literasi Sejarah Lokal</li>
                                <li><i class="bi bi-check-circle"></i>Meningkatnya Pelestarian Cagar Budaya</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <img src="{{ asset('assets/pragmatic-ui/img/logo-dinas.png') }}" class="img-fluid" alt=""
                        style="padding-top: 100px; padding-left: 60px;">
                </div>
            </div>
        </div>
    </section>
@endsection
