<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="LPK Mutiara Jaya">
    <meta property="og:title" content="LPK Mutiara Jaya">
    <meta property="og:description" content="LPK MUtiara Jaya">

    <!-- PAGE TITLE HERE -->
    <title>Masuk dan Daftar | LPK "Mutiara Jaya"</title>
    <!--<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('sipenmaru/images/LPKMJ.png') }}">
    <link href="{{ asset('sipenmaru/vendor/login/style.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body>
    @include('sweetalert::alert')
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form method="POST" action="/login" class="sign-in-form">
                    {{ csrf_field() }}
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            <svg viewbox="0 -6 24 24" width="24" height="24" stroke="currentColor"
                                stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                class="me-2">
                                <polygon
                                    points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                                </polygon>
                                <line x1="15" y1="9" x2="9" y2="15"></line>
                                <line x1="9" y1="9" x2="15" y2="15"></line>
                            </svg>
                            <strong>Sukses!</strong> {{ $message }}
                        </div>
                    @endif
                    @if ($message = Session::get('errorregist'))
                        <div class="alert alert-danger alert-dismissible fade show">
                            <svg viewbox="0 -6 24 24" width="24" height="24" stroke="currentColor"
                                stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                class="me-2">
                                <polygon
                                    points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                                </polygon>
                                <line x1="15" y1="9" x2="9" y2="15"></line>
                                <line x1="9" y1="9" x2="15" y2="15"></line>
                            </svg>
                            <strong>Gagal!</strong> {{ $message }}
                        </div>
                    @endif
                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show">
                            <svg viewbox="0 -6 24 24" width="24" height="24" stroke="currentColor"
                                stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                class="me-2">
                                <polygon
                                    points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                                </polygon>
                                <line x1="15" y1="9" x2="9" y2="15"></line>
                                <line x1="9" y1="9" x2="15" y2="15"></line>
                            </svg>
                            <strong>Peringatan!</strong> {{ session('loginError') }}
                        </div>
                    @endif
                    @error('email')
                        <div class="alert alert-warning alert-dismissible fade show">
                            <svg viewbox="0 -6 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                                <path
                                    d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                                </path>
                                <line x1="12" y1="9" x2="12" y2="13"></line>
                                <line x1="12" y1="17" x2="12.01" y2="17"></line>
                            </svg>
                            <strong>Peringatan!</strong> {{ $message }}
                        </div>
                    @enderror
                    @error('password')
                        <div class="alert alert-warning alert-dismissible fade show">
                            <svg viewbox="0 -6 24 24" width="24" height="24" stroke="currentColor"
                                stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                class="me-2">
                                <path
                                    d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                                </path>
                                <line x1="12" y1="9" x2="12" y2="13"></line>
                                <line x1="12" y1="17" x2="12.01" y2="17"></line>
                            </svg>
                            <strong>Peringatan!</strong> {{ $message }}
                        </div>
                    @enderror
                    <div class="social-media">
                        <a href="/" class="social-icon">
                            <i class="fa fa-home"></i>
                        </a>
                        <a href="https://www.facebook.com/lpkmutiarajaya" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/lpkmutiarajaya" class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.twitter.com/lpkmutiarajaya" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://kelembagaan.kemnaker.go.id/home/companies/57400091-9155-4715-bc35-300184c4d6a2/profiles"
                            class="social-icon">
                            <i class="fas fa-globe"></i>
                        </a>
                    </div><br>
                    <hr>
                    <h2 class="title">Join Us!</h2>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Masukkan email" name="email" value="admin@gmail.com"
                            autocomplete='off' />

                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Masukkan kata sandi" name="password" value="12345678"
                            autocomplete='off' />

                    </div>
                    <input type="submit" value="MASUK" class="btn solid" />


                </form>


                <form method="POST" action="/register" class="sign-up-form">
                    @csrf
                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show">
                            <svg viewbox="0 -6 24 24" width="24" height="24" stroke="currentColor"
                                stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                class="me-2">
                                <polygon
                                    points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                                </polygon>
                                <line x1="15" y1="9" x2="9" y2="15"></line>
                                <line x1="9" y1="9" x2="15" y2="15"></line>
                            </svg>
                            <strong>Peringatan!</strong> {{ session('loginError') }}
                        </div>
                    @endif
                    @error('name')
                        <div class="alert alert-warning alert-dismissible fade show">
                            <svg viewbox="0 -6 24 24" width="24" height="24" stroke="currentColor"
                                stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                class="me-2">
                                <path
                                    d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                                </path>
                                <line x1="12" y1="9" x2="12" y2="13"></line>
                                <line x1="12" y1="17" x2="12.01" y2="17"></line>
                            </svg>
                            <strong>Peringatan!</strong> {{ $message }}
                        </div>
                    @enderror
                    @error('email')
                        <div class="alert alert-warning alert-dismissible fade show">
                            <svg viewbox="0 -6 24 24" width="24" height="24" stroke="currentColor"
                                stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                class="me-2">
                                <path
                                    d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                                </path>
                                <line x1="12" y1="9" x2="12" y2="13"></line>
                                <line x1="12" y1="17" x2="12.01" y2="17"></line>
                            </svg>
                            <strong>Peringatan!</strong> {{ $message }}
                        </div>
                    @enderror
                    @error('password')
                        <div class="alert alert-warning alert-dismissible fade show">
                            <svg viewbox="0 -6 24 24" width="24" height="24" stroke="currentColor"
                                stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                class="me-2">
                                <path
                                    d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                                </path>
                                <line x1="12" y1="9" x2="12" y2="13"></line>
                                <line x1="12" y1="17" x2="12.01" y2="17"></line>
                            </svg>
                            <strong>Peringatan!</strong> {{ $message }}
                        </div>
                    @enderror
                    @error('password_confirmation')
                        <div class="alert alert-warning alert-dismissible fade show">
                            <svg viewbox="0 -6 24 24" width="24" height="24" stroke="currentColor"
                                stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                class="me-2">
                                <path
                                    d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                                </path>
                                <line x1="12" y1="9" x2="12" y2="13"></line>
                                <line x1="12" y1="17" x2="12.01" y2="17"></line>
                            </svg>
                            <strong>Peringatan!</strong> {{ $message }}
                        </div>
                    @enderror
                    <h2 class="title">Daftar</h2>
                    <br>
                    <center>
                        <p>Daftar sekarang di <a href="https://maps.app.goo.gl/BT9of1AF5V5ZMHe89"
                                title='LPK "Mutiara Jaya"' target='_blank'>LPK "Mutiara Jaya"</a></p>
                    </center>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nama Lengkap" name="name" value="{{ old('name') }}"
                            autocomplete='off' />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email" value="{{ old('email') }}"
                            autocomplete='off' />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Kata Sandi" name="password" autocomplete='off' />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Ulangi Kata Sandi" name="password_confirmation"
                            autocomplete='off' />
                    </div>
                    <input type="submit" class="btn" value="DAFTAR" />

                    <br>
                    <hr>
                    <div class="social-media">
                        <a href="/" class="social-icon">
                            <i class="fa fa-home"></i>
                        </a>
                        <a href="https://www.facebook.com/lpkmutiarajaya" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/lpkmutiarajaya" class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.twitter.com/lpkmutiarajaya" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://kelembagaan.kemnaker.go.id/home/companies/57400091-9155-4715-bc35-300184c4d6a2/profiles"
                            class="social-icon">
                            <i class="fas fa-globe"></i>
                        </a>
                    </div>
                </form>


            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Baru disini ?</h3>
                    <p>
                        Silahkan daftar akun untuk melanjutkan proses pendaftaran peserta pelatihan atau kursus baru !
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        DAFTAR
                    </button>
                </div>
                <img src="{{ asset('sipenmaru/images/beranda.png') }}" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Sudah punya akun ?</h3>
                    <p>
                        Silahkan masuk jika anda telah memiliki akun peserta pelatihan atau kursus di LPK "Mutiara
                        Jaya".
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Masuk
                    </button>
                </div>
                <img src="{{ asset('sipenmaru/images/register.svg') }}" class="image" alt="" />
            </div>
        </div>
    </div>
    <!--<script src="{{ asset('sipenmaru/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('sipenmaru/vendor/login/appjs') }}"></script>
    <script src="{{ asset('sipenmaru/js/custom.min.js') }}"></script>
    <script src="{{ asset('sipenmaru/js/dlabnav-init.js') }}"></script>-->
    <script src="{{ asset('sipenmaru/js/styleSwitcher.js') }}"></script>
    <script src="{{ asset('sipenmaru/vendor/login/app.js') }}"></script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/63b42e5047425128790b671c/1glrt9rn5';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

</body>

</html>
