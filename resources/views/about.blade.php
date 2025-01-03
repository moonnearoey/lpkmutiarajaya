@extends('layout.navbar')
@section('body')
    <!-- Profil Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-100 align-self-end" src="img/LPKMJ.png" alt="">
                    </div>
                </div>
                <div style="text-align: justify" class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Profil</p>
                    <h1 class="mb-4">Tentang LPK "Mutiara Jaya"</h1>
                    <p style="text-indent: 30px">LPK Mutiara Jaya beralamat di Jl. Irian Jaya RT 004 / RW 003 Desa Banjaran,
                        Kecamatan Taman, Kabupaten Pemalang, Jawa Tengah 52361, Indonesia. Telepon: 0878-8198-6716.</p>
                    <p style="text-indent: 30px" class="mb-4">Merupakan salah satu Lembaga Pelatihan Kerja (LPK) di
                        Kabupaten Pemalang. LPK ini melayani pelatihan kerja, peningkatan skill kerja, pengenalan lingkungan
                        kerja dan lainnya.</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Program Pelatihan Tata Busana</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Program Pelatihan Menjahit Garment</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Program Penyaluran Kerja</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="/tentanglpk"><strong>Read More</strong></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Profil End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Testimonial</p>
                <h1>Ulasan serta kata-kata dari para Alumni LPK "Mutiara Jaya" </h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="/img/testimonial-1.jpg"
                        style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>"Setiap potongan kain adalah kanvas kosongmu. Luangkan waktu untuk mengekspresikan kreativitasmu
                            melalui setiap jahitan."</p>
                        <h5 class="mb-1">Anonym</h5>
                        <span class="fst-italic">Alumni 2023</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="/img/testimonial-2.jpg"
                        style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>"Detil adalah yang membedakan penjahit ulung. Jahitanmu adalah tanda tangan yang mengisyaratkan
                            kualitas kerjamu."</p>
                        <h5 class="mb-1">Anonym</h5>
                        <span class="fst-italic">Alumni 2022</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="/img/testimonial-3.jpg"
                        style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>"Jangan takut mencoba pola baru atau bahan yang belum pernah digunakan sebelumnya. Inovasi adalah
                            kunci untuk pertumbuhan."</p>
                        <h5 class="mb-1">Anonym</h5>
                        <span class="fst-italic">Alumni 2021</span>
                    </div>
                    <!--div class="testimonial-item text-center">
                                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="/img/testimonial-4.jpg"
                                        style="width: 100px; height: 100px;">
                                    <div class="testimonial-text rounded text-center p-4">
                                        <p>"Kreativitas sangat penting dimiliki hampir semua bidang agar menghasilkan sesuatu yang baru,
                                            unik, dan beda. Misalnya saja bidang industry kreatif, pendidikan, pertanian, otomotif dan
                                            seterusnya. Ya, untuk itulah setiap orang dituntut berpikir kreatif agar bisa melakukan
                                            sebuah inovasi."</p>
                                        <h5 class="mb-1">Anonym</h5>
                                        <span class="fst-italic">Alumni 2021</span>
                                    </div>
                                    <div class="testimonial-item text-center">
                                        <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="/img/testimonial-5.jpg"
                                            style="width: 100px; height: 100px;">
                                        <div class="testimonial-text rounded text-center p-4">
                                            <p> "Uang tidak bisa membeli kebahagiaan dan kreativitas. Tapi, kebahagiaan dan kreativitas
                                                jika digabungkan bisa menjadi uang."</p>
                                            <h5 class="mb-1">Anonym</h5>
                                            <span class="fst-italic">Alumni 2021</span>
                                        </div>
                                        <div class="testimonial-item text-center">
                                            <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="/img/testimonial-6.jpg"
                                                style="width: 100px; height: 100px;">
                                            <div class="testimonial-text rounded text-center p-4">
                                                <p>"Banyak orang yang sebenarnya kreatif, namun karena terjebak rutinitas sehingga
                                                    akhirnya tidak lagi mampu mengeluarkan ide-ide kreatif."</p>
                                                <h5 class="mb-1">Anonym</h5>
                                                <span class="fst-italic">Alumni 2021</span>
                                            </div>
                                            <div class="testimonial-item text-center">
                                                <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                                                    src="/img/testimonial-7.jpg" style="width: 100px; height: 100px;">
                                                <div class="testimonial-text rounded text-center p-4">
                                                    <p>"Masa depan adalah milik mereka yang lebih banyak belajar keterampilan dan
                                                        menggabungkannya dengan cara-cara yang kreatif."</p>
                                                    <h5 class="mb-1">Anonym</h5>
                                                    <span class="fst-italic">Alumni 2021</span>
                                                </div>
                                                <div class="testimonial-item text-center">
                                                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                                                        src="/img/testimonial-8.jpg" style="width: 100px; height: 100px;">
                                                    <div class="testimonial-text rounded text-center p-4">
                                                        <p>"Kata-kata yang baik memiliki daya kreatif, kekuatan yang membangun hal-hal
                                                            mulia, dan energi yang menyiramkan berkat-berkat kepada dunia."</p>
                                                        <h5 class="mb-1">Anonym</h5>
                                                        <span class="fst-italic">Alumni 2021</span>
                                                    </div>
                                                    <div class="testimonial-item text-center">
                                                        <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                                                            src="/img/testimonial-9.jpg" style="width: 100px; height: 100px;">
                                                        <div class="testimonial-text rounded text-center p-4">
                                                            <p>"Orang kreatif termotivasi oleh hasrat untuk berprestasi, bukan ambisi
                                                                untuk mengalahkan orang lain."</p>
                                                            <h5 class="mb-1">Anonym</h5>
                                                            <span class="fst-italic">Alumni 2021</span>
                                                        </div>
                                                    </div-->
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
    @endsection
