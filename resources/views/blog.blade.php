@extends('layouts.website.master')
@section('css')
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">

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
        <div class="dz-bnr-inr dz-bnr-inr-sm text-center overlay-primary-dark"
            style="background-image: url(assets/images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dz-bnr-inr-entry">
                    <h1>Blogs Page</h1>
                    <!-- Breadcrumb Row -->
                    <nav aria-label="breadcrumb" class="breadcrumb-row m-t15">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blogs Page</li>
                        </ul>
                    </nav>
                    <!-- Breadcrumb Row End -->
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Blog Grid Starts -->
        <section class="content-inner position-relative">
            <div class="container">
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-xl-4 col-md-6 m-b30">
                            <div class="dz-card style-1 overlay-shine wow fadeInUp" data-wow-delay="1.2s">
                                <div class="dz-media">
                                    <a href="{{ route('blog_details', ['id' => $blog->id]) }}">
                                        <img src="{{ asset('storage/' . $blog->img) }}" alt="{{ $blog->title }}">
                                    </a>
                                    <span class="date"><a
                                            href="javascript:void(0)">{{ $blog->created_at->format('d M Y') }}</a></span>
                                </div>
                                <div class="dz-info">
                                    <div class="dz-meta">
                                        <ul>
                                            <li class="post-author text-primary">
                                                <span>
                                                    <i class="fa-solid fa-user"></i>
                                                </span>
                                                By {{ $blog->author }}
                                            </li>
                                        </ul>
                                    </div>
                                    <h4 class="dz-title">
                                        <a href="{{ route('blog_details', ['id' => $blog->id]) }}">{{ $blog->title }}</a>
                                    </h4>
                                    <p>{{ Str::limit($blog->description, 100) }}</p>
                                    <a href="{{ route('blog_details', ['id' => $blog->id]) }}" class="btn btn-primary">Read
                                        More
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12 m-b30 m-t30 m-lg-t10">
                        <nav aria-label="Blog Pagination">
                            <ul class="pagination style-1 text-center  wow fadeInUp" data-wow-delay="0.8s">
                                <li class="page-item"><a class="page-link prev" href="javascript:void(0);"><i
                                            class="fas fa-chevron-left"></i></a></li>
                                <li class="page-item"><a class="page-link active" href="javascript:void(0);">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                <li class="page-item"><a class="page-link next" href="javascript:void(0);"><i
                                            class="fas fa-chevron-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog grid code starts from here -->

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
