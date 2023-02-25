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
