@extends('layout.navbar')
@section('body')
    <!-- Profil Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-100 align-self-end" src="/img/LPKMJ.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Program Pelatihan</p>
                    <h1 class="mb-4">Program Pelatihan LPK "MUTIARA JAYA”</h1>
                    <p style="text-indent: 30px";>LPK Mutiara Jaya beralamat di Jl. Irian Jaya RT 004 / RW 003 Desa
                        Banjaran, Kecamatan Taman, Kabupaten Pemalang, Jawa Tengah 52361, Indonesia. Telepon:
                        0878-8198-6716.</p>
                    <p class="mb-4">LPK "MUTIARA JAYA” memiliki Program Pelatihan yaitu :</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Program Pelatihan Tata Busana</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Program Pelatihan Menjahit Garment</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Program Penyaluran Kerja</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="/welcome">Daftar</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Profil End -->


    <!-- Program pelatihan Start -->
    <div class="container-fluid bg-primary overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <p class="d-inline-block border rounded-pill text-light py-1 px-4">Features</p>
                        <h1 class="text-white mb-4">Mengapa LPK Mutiara Jaya pilihan terbaik?</h1>
                        <p class="text-white mb-4 pb-2">Karena LPK Mutiara Jaya menghadirkan pelatihan yang mudah dipahami
                            serta berkualitas, sehingga akan sesuai dengan kebutuhan dunia usaha atau dunia industri.</p>
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                                        style="width: 55px; height: 55px;">
                                        <i class="fa fa-id-card text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Available</p>
                                        <h5 class="text-white mb-0">Sertifikat</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                                        style="width: 55px; height: 55px;">
                                        <i class="fa fa-credit-card text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Biaya Pelatihan</p>
                                        <h5 class="text-white mb-0">Terjangkau</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                                        style="width: 55px; height: 55px;">
                                        <i class="fa fa-building text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Perusahaan</p>
                                        <h5 class="text-white mb-0">Garment</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                                        style="width: 55px; height: 55px;">
                                        <i class="fa fa-podcast text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Instruktur</p>
                                        <h5 class="text-white mb-0">Profesional</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="owl-carousel header-carousel">
                        <div class="owl-carousel-item position-relative">
                            <img class="img-fluid" src="/img/features2.jpg" alt="">
                            <div class="owl-carousel-text">
                                <h1 class="display-1 text-white mb-0">Serifikat</h1>
                            </div>
                        </div>
                        <div class="owl-carousel-item position-relative">
                            <img class="img-fluid" src="/img/features3.jpg" alt="">
                            <div class="owl-carousel-text">
                                <h1 class="display-1 text-white mb-0">Garment</h1>
                            </div>
                        </div>
                        <div class="owl-carousel-item position-relative">
                            <img class="img-fluid" src="/img/features4.jpg" alt="">
                            <div class="owl-carousel-text">
                                <h1 class="display-1 text-white mb-0">Biaya Terjangkau</h1>
                            </div>
                        </div>
                        <div class="owl-carousel-item position-relative">
                            <img class="img-fluid" src="/img/features1.jpg" alt="">
                            <div class="owl-carousel-text">
                                <h1 class="display-1 text-white mb-0">Instruktur Profesional</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Program Pelatihan End -->
@endsection
