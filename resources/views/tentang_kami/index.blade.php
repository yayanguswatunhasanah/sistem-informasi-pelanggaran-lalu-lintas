@extends('layouts.frontend')

@section('content')
<style>
    /* .header {
        background-color: var(--body-color);
        -webkit-box-shadow: 0 1px 4px rgba(37, 37, 40, 0.1);
        box-shadow: 0 1px 4px rgba(37, 37, 40, 0.1);
    }

    .header .nav__logo {
        color: var(--first-color);
    }

    .header .change-theme {
        color: var(--title-color);
    }

    .header .nav__link,
    .header .change-theme {
        color: var(--text-color);
    }

    .header .active-link {
        color: var(--first-color);
    } */

    #blog {
        padding-bottom: 0;
    }

    .footer {
        padding-bottom: 0;
        padding-top: 0;
    }

    .footer__info {
        margin-top: 3%;
    }

    .alert-danger {
        margin-top: 2%;
        background: #f83e3e;
        text-align: center;
        padding-top: 10px;
        padding-bottom: 10px;
        color: white;
    }

    .alert-success {
        margin-top: 2%;
        background: #22A699;
        text-align: center;
        padding-top: 10px;
        padding-bottom: 10px;
        color: white;
    }

    .container2 {
        max-width: 768px !important;
    }

    .tentang-kami .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .tentang-kami .row {
        flex: 1;
        display: flex;
        justify-content: space-between;
    }

    .tentang-kami .col-lg-5,
    .tentang-kami .col-lg-7,
    .tentang-kami .col-md-6 {
        flex: 1;
        margin: 10px; /* Adjust margin as needed */
    }

    .tentang-kami .about-img img {
        width: 75%;
        height: auto;
    }

    .tentang-kami .about-content {
        max-width: 600px; /* Adjust max-width as needed */
    }
</style>

<!--==================== HOME ====================-->
<section>
    <div class="swiper-container gallery-top">
        <div class="swiper-wrapper">
            <section class="islands swiper-slide">
                <img src="{{ asset('frontend/assets/img/hero-index.jpg') }}" alt="" class="islands__bg" />
                <div class="bg__overlay">
                    <div class="islands__container container">
                        <div class="islands__data">
                            <h1 class="islands__title">Tentang Kami</h1>
                            <h2 class="islands__subtitle">Sistem Informasi Pelanggaran Lalu Lintas</h2>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<!--==================== POPULAR ====================-->
<section class="section" id="popular" style="padding-top: 4rem; padding-bottom: 4rem;">
    <div class="tentang-kami">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-5 col-md-6" style="align-self: center;">
                    <div class="about-img aos-init aos-animate" data-aos="fade-right" data-aos-delay="100" style="text-align: center;">
                        <img src="{{ asset('frontend/assets/img/tentang-kami.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="about-content aos-init aos-animate" data-aos="fade-left" data-aos-delay="100">
                        <h2>Sistem Informasi Pelanggaran Lalu Lintas</h2>
                        <p style="margin-top: 4%;"> Sistem Informasi Pelanggaran Lalu Lintas adalah inovasi terkini yang memiliki tujuan utama untuk meningkatkan pengawasan dan pengelolaan pelanggaran lalu lintas dalam suatu area tertentu.</p>
                        <p style="margin-top: 4%;">Melalui pemanfaatan teknologi tinggi, sistem ini secara efisien merekam dan menganalisis berbagai jenis pelanggaran, termasuk pelanggaran kecepatan, pelanggaran lampu merah, dan lainnya.</p>
                        <p style="margin-top: 4%;">Informasi yang terkumpul dari sistem ini tidak hanya memberikan data tentang jenis pelanggaran, tetapi juga mencakup detail lokasi, waktu, dan pola pelanggaran, membantu pihak berwenang dalam mengambil langkah-langkah penegakan hukum yang lebih cerdas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==================== POPULAR ====================-->
<section class="section" id="popular" style="padding-top: 4rem; padding-bottom: 4rem; background: wheat;">
    <div class="tentang-kami">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <div class="about-content aos-init aos-animate" data-aos="fade-left" data-aos-delay="100">
                        <h2>Sistem ini tidak hanya...</h2>
                        <p style="margin-top: 4%;">Sistem ini tidak hanya memberikan manfaat bagi penegakan hukum, tetapi juga berperan dalam kampanye keselamatan jalan dan pengelolaan lalu lintas yang lebih efektif.</p>
                        <p style="margin-top: 4%;">Dengan memanfaatkan analisis data yang canggih, pihak berwenang dapat mengidentifikasi area rawan pelanggaran, mengembangkan strategi pencegahan, dan meningkatkan keamanan jalan.</p>
                        <p style="margin-top: 4%;">Dengan demikian, Sistem Informasi Pelanggaran Lalu Lintas tidak hanya menjadi alat untuk menegakkan aturan, tetapi juga menjadi aspek integral dalam usaha menciptakan lingkungan lalu lintas yang lebih aman, teratur, dan efisien.</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6" style="align-self: center;">
                    <div class="about-img aos-init aos-animate" data-aos="fade-right" data-aos-delay="100" style="text-align: center;">
                        <img src="{{ asset('frontend/assets/img/tentang-kami-2.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==================== HOME ====================-->
<section class="islands" style="height: 50vh;">
    <img src="{{ asset('frontend/assets/img/hero-tentang-kami.jpg') }}?refresh=true" alt="" class="islands__bg" />
    <div class="bg__overlay" style="background: #094e293d;">
        <div class="islands__container container">
            <div class="islands__data" style="z-index: 99; position: relative">
                <h1 class="islands__title" style="font-size: 3.5rem;">
                    Anda Memiliki Pertanyaan?<br />Silahkan Hubungi Kami
                </h1>
                <p class="islands__description" style="margin-top: 3%;">
                    <center><a href="{{ route('hubungi_kami.index') }}" class="button" style="width: 30%; background: white; color: black;">Hubungi Kami</a></center>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection