<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LPK Mutiara Jaya</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">


    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">


</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-envelope text-primary me-2"></small>
                    <small>lpkmutiarajaya@gmail.com</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Senin - Jum'at : 08:00 - 16:00</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+62 878 8198 6716</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1"
                        href="https://www.facebook.com/lpkmutiarajaya"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1"
                        href="https://www.twitter.com/lpkmutiarajaya"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1"
                        href="https://wa.me/+6287881986716"><i class="fab fa-whatsapp"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-0"
                        href="https://www.instagram.com/lpkmutiarajaya"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
        <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5"><img src="img/favicon.ico"
                alt="">
            <h1 class="m-0 text-primary" style="text-indent: 10px"><strong>Mutiara Jaya</strong></h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/"
                    class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}"><strong>Home</strong></a>
                <a href="/about"
                    class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}"><strong>About</strong></a>
                <a href="/service"
                    class="nav-item nav-link {{ Request::is('service') ? 'active' : '' }}"><strong>Service</strong></a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ Request::is('pages*') ? 'active' : '' }}"
                        data-bs-toggle="dropdown"><strong>Pages</strong></a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="/pages/programpelatihan" class="dropdown-item"><strong>Program Pelatihan</strong></a>
                        <a href="/pages/instruktur" class="dropdown-item"><strong>Instruktur</strong></a>
                        <a href="/pages/pendaftaran" class="dropdown-item"><strong>Pendaftaran</strong></a>
                        <a href="/pages/testimonials" class="dropdown-item"><strong>Testimonials</strong></a>
                    </div>
                </div>
                <a href="/contact"
                    class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}"><strong>Contact</strong></a>
            </div>
            <a href="/welcome"
                class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block"><strong>DAFTAR</strong></a>
        </div>
    </nav>
    <!-- Navbar End -->








    @yield('body')


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Banjaran, Taman, Pemalang</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 878 8198 6716</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>lpkmutiarajaya@gmail.com</p>

                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Services</h5>
                    <a class="btn btn-link" href="">Tata Busana</a>
                    <a class="btn btn-link" href="">Garment</a>
                    <a class="btn btn-link" href="">Design</a>
                    <a class="btn btn-link" href="">Fashion</a>
                    <a class="btn btn-link" href="">Gallery</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="/about">About Us</a>
                    <a class="btn btn-link" href="/contact">Contact Us</a>
                    <a class="btn btn-link" href="/service">Our Services</a>
                    <a class="btn btn-link"
                        href="https://kelembagaan.kemnaker.go.id/home/companies/57400091-9155-4715-bc35-300184c4d6a2/profiles">Terms
                        & Condition</a>
                    <a class="btn btn-link" href="https://www.facebook.com/lpkmutiarajaya">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Moodtivation</h5>
                    <p>"Tetaplah kreatif, teruslah aktif. Hidup indah dengan berkarya."</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social rounded-circle"
                                href="https://www.twitter.com/lpkmutiarajaya"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social rounded-circle"
                                href="https://www.facebook.com/lpkmutiarajaya"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social rounded-circle"
                                href="https://www.instagram.com/lpkmutiarajaya"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social rounded-circle"
                                href="https://wa.me/+6287881986716"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        2024 &copy; <a
                            href="https://kelembagaan.kemnaker.go.id/home/companies/57400091-9155-4715-bc35-300184c4d6a2/profiles">Lpk
                            Mutiara Jaya</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <a
                            href="https://moonnearoey.github.io/misbahul_munir/?fbclid=PAZXh0bgNhZW0CMTEAAaZ2pDMRmpc3J4vQA1ogvaun8VeE8gCRs5wbxzpd5FjgkvkhqRZyO4wl4Jk_aem_9jvGk1cgDqGw--skAL3qOg">@msbahulmnr</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/wow/wow.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/waypoints/waypoints.min.js"></script>
    <script src="/lib/counterup/counterup.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/lib/tempusdominus/js/moment.min.js"></script>
    <script src="/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="/js/main.js"></script>
    <!--<script src="{{ asset('sipenmaru/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('sipenmaru/vendor/login/appjs') }}"></script>
    <script src="{{ asset('sipenmaru/js/custom.min.js') }}"></script>
    <script src="{{ asset('sipenmaru/js/dlabnav-init.js') }}"></script>-->
    <script src="{{ asset('sipenmaru/js/styleSwitcher.js') }}"></script>
    <script src="{{ asset('sipenmaru/vendor/login/app.js') }}"></script>
    <!--Start of Tawk.to Script-->


</body>

</html>
