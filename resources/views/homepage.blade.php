@extends('layouts.frontend')

@section('content')
<!--==================== HOME ====================-->
<section>
    <div class="swiper-container">
        <div>
            <!--========== ISLANDS 1 ==========-->
            <section class="islands">
                <img src="{{ asset('frontend/assets/img/hero-index.jpg') }}?refresh=true" alt="" class="islands__bg" />
                <div class="bg__overlay">
                    <div class="islands__container container">
                        <div class="islands__data" style="z-index: 99; position: relative">
                            <h1 class="islands__title" style="font-size: 3.5rem;">
                                Selamat Datang!<br />di Sistem Informasi<br />Pelanggaran Lalu Lintas
                            </h1>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
@endsection