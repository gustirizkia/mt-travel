@extends('layouts.front')

@section('title')
    Detail
@endsection

@push('addStyle')
    <link rel="stylesheet" href="{{ asset('assets/detail.css') }}">
    <link rel="stylesheet" href="{{ asset('libraries/xzoom/dist/xzoom.css') }}" />

@endpush

@section('content')

    <div class="header">

    </div>

    <div class="section-details-content">
        <div class="container">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active" aria-current="page">Pantai Anyer</li>
            </ol>
            </nav>

            <div class="row mb-5">
                <div class="col-lg-8">
                    <div class="card card-details">
                        <div class="card-body">
                            <h1 class="">Pantai Anyer</h1>
                            <p>Jl. Raya Anyer-Sirih, Sindanglaya, Serang, Kabupaten Serang, Banten 42167</p>

                            <img  id="xzoom-default" src="https://anekatempatwisata.com/wp-content/uploads/2020/04/1-9-Wisata-Pantai-di-Anyer-yang-Wajib-Dikunjungi-Wisatawan-Don%E2%80%99t-Miss-It-1.jpg" class="img-fluid xzoom" alt="">
                            <div class="gallery">
                                <img  src="https://anekatempatwisata.com/wp-content/uploads/2020/04/1-9-Wisata-Pantai-di-Anyer-yang-Wajib-Dikunjungi-Wisatawan-Don%E2%80%99t-Miss-It-1.jpg" class="xzoom-gallery img__gallery" alt="">
                                @for ($i = 0; $i < 10; $i++)
                                    <img src="http://www.pegipegi.com/travel/wp-content/uploads/2015/04/Pantai-Anyer-1.jpg" class="img__gallery xzoom-gallery" alt="">
                                @endfor
                            </div>
                            <h2 class="mt-3">Tentang Wisata</h2>
                            <p>
                            Nusa Penida is an island southeast of Indonesia’s island
                            Bali and a district of Klungkung Regency that includes the
                            neighbouring small island of Nusa Lembongan. The Badung
                            Strait separates the island and Bali. The interior of Nusa
                            Penida is hilly with a maximum altitude of 524 metres. It is
                            drier than the nearby island of Bali.
                            </p>
                            <p>
                            Bali and a district of Klungkung Regency that includes the
                            neighbouring small island of Nusa Lembongan. The Badung
                            Strait separates the island and Bali.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31735.935294952204!2d105.84697646810689!3d-6.131788065851875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4180d0aa3fb905%3A0xa36c9f30e6101d78!2sPantai%20Florida%202%20Anyer!5e0!3m2!1sid!2sid!4v1677352714999!5m2!1sid!2sid" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('addScript')
    {{-- <script src="{{ asset('libraries/retina/retina.js') }}"></script> --}}
    <script src="{{ asset('libraries/jquery/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('libraries/xzoom/dist/xzoom.min.js') }}"></script>
    <script>
      $(document).ready(function() {
        $('.xzoom, .xzoom-gallery').xzoom({
          zoomWidth: 500,
          title: false,
          tint: '#333',
          Xoffset: 15
        });
      });
    </script>
@endpush
