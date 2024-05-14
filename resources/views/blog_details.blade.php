@extends('layouts.website.master')
@section('title')
    Homepage
@endsection
@section('css')
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png">

    <!-- Stylesheet -->
    <link href="{{ asset('assets/vendor/animate/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link class="skin" rel="stylesheet" href="{{ asset('assets/css/skin/skin-1.css') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
@endsection
@section('content')
    <div class="page-content">
        <!-- Banner  -->
        <div class="text-center dz-bnr-inr dz-bnr-inr-sm overlay-primary-dark"
            style="background-image: url(assets/images/banner/bnr3.jpg);">
            <div class="container">
                <div class="dz-bnr-inr-entry">
                    <img width="300px" height="300px" src="{{ asset('storage/' . $blog->img) }}" alt="{{ $blog->title }}">
                    <h1>{{ $blog->title }}</h1>
                    <nav aria-label="breadcrumb" class="breadcrumb-row m-t15">
                        <ul class="breadcrumb">
                            <li class="text-white breadcrumb-item">{{ $blog->description }}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Blog Details -->
        <section class="content-inner position-relative" style="background: white;">
            <div class="container">
                <div class="row ">
                    <div class="col-xl-8 col-lg-8">

                        {!! $blog->content !!}






                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Details -->
    </div>
@endsection

@section('js')
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
    <script src="{{ asset('assets/js/anm.js') }}"></script><!-- JQUERY.MIN JS -->
    <script src="{{ asset('assets/vendor/wow/wow.js') }}"></script><!-- WOW.JS -->
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script><!-- OWL silder -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script><!-- WOW.JS -->
    <script src="{{ asset('assets/vendor/magnific-popup/magnific-popup.js') }}"></script><!-- OWL SLIDER -->
    <script src="{{ asset('assets/js/dz.carousel.js') }}"></script><!-- OWL SLIDER -->
    <script src="{{ asset('assets/js/dz.ajax.js') }}"></script><!-- AJAX -->
    <script src="{{ asset('assets/js/custom.js') }}"></script><!-- CUSTOM JS -->
@endsection
