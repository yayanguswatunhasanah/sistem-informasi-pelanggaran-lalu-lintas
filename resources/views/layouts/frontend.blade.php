<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=============== BOXICONS ===============-->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/libraries/swiper-bundle.min.css') }}" />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
    @stack('style-alt')
    <title>Sistem Informasi Pelaggaran Lalu Lintas</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="{{ route('homepage') }}" class="nav__logo">SIP Lalu Lintas</a>

            <div class="nav__menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="{{ route('homepage') }}" class="nav__link ">
                            <i class="bx bx-home-alt"></i>
                            <span>Beranda</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="{{ route('form_pelanggaran.index') }}" class="nav__link">
                            <i class="bx bx-award"></i>
                            <span>Form Pelanggaran</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="{{ route('tentang_kami.index') }}" class="nav__link">
                            <i class="bx bx-building-house"></i>
                            <span>Tentang Kami</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="{{ route('hubungi_kami.index') }}" class="nav__link">
                            <i class="bx bx-building-house"></i>
                            <span>Hubungi Kami</span>
                        </a>
                    </li>
                    <!-- <li class="nav__item">
                        <a href="{{ route('login') }}" class="nav__link">
                            <i class="bx bx-building-house"></i>
                            <span>Login</span>
                        </a>
                    </li> -->
                </ul>
            </div>

            <!-- theme -->
            <i class="bx bx-moon change-theme" id="theme-button"></i>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        @yield('content')
    </main>

    <!--==================== FOOTER ====================-->
    <!-- <footer class="footer section">
        <div class="footer__info container">
            <span class="footer__copy">
                &#169; 2023 Sistem Klasifikasi Penerima Bantuan Dana Desa Desa Penedagandor
            </span>
        </div>
    </footer> -->

    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="bx bx-chevrons-up"></i>
    </a>

    <!--=============== SCROLLREVEAL ===============-->
    <script src="{{ asset('frontend/assets/libraries/scrollreveal.min.js') }}"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="{{ asset('frontend/assets/libraries/swiper-bundle.min.js') }}"></script>

    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    @stack('script-alt')
</body>

</html>