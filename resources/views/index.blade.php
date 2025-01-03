@extends('layout.navbar')
@section('body')
    <!-- Header Start -->
    <div class="container-fluid header bg-primary p-0 mb-5">
        <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-4 text-white mb-5">Ayo...! Tingkatkan Keterampilanmu...</h1>
                <p class="text-white mb-5">Jadilah manusia sakti... cerdas, tabah dan juga kreatif... Tingkatkan Keterampilan
                    dan potensi diri anda bersama LPK Mutiara Jaya.</p>
                <div class="row g-4">
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">4</h2>
                            <p class="text-light mb-0">Instruktur</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">7</h2>
                            <p class="text-light mb-0">Perusahaan</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">3434</h2>
                            <p class="text-light mb-0">Alumni</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="img/1.jpg" alt="">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-white mb-0">Tata Busana</h1>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="img/2.jpg" alt="">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-white mb-0">Garment</h1>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="img/3.jpg" alt="">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-white mb-0">Desain</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


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
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="/welcome"><strong>Klik untuk
                            Daftar</strong></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Profil End -->


    <!-- visimisi Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;"><strong>
                    <p class="d-inline-block border rounded-pill py-1 px-4">Visi & Misi</p>
                    <h1>LPK Mutiara Jaya</h1>
                    <p class="mb-4">
                        <br>◾VISI<br>
                        Menjadikan LPK “MUTIARA JAYA sebagai lembaga pelatihan kerja yang dapat mengatasi masalah
                        pengangguran.<br>
                        <br>◾MISI<br>
                        🔹Menciptakan manusia yang mandiri dan berusaha yang diridhoi Allah SWT.<br>
                        🔹Membangun dan meningkatkan daya kerja yang mampu menghasilkan tenaga kerja yang siap pakai.<br>
                        🔹Menciptakan generasi penerus yang punya keterampilan dan masa depan.
                    </p>
                </strong>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            <i class="fa fa-graduation-cap text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Knowledge</h4>
                        <p style="text-align: justify" class="mb-4">LPK “MUTIARA JAYA” berupaya berpartisipasi dalam
                            membantu program pemerintah, terutama dalam menekan angka pengangguran melalui program pelatihan
                            kerja.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            <i class="fa fa-universal-access text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Skills</h4>
                        <p style="text-align: justify" class="mb-4"> Mencakup berbagai aspek, termasuk pengenalan mesin
                            jahit, pemahaman pola dan pengukuran, teknik pemotongan kain, jahitan dasar, penyelesaian, dan
                            desain pakaian. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            <i class="fa fa-sitemap text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Attitude</h4>
                        <p style="text-align: justify" class="mb-4">Mengajarkan hal - hal baik, Teliti & hati - hati dalam
                            menyiapkan segala sesuatu untuk keperluan menjahit, disiplin dan taat dalam menerapkan Kesehatan
                            dan Keselamatan Kerja.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            <i class="fa fa-users text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Teamwork</h4>
                        <p style="text-align: justify" class="mb-4">Salah satu kemampuan terpenting di tempat kerja,
                            karena keterampilan ini melibatkan kemampuan untuk bekerja secara efektif dan harmonis bersama
                            orang lain dalam suatu kelompok atau tim.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            <i class="fa fa-industry text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Entrepreneurship</h4>
                        <p style="text-align: justify" class="mb-4">Berwirausaha merupakan salah satu cara yang dapat
                            ditempuh untuk membangun kemandirian ekonomi, dengan memberikan pelatihan ketrampilan agar
                            mempunyai bekal skill untuk berwirausaha.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            <i class="fa fa-user text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Designer</h4>
                        <p style="text-align: justify" class="mb-4">Program pelatihan di LPK Mutiara Jaya membantu
                            peserta / Siswa kompeten dalam membuat konsep desain, menggambar desain secara manual serta
                            mewujudkannya menjadi sebuah koleksi fashion.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- visimisi End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-primary overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div style="text-align: justify" class="p-lg-5 ps-lg-0">
                        <p class="d-inline-block border rounded-pill text-light py-1 px-4">Features</p>
                        <h1 class="text-white mb-4">Mengapa LPK Mutiara Jaya pilihan terbaik?</h1>
                        <p style="text-indent: 30px" class="text-white mb-4 pb-2">Karena LPK Mutiara Jaya menghadirkan
                            pelatihan yang mudah dipahami serta berkualitas, sehingga akan sesuai dengan kebutuhan dunia
                            usaha atau dunia industri.</p>
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
                            <img class="img-fluid" src="img/features2.jpg" alt="">
                            <div class="owl-carousel-text">
                                <h1 class="display-1 text-white mb-0">Serifikat</h1>
                            </div>
                        </div>
                        <div class="owl-carousel-item position-relative">
                            <img class="img-fluid" src="img/features3.jpg" alt="">
                            <div class="owl-carousel-text">
                                <h1 class="display-1 text-white mb-0">Garment</h1>
                            </div>
                        </div>
                        <div class="owl-carousel-item position-relative">
                            <img class="img-fluid" src="img/features4.jpg" alt="">
                            <div class="owl-carousel-text">
                                <h1 class="display-1 text-white mb-0">Biaya Terjangkau</h1>
                            </div>
                        </div>
                        <div class="owl-carousel-item position-relative">
                            <img class="img-fluid" src="img/features1.jpg" alt="">
                            <div class="owl-carousel-text">
                                <h1 class="display-1 text-white mb-0">Instruktur Profesional</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Struktur Organisasi</p>
                <h1>Berikut adalah Struktur Organisasi LPK "Mutiara Jaya"</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/founder.jpg" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Maryoso</h5>
                            <p class="text-primary">Founder</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href="https://www.facebook.com/maryoso25"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href="https://www.twitter.com/lpkmutiarajaya"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href="https://www.instagram.com/maryosojaya"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/instrukturmiz.jpg" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Marlisa Indana Zulfa</h5>
                            <p class="text-primary">Instruktur</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href="https://www.facebook.com/marlisaindanazulfa"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href="https://www.twitter.com/marlisa_zulfa"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href="https://www.instagram.com/https.mizy"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/instrukturmm.jpg" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Misbahul Munir</h5>
                            <p class="text-primary">Instruktur</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href="https://www.facebook.com/msbahulmnr"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href="https://www.twitter.com/misbahulmunir9"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href="https://www.instagram.com/msbahulmnr"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/instrukturmatr.jpg" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Mutiara Annisa Tulas R</h5>
                            <p class="text-primary">Instruktur</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href="https://www.facebook.com/mutiaraannisatulasramadhani"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href="https://www.twitter.com/tulasramadhani"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href="https://www.instagram.com/mutiaraannisa_tr"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Pendaftaran Start -->
    <script>
        function kirimKeWhatsApp() {
            // Ambil data dari formulir
            const nama = document.getElementById("nama").value;
            const email = document.getElementById("email").value;
            const telepon = document.getElementById("telepon").value;
            const agama = document.getElementById("agama").value;
            const tempatlahir = document.getElementById("tempatlahir").value;
            const tanggallahir = document.getElementById("tanggallahir").value;
            const alamat = document.getElementById("alamat").value;


            // Pastikan formulir diisi
            if (!nama || !email || !telepon || !agama || !tempatlahir || !tanggallahir || !alamat) {
                alert("Semua kolom harus diisi!");
                return false;
            }

            // Membuat pesan yang akan dikirim ke WhatsApp
            const pesan =
                `Silahkan isi formulir pendaftaran untuk pelatihan / kursus di LPK "Mutiara Jaya" dan pastikan data yang anda masukkan benar...\n\nNama: ${nama}\nEmail: ${email}\nTelepon: ${telepon}\nAgama ${agama}\nTempatlahir: ${tempatlahir}\nTanggallahir: ${tanggallahir}\nAlamat: ${alamat}`;

            // URL WhatsApp API dengan pesan yang ter-encode
            const url = `https://wa.me/6281297613997?text=${encodeURIComponent(pesan)}`;

            // Arahkan pengguna ke URL WhatsApp
            window.open(url, "_blank");
            return false; // Mencegah pengiriman formulir standar
        }
    </script>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div style="text-align: justify" class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Pendaftaran</p>
                    <h1 class="mb-4">Daftarkan diri Anda segera di LPK "MUTIARA JAYA"</h1>
                    <p style="text-indent: 30px" class="mb-4">Bergabunglah bersama kami dan belajar di LPK "Mutiara
                        Jaya" dan Tingkatkan keahlianmu. Miliki keterampilan yang luar biasa agar menjadi seorang yang
                        mumpuni agar bisa berwirausaha mandiri serta mampu bersaing di dunia kerja maupun industri.</p>
                    <div class="bg-light rounded d-flex align-items-center p-5 mb-4">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                            style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Call Us Now</p>
                            <h5 class="mb-0">+62 878 8198 6716</h5>
                        </div>
                    </div>
                    <div class="bg-light rounded d-flex align-items-center p-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                            style="width: 55px; height: 55px;">
                            <i class="fa fa-envelope-open text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Mail Us Now</p>
                            <h5 class="mb-0">lpkmutiarajaya@gmail.com</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light rounded h-100 d-flex align-items-center p-5">
                        <form onsubmit="return kirimKeWhatsApp()">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <label for="nama" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label for="telepon" class="form-label">Nomor Telepon</label>
                                    <input type="tel" class="form-control" id="telepon" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label for="agama" class="form-label">Agama</label>
                                    <select class="form-control" id="agama" required>
                                        <option value="">Pilih Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Kristen Katolik">Kristen Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label for="tempatlahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempatlahir" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggallahir" required>
                                </div>
                                <div class="col-12">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea class="form-control" id="alamat" rows="3" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-50 py-3 mt-4"
                                        type="submit"><strong>Daftar</strong></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pendaftaran End -->
    <!-- Script untuk Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>



    <!-- Testimonial Start -->
    <!--<div class="container-xxl py-5">
                                                                        <div class="container">
                                                                            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                                                                                <p class="d-inline-block border rounded-pill py-1 px-4">Testimonial</p>
                                                                                <h1>Ulasan serta kata-kata dari para Alumni LPK "Mutiara Jaya" </h1>
                                                                            </div>
                                                                            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                                                                                <div class="testimonial-item text-center">
                                                                                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-1.jpg" style="width: 100px; height: 100px;">
                                                                                    <div class="testimonial-text rounded text-center p-4">
                                                                                        <p>"Setiap potongan kain adalah kanvas kosongmu. Luangkan waktu untuk mengekspresikan kreativitasmu melalui setiap jahitan."</p>
                                                                                        <h5 class="mb-1">Miladya Nur Berlian</h5>
                                                                                        <span class="fst-italic">Alumni 2023</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="testimonial-item text-center">
                                                                                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-2.jpg" style="width: 100px; height: 100px;">
                                                                                    <div class="testimonial-text rounded text-center p-4">
                                                                                        <p>"Detil adalah yang membedakan penjahit ulung. Jahitanmu adalah tanda tangan yang mengisyaratkan kualitas kerjamu."</p>
                                                                                        <h5 class="mb-1">Mz_AuL</h5>
                                                                                        <span class="fst-italic">Alumni 2022</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="testimonial-item text-center">
                                                                                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-3.jpg" style="width: 100px; height: 100px;">
                                                                                    <div class="testimonial-text rounded text-center p-4">
                                                                                        <p>"Jangan takut mencoba pola baru atau bahan yang belum pernah digunakan sebelumnya. Inovasi adalah kunci untuk pertumbuhan."</p>
                                                                                        <h5 class="mb-1">Maryoso</h5>
                                                                                        <span class="fst-italic">Alumni 2021</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Testimonial End -->
@endsection
