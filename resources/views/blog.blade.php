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
    <section class="content-inner position-relative">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 m-b30">
                    <div class="dz-card style-1 overlay-shine wow fadeInUp" data-wow-delay="1.0s">
                        <div class="dz-media">
                            <a href="blog-details.html"><img src="assets/images/blog/pic1.jpg" alt=""></a>
                            <span class="date"><a href="javascript:void(0)">14 Feb 2012</a></span>
                        </div>
                        <div class="dz-info">
                            <div class="dz-meta">
                                <ul>
                                    <li class="post-author text-primary">
                                        <span>
                                            <i class="fa-solid fa-user"></i>
                                        </span>
                                        By Kk Sharma
                                    </li>
                                    <li class="post-date text-primary">
                                        <span>
                                            <i class="fa-solid fa-message"></i>
                                        </span>
                                        24 Comments
                                    </li>
                                </ul>
                            </div>
                            <h4 class="dz-title"><a href="blog-details.html">How to convince recruiters and get your
                                    dream</a></h4>
                            <p>A wonderful serenity has taken of my entire soul, like these.</p>
                            <a href="blog-details.html" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 m-b30">
                    <div class="dz-card style-1 overlay-shine wow fadeInUp" data-wow-delay="1.2s">
                        <div class="dz-media">
                            <a href="blog-details.html"><img src="assets/images/blog/pic2.jpg" alt=""></a>
                            <span class="date"><a href="javascript:void(0)">18 Jun 2020</a></span>
                        </div>
                        <div class="dz-info">
                            <div class="dz-meta">
                                <ul>
                                    <li class="post-author text-primary">
                                        <span>
                                            <i class="fa-solid fa-user"></i>
                                        </span>
                                        By Kk Sharma
                                    </li>
                                    <li class="post-date text-primary">
                                        <span>
                                            <i class="fa-solid fa-message"></i>
                                        </span>
                                        24 Comments
                                    </li>
                                </ul>
                            </div>
                            <h4 class="dz-title"><a href="blog-details.html">5 things to know about the March 2022</a></h4>
                            <p>A wonderful serenity has taken of my entire soul, like these.</p>
                            <a href="blog-details.html" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 m-b30">
                    <div class="dz-card style-1 overlay-shine wow fadeInUp" data-wow-delay="1.4s">
                        <div class="dz-media">
                            <a href="blog-details.html"><img src="assets/images/blog/pic3.jpg" alt=""></a>
                            <span class="date"><a href="javascript:void(0)">22 Aug 2018</a></span>
                        </div>
                        <div class="dz-info">
                            <div class="dz-meta">
                                <ul>
                                    <li class="post-author text-primary">
                                        <span>
                                            <i class="fa-solid fa-user"></i>
                                        </span>
                                        By Kk Sharma
                                    </li>
                                    <li class="post-date text-primary">
                                        <span>
                                            <i class="fa-solid fa-message"></i>
                                        </span>
                                        24 Comments
                                    </li>
                                </ul>
                            </div>
                            <h4 class="dz-title"><a href="blog-details.html">Job Board is the most important sector in</a>
                            </h4>
                            <p>A wonderful serenity has taken of my entire soul, like these.</p>
                            <a href="blog-details.html" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 m-b30">
                    <div class="dz-card style-1 overlay-shine wow fadeInUp" data-wow-delay="0.6s">
                        <div class="dz-media">
                            <a href="blog-details.html"><img src="assets/images/blog/pic4.jpg" alt=""></a>
                            <span class="date"><a href="javascript:void(0)">25 Sep 2015</a></span>
                        </div>
                        <div class="dz-info">
                            <div class="dz-meta">
                                <ul>
                                    <li class="post-author text-primary">
                                        <span>
                                            <i class="fa-solid fa-user"></i>
                                        </span>
                                        By Kk Sharma
                                    </li>
                                    <li class="post-date text-primary">
                                        <span>
                                            <i class="fa-solid fa-message"></i>
                                        </span>
                                        24 Comments
                                    </li>
                                </ul>
                            </div>
                            <h4 class="dz-title"><a href="blog-details.html"> These Bizarre Truths Behind Job.</a></h4>
                            <p>A wonderful serenity has taken of my entire soul, like these.</p>
                            <a href="blog-details.html" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 m-b30">
                    <div class="dz-card style-1 overlay-shine wow fadeInUp" data-wow-delay="0.8s">
                        <div class="dz-media">
                            <a href="blog-details.html"><img src="assets/images/blog/pic5.jpg" alt=""></a>
                            <span class="date"><a href="javascript:void(0)">26 May 2012</a></span>
                        </div>
                        <div class="dz-info">
                            <div class="dz-meta">
                                <ul>
                                    <li class="post-author text-primary">
                                        <span>
                                            <i class="fa-solid fa-user"></i>
                                        </span>
                                        By Kk Sharma
                                    </li>
                                    <li class="post-date text-primary">
                                        <span>
                                            <i class="fa-solid fa-message"></i>
                                        </span>
                                        24 Comments
                                    </li>
                                </ul>
                            </div>
                            <h4 class="dz-title"><a href="blog-details.html"> Jobs You Should Answer Truthfully.</a></h4>
                            <p>A wonderful serenity has taken of my entire soul, like these.</p>
                            <a href="blog-details.html" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 m-b30">
                    <div class="dz-card style-1 overlay-shine wow fadeInUp" data-wow-delay="1.0s">
                        <div class="dz-media">
                            <a href="blog-details.html"><img src="assets/images/blog/pic6.jpg" alt=""></a>
                            <span class="date"><a href="javascript:void(0)">18 Mar 2010</a></span>
                        </div>
                        <div class="dz-info">
                            <div class="dz-meta">
                                <ul>
                                    <li class="post-author text-primary">
                                        <span>
                                            <i class="fa-solid fa-user"></i>
                                        </span>
                                        By Kk Sharma
                                    </li>
                                    <li class="post-date text-primary">
                                        <span>
                                            <i class="fa-solid fa-message"></i>
                                        </span>
                                        24 Comments
                                    </li>
                                </ul>
                            </div>
                            <h4 class="dz-title"><a href="blog-details.html">5 Reasons Why You Should Invest In Jobs.</a>
                            </h4>
                            <p>A wonderful serenity has taken of my entire soul, like these.</p>
                            <a href="blog-details.html" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 m-b30 m-t30 m-lg-t10">
                    <nav aria-label="Blog Pagination">
                        <ul class="text-center pagination style-1 wow fadeInUp" data-wow-delay="0.8s">
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
