@extends('layout.navbar')
@section('body')
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="h-100 bg-light rounded d-flex align-items-center p-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                            style="width: 55px; height: 55px;">
                            <i class="fa fa-map-marker-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Address</p>
                            <h6 class="mb-0">Jl. Irian Jaya Desa Banjaran RT 04 / RW 03, Kecamatan Taman, Kabupaten
                                Pemalang 52361</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="h-100 bg-light rounded d-flex align-items-center p-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                            style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Call Us Now</p>
                            <h6 class="mb-0">+62 878 8198 6716</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="h-100 bg-light rounded d-flex align-items-center p-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                            style="width: 55px; height: 55px;">
                            <i class="fa fa-envelope-open text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Mail Us Now</p>
                            <h6 class="mb-0">lpkmutiarajaya@gmail.com</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div style="text-align: justify" class="bg-light rounded p-5">
                        <p class="d-inline-block border rounded-pill py-1 px-4">Contact Us</p>
                        <h1 class="mb-4">Ada yang bisa dibantu...</h1>
                        <p class="mb-4" style="text-indent: 30px">Jika ada yang ingin
                            ditanyakan bisa hubungi admin
                            melalui nomor
                            telepon /
                            Whatsapp <a href="https://wa.me/+6287881986716">087881986716</a> atau melalui e-mail <a
                                href="mailto:lpkmutiarajaya@gmail.com">lpkmutiarajaya@gmai.com</a> dan beri ulasan
                            terbaik anda untuk LPK "Mutiara Jaya" dengan mengisi form dibawah
                            ini.
                        </p>
                        <!-- Form untuk menambah ulasan -->
                        <div class="container mt-5">
                            <form action="{{ route('submitTestimonial') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>

                                <div class="mb-3">
                                    <label for="image" class="form-label">Foto</label>
                                    <input type="file" class="form-control" id="image" name="image"
                                        accept="image/*">
                                </div>

                                <div class="mb-3">
                                    <label for="testimonial" class="form-label">Ulasan</label>
                                    <textarea class="form-control" id="testimonial" name="testimonial" rows="4" required></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="graduation_year" class="form-label">Tahun Lulus</label>
                                    <input type="text" class="form-control" id="graduation_year" name="graduation_year"
                                        required>
                                </div>

                                <button type="submit" class="btn btn-primary">Kirim Ulasan</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100" style="min-height: 400px;">
                        <iframe class="rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.812934002611!2d109.41270320969062!3d-6.912956967627396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fdb611a7fd3a1%3A0xf5b366776982836f!2sLPK%20%22MUTIARA%20JAYA%22!5e0!3m2!1sid!2sid!4v1710979351333!5m2!1sid!2sid"
                            frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
