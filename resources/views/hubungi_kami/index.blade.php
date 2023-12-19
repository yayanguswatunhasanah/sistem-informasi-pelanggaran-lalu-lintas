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
                            <h1 class="islands__title">Hubungi Kami</h1>
                            <h2 class="islands__subtitle">Sistem Informasi Pelanggaran Lalu Lintas</h2>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<!--==================== POPULAR ====================-->
<section class="section" id="popular" style="padding-top: 2.5rem; padding-bottom: 2.5rem;">
    <div class="container container2">
        <span class="section__subtitle" style="text-align: center">Silahkan Isi</span>
        <h2 class="section__title" style="text-align: center">
            Form Dibawah Ini
        </h2>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul style="padding: 0; margin: 0;">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <div class="card">
            <form action="{{ route('hubungi_kami.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                
                <label>Nama Lengkap</label>
                <input style="margin-top: 1%;" required type="text" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" />
                
                <label>Email</label>
                <input style="margin-top: 1%;" required type="text" name="email" placeholder="Masukkan Email" />
                
                <label>Subjek</label>
                <input style="margin-top: 1%;" required type="text" name="subjek" placeholder="Masukkan Subjek" />

                <label>Pesan</label>
                <input style="margin-top: 1%;" required type="text" name="pesan" placeholder="Masukkan Pesan" />
                
                <button type="submit" class="button button-booking">Kirim</button>
            </form>
        </div>
    </div>
</section>
@endsection