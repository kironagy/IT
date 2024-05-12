@extends('layouts.website.master')
{{-- @section('title_web')
    Homepage
@endsection --}}
@section('css')
    <style>
        #portfolio .list-style{
            display: flex;
            align-items: center;
            list-style: none;
            padding: 0;
            width: 300px;
            justify-content: space-between;

        }

        #portfolio .list-style .list-group-item {
            cursor: pointer;
            border: .1px solid #4885ED;
            width: 56px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 8px;
            position: relative;
            overflow: hidden;
            z-index: 111;
            &::after{
                content: "";
                position: absolute;
                right: 0px;
                top: 0;
                background-color: #4885ED;
                width: 0px;
                height: 30px;
                transition: .8s;
                z-index: -1;
                color:white;
            }
            &::before{
                content: "";
                position: absolute;
                left: 0px;
                top: 0;
                width: 0px;
                height: 30px;
                transition: .8s;
                z-index: -1;
                background-color: #4885ED;

            }
            &:hover{
                border: 1px solid #4885ED;
                color: white;
                &::after{
                    width: 50px;
                }
                &::before{
                    width: 50px;
                }
            }
        }
        #portfolio .filter-items > .products-card.hidden {
            display: none;
        }

        #portfolio .filter-items >.products-card.active {
            display: flex;
            animation: .7s show ease-in-out;
            -webkit-animation: .7s show ease-in-out;
        }

        @keyframes show {
            0% {
                transform: scale(0);
                -webkit-transform: scale(0);
                -moz-transform: scale(0);
                -ms-transform: scale(0);
                -o-transform: scale(0);
            }

            100% {
                transform: scale(1);
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                -o-transform: scale(1);
            }
        }
        .products {
            padding: 20px 0px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .products .container{
            width: 90%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .products h1 {
            font-size: 40px;
            font-family: sans-serif;
            font-weight: 600;
            margin-bottom: 10px;
            text-align: center;
            display: flex;
            align-items: center;
            flex-direction: column;
            gap: 10px;
        }
        .products h1::after {
            content: "";
            height: 3px;
            width: 80px;
            background-color: #4885ED;
            display: block;
        }
        .products .container .products-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 20px;
            padding: 30px 0px;
            width: 100%;
        }
        .products .container .products-cards .products-card {
            height: 350px;
            width: 23%;
            border: 0.1px solid rgba(0, 0, 0, 0.283);
            border-radius: 12px;
            transition: 0.1s;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding-bottom: 10px;
            position: relative;
            overflow: hidden;
            gap: 10px;
            &:hover {
                .btn-card {
                    bottom: 9px !important;
                    opacity: 1;
                }
                .img-card::before {
                    opacity: 1;
                    z-index: -1;
                }
                span{
                    opacity: 0;
                    transition: 1s;
                }
                .img-card .icon-card ul li a {
                    opacity: 1 !important;
                    transform: translateY(-20px);

                }
            }
        }
        .products .container .products-cards .products-card .img-card {
            width: 100%;
            border-radius: 12px 12px 0px 0px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 250px;
            overflow: hidden;
            position: relative;
            transition: 1s;
            &::before {
                content: "";
                position: absolute;
                left: 0;
                right: 0;
                bottom: 0;
                top: 0;
                background-color: rgba(0, 0, 0, 0.2);
                opacity: 0;
                transition: all 0.5s ease-in-out;
                z-index: 1;
            }
        }
        .products .container .products-cards .products-card .img-card img {
            border-radius: 12px 12px 0px 0px;
            width: 100%;
            height: 250px;
            object-fit: contain;
            z-index: -11;
        }
        .products .container .products-cards .products-card .img-card .icon-card {
            position: absolute;
        }
        .products .container .products-cards .products-card .img-card .icon-card ul {
            list-style: none;
            display: flex;
            gap: 10px;
            padding: 0;
        }
        .products
        .container
        .products-cards
        .products-card
        .img-card
        .icon-card
        ul
        li
        a {
            height: 45px;
            width: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: white;
            border-radius: 50%;
            color: black;
            opacity: 0;
            &:hover{
                background-color: #4885ED;
                color: white;
            }
        }
        .products .container .products-cards .products-card h2 {
            margin: 0px;
            font-size: 16px;
            font-family: sans-serif;
            font-weight: 700;
            color: black;
        }
        .products .container .products-cards .products-card .price-card {
            display: flex;
            gap: 5px;
            span {
                &:first-child {
                    color: #4885ED;
                    font-size: 16px;
                    font-family: sans-serif;
                    font-weight: 700;
                }
                &:last-child {
                    font-size: 15px;
                    color: rgba(0, 0, 0, 0.435);
                    text-decoration: line-through;
                }
            }
        }

        .products .container .products-cards .products-card .btn-card {
            width: 60%;
            height: 50px;
            overflow: hidden;
            border-radius: 26px;
            position: absolute;
            bottom: -40px;
            opacity: 0;
            transition: 0.7s;
            font-size: 16px;
            font-weight: 700;
            font-family: sans-serif;
            color: white;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            text-decoration: none;

            &::after{
                content: "";
                position: absolute;
                right: 0px;
                top: 0;
                background-color: #4885ED;
                width: 150px;
                height: 50px;
                transition: .8s;
                z-index: -1;
                color:white;
            }
            &::before{
                content: "";
                position: absolute;
                left: 0px;
                top: 0;
                width: 150px;
                height: 50px;
                transition: .8s;
                z-index: -1;
                background-color: #4885ED;

            }
            &:hover{
                border: 1px solid #4885ED;
                color: #4885ED;
                &::after{
                    width: 0px;

                }
                &::before{
                    width: 0px;
                }
            }
        }
        @media (max-width: 992px){
            .products .container .products-cards .products-card {
                width: 48%;
            }

        }
        @media (max-width: 767px) {
            .products .container .products-cards .products-card {
                width: 48%;
            }

        }
        @media (max-width: 570px) {
            .products .container .products-cards .products-card {
                width: 75%;
            }

        }
        @media (max-width: 490px) {
            .products .container .products-cards .products-card {
                width: 90%;
            }

        }
        @media (max-width: 410px){

        }
        /* ============================================================================================= */
        /* ============================================================================================= */
        .pricing-wrapper {
            padding: 10px;
            box-shadow: 0px 0px 25px rgba(56, 152, 226, 0.3);
            position: relative;
            transition: 0.5s;
            z-index: 1;
        }
        .pricing-wrapper .pricing-inner {
            overflow: hidden;
            height: 400px;
            position: relative;
        }
        .pricing-wrapper .pricing-inner .pricing-title{
            position: absolute;
            z-index: 9;
            bottom: -210px;
            transition: 2s;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 10px;
            width: 100%;
            background: linear-gradient(180deg, hsla(0, 0%, 0%, 0) 0%, hsla(0, 0%, 0%, 0.3) 10%, hsl(0, 0%, 0%) 100%);
        }
        .pricing-wrapper .pricing-inner .pricing-title h3{
            font-size: 25px;
            font-weight: 600;
            color:white;
            margin: 0 ;
        }
        .pricing-wrapper .pricing-inner .pricing-title small{
            width: 0%;
            height: 2px;
            background-color: #00aeff;
            display: block;
            transition: 2s;
            margin: 0;
            opacity: 0;


        }
        .pricing-wrapper .pricing-inner .pricing-title span{
            font-size: 20px;
            font-weight: 400;
            color:white;
            margin: 5px 0px;
            opacity: 0;
            transition: 2s;
        }
        .pricing-wrapper .pricing-inner .pricing-title p{
            font-size: 16px;
            color: white;
            font-weight: 300;
            line-height: 1.1;
            text-align: start;
            margin: 5px 0px;
            opacity: 0;
            transition: 2s;
        }
        .pricing-wrapper .pricing-inner .pricing-title .icon-pricing{
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            margin: 5px 0px;
            width: 100%;
            height: 45px;
            opacity: 0;
            transition: 2s;

        }
        .pricing-wrapper .pricing-inner .pricing-title .icon-pricing a{
            width: 35px;
            height: 35px;
            background-color:white;
            color: black;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 1s;
        }
        .pricing-wrapper .pricing-inner .pricing-title .icon-pricing a:hover{
            background-color: black;
            color: #00aeff;
        }
        .pricing-wrapper .pricing-inner .pricing-title a{
            font-size: 20px;
            font-weight: 300;
            color:white;
            margin: 0px;
            transition: 1s;
            opacity: 0;
        }
        .pricing-wrapper .pricing-inner .pricing-title a:hover{
            text-decoration: underline;
            color: #00aeff;
        }

        .pricing-wrapper .pricing-inner img{
            transition: 1s;
            object-fit: cover;
            height: 400px;
            width: 100%;

        }
        @media only screen and (max-width: 768px){
            .pricing-wrapper .pricing-inner .pricing-title{
                bottom: -190px;
            }
        }
        @media only screen and (max-width: 575px) {
            .pricing-wrapper {
                padding: 5px;
            }
        }

        .pricing-wrapper:hover {
            transform: translateY(-10px);
            img{
                transform: scale(1.2);
            }
            .pricing-title{
                bottom: 0px;
                small{
                    width: 100%;
                    opacity: 1;
                }
                span{
                    opacity: 1;
                }
                p{
                    opacity: 1;
                }
                .icon-pricing{
                    opacity: 1;
                }
                a{
                    opacity: 1;
                }

            }


        }
    </style>
@endsection
@section('content')
    <div class="page-content">

        <section class="content-inner bg-white position-relative">
            <div class="container">
                <div class="row justify-content-center">

                    @isset($teams)
                        @foreach($teams as $team)
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b30">
                                <div class="pricing-wrapper rounded wow fadeInUp" data-wow-delay="1.0s">
                                    <div class="pricing-inner">
                                        <img src="{{asset("storage/$team->img")}}" alt="">
                                        <div class="pricing-title">
                                            <h3>{{$team->name}}</h3>
                                            <small></small>
                                            <span>{{$team->job}}</span>
                                            <small></small>
                                            <p>{{$team->description}}</p>
                                            <small></small>
                                            <div class="icon-pricing">
                                                <a href="{{$team->facebook}}"><i class="fa-brands fa-facebook"></i></a>
                                                <a href="{{$team->message}}"><i class="fa-solid fa-envelope"></i></a>
                                                <a href="{{$team->linkedin}}"><i class="fa-brands fa-linkedin"></i></a>
                                            </div>
                                            <small></small>
                                            <a href="#">more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endisset

                </div>
            </div>
        </section>

        <section class="overflow-hidden content-inner position-relative">
            <div class="container">
                <div class="text-center section-head">
                    <h6 class="text wow fadeInUp" data-wow-delay="0.6s">{{ GetContent('work_description') }}</h6>
                    <h2 class="title wow fadeInUp" data-wow-delay="0.8s">{{ GetContent('work_title') }}</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 m-b30">
                        <div class="icon-bx-wraper style-1 bg-clr-sky wow bounceInLeft" data-wow-delay="1.2s">
                            <div class="icon-media">
                                <img src="assets/images/icon/pic1.png" alt="image" class="rounded">
                            </div>
                            <div class="icon-content">
                                <h4 class="title">Regiter Your Account</h4>
                                <p class="text">There are many variations of passages of Lorem Ipsum available, but
                                    the majority have suffered alteration in</p>
                            </div>
                            <h3 class="count">01</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 m-b30">
                        <div class="icon-bx-wraper style-1 bg-clr-pink wow bounceInUp" data-wow-delay="1.0s">
                            <div class="icon-media">
                                <img src="assets/images/icon/pic2.png" alt="image" class="rounded">
                            </div>
                            <div class="icon-content">
                                <h4 class="title">Apply Your Drem Job</h4>
                                <p class="text">There are many variations of passages of Lorem Ipsum available, but
                                    the majority have suffered alteration in</p>
                            </div>
                            <h3 class="count">02</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 m-b30">
                        <div class="icon-bx-wraper style-1 bg-clr-green wow bounceInRight" data-wow-delay="1.2s">
                            <div class="icon-media">
                                <img src="assets/images/icon/pic3.png" alt="image" class="rounded">
                            </div>
                            <div class="icon-content">
                                <h4 class="title">Upload Your Resume</h4>
                                <p class="text">There are many variations of passages of Lorem Ipsum available, but
                                    the majority have suffered alteration in</p>
                            </div>
                            <h3 class="count">03</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="overflow-hidden content-inner bg-light position-relative">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 m-b30 ">
                        <div class="dz-media style-1">
                            <div class="row">
                                <div class="col-6">

                                    <img src="{{asset("storage/$img1[img_path]")}}" alt="image" class="wow bounceInLeft"
                                         data-wow-delay="0.6s">
                                </div>
                                <div class="col-6">
                                    <img src="{{asset("storage/$img2[img_path]")}}" alt="image" class="wow bounceInLeft"
                                         data-wow-delay="0.4s">
                                </div>
                            </div>
                            <span class="text wow bounceInLeft" data-wow-delay="0.8s">We Need A UI/UX<br>Designer
                                For Our Team</span>
                        </div>
                    </div>
                    <div class="col-lg-6 m-b30">
                        <div class="dz-contant style-1">
                            <div class="section-head">
                                <h6 class="text wow fadeInUp" data-wow-delay="1.0s">Compaines</h6>
                                <h2 class="title wow fadeInUp" data-wow-delay="1.2s">{{ GetContent('Compaines') }}</h2>
                            </div>
                            <a class="btn btn-primary btn-lg wow fadeInUp" data-wow-delay="1.4s"
                               href="javascript:void(0);">{{ GetContent('Compaines_button') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="overflow-hidden content-inner position-relative">
            <div class="container">
                <div class="text-center section-head">
                    <h6 class="text wow fadeInUp" data-wow-delay="0.6s">{{ GetContent('Category_title') }}</h6>
                    <h2 class="title wow fadeInUp" data-wow-delay="0.8s">{{ GetContent('Category_description') }} </h2>
                </div>
                <div class="row">

                    @isset($categories)
                        @foreach ($categories as $category)
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                <div class="text-center icon-bx-wraper style-2 wow fadeInUp" data-wow-delay="1.0s">
                                    <div class="icon-media">
                                        <img width="80px" height="80px" style="object-fit: cover; aspect-ratio: 2/2"
                                            src="{{ asset('storage/' . $category->img_path) }}" />
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="mb-0 fs-20"><a href="javascript:void(0);">{{ $category->title }}</a></h5>
                                        <p class="text"><a href="javascript:void(0);">{{ $category->description }}</a></p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endisset
                </div>
            </div>
        </section>

        <section class="overflow-hidden content-inner position-relative bg-light">
            <div class="container">
                <div class="text-center section-head">
                    <h6 class="text wow fadeInUp" data-wow-delay="0.6s">{{ GetContent('Jobs_titles') }}</h6>
                    <h2 class="title wow fadeInUp" data-wow-delay="0.8s">{{ GetContent('Jobs_description') }}</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="job-bx style-1 wow fadeInUp" data-wow-delay="1.0s">
                            <div class="d-flex m-b25 justify-content-between">
                                <span class="media">
                                    <img src="assets/images/company-logo/pic1.png" alt="image">
                                </span>
                                <ul>
                                    <li><a class="job-day" href="javascript:void(0);">1 Day Ago</a></li>
                                    <li><a class="job-time" href="javascript:void(0);">Full Time</a></li>
                                </ul>
                            </div>
                            <div class="job-contant">
                                <h6 class="job-title "><a href="job-detail.html">Need Senior Stock Technician</a>
                                </h6>
                                <p class="text">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                            </div>
                            <div class="jobs-amount">
                                <h6 class="amount">$3500<span>/ month</span></h6>
                                <a class="btn btn-primary" href="job-detail.html"><i
                                        class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="job-bx style-1 wow fadeInUp" data-wow-delay="1.2s">
                            <div class="d-flex m-b25 justify-content-between">
                                <span class="media">
                                    <img src="assets/images/company-logo/pic2.png" alt="image">
                                </span>
                                <ul>
                                    <li><a class="job-day" href="javascript:void(0);">1 Day Ago</a></li>
                                    <li><a class="job-time" href="javascript:void(0);">Full Time</a></li>
                                </ul>
                            </div>
                            <div class="job-contant">
                                <h6 class="job-title "><a href="job-detail.html">Senior Web Designer , Developer</a>
                                </h6>
                                <p class="text">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                            </div>
                            <div class="jobs-amount">
                                <h6 class="amount">$3500<span>/ month</span></h6>
                                <a class="btn btn-primary" href="job-detail.html"><i
                                        class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="job-bx style-1 wow fadeInUp" data-wow-delay="1.6s">
                            <div class="d-flex m-b25 justify-content-between">
                                <span class="media">
                                    <img src="assets/images/company-logo/pic3.png" alt="image">
                                </span>
                                <ul>
                                    <li><a class="job-day" href="javascript:void(0);">1 Day Ago</a></li>
                                    <li><a class="job-time" href="javascript:void(0);">Full Time</a></li>
                                </ul>
                            </div>
                            <div class="job-contant">
                                <h6 class="job-title "><a href="job-detail.html">IT Department Manager</a></h6>
                                <p class="text">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                            </div>
                            <div class="jobs-amount">
                                <h6 class="amount">$3500<span>/ month</span></h6>
                                <a class="btn btn-primary" href="job-detail.html"><i
                                        class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="job-bx style-1 wow fadeInUp" data-wow-delay="1.0s">
                            <div class="d-flex m-b25 justify-content-between">
                                <span class="media">
                                    <img src="assets/images/company-logo/pic4.png" alt="image">
                                </span>
                                <ul>
                                    <li><a class="job-day" href="javascript:void(0);">1 Day Ago</a></li>
                                    <li><a class="job-time" href="javascript:void(0);">Full Time</a></li>
                                </ul>
                            </div>
                            <div class="job-contant">
                                <h6 class="job-title "><a href="job-detail.html">Recreation & Fitness Worker</a>
                                </h6>
                                <p class="text">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                            </div>
                            <div class="jobs-amount">
                                <h6 class="amount">$3500<span>/ month</span></h6>
                                <a class="btn btn-primary" href="job-detail.html"><i
                                        class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="job-bx style-1 wow fadeInUp" data-wow-delay="1.2s">
                            <div class="d-flex m-b25 justify-content-between">
                                <span class="media">
                                    <img src="assets/images/company-logo/pic5.png" alt="image">
                                </span>
                                <ul>
                                    <li><a class="job-day" href="javascript:void(0);">1 Day Ago</a></li>
                                    <li><a class="job-time" href="javascript:void(0);">Full Time</a></li>
                                </ul>
                            </div>
                            <div class="job-contant">
                                <h6 class="job-title "><a href="job-detail.html">Senior Stock Technician</a></h6>
                                <p class="text">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                            </div>
                            <div class="jobs-amount">
                                <h6 class="amount">$3500<span>/ month</span></h6>
                                <a class="btn btn-primary" href="job-detail.html"><i
                                        class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="job-bx style-1 wow fadeInUp" data-wow-delay="1.6s">
                            <div class="d-flex m-b25 justify-content-between">
                                <span class="media">
                                    <img src="assets/images/company-logo/pic6.png" alt="image">
                                </span>
                                <ul>
                                    <li><a class="job-day" href="javascript:void(0);">1 Day Ago</a></li>
                                    <li><a class="job-time" href="javascript:void(0);">Full Time</a></li>
                                </ul>
                            </div>
                            <div class="job-contant">
                                <h6 class="job-title "><a href="job-detail.html">Need Senior Stock Technician</a>
                                </h6>
                                <p class="text">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                            </div>
                            <div class="jobs-amount">
                                <h6 class="amount">$3500<span>/ month</span></h6>
                                <a class="btn btn-primary" href="job-detail.html"><i
                                        class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="overflow-hidden bg-white content-inner-1 position-relative">
            <div class="container">
                <div class="text-center section-head">
                    <h6 class="text wow fadeInUp" data-wow-delay="0.6s">Clents Testimonials</h6>
                    <h2 class="title wow fadeInUp" data-wow-delay="0.8s">What A Job Holder Says About Us.</h2>
                </div>
                <div class="overflow-hidden swiper-container blog-swiper-1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="dz-card blog-grid style-2 bg-light wow fadeInUp" data-wow-delay="1.0s">
                                <div class="dz-text">
                                    <p class="text">This is the best job searching site l’ve ever seen. i found my
                                        dream job through this site, come and grab this golden opportunity! </p>
                                </div>
                                <div class="dz-info">
                                    <div class="bottom-contact">
                                        <div class="dz-media">
                                            <a href="blog-details.html"><img src="assets/images/blog/small/pic1.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div>
                                            <h6 class="dz-title"><a href="blog-details.html">Ashley Jenkins</a></h6>
                                            <p class="text">Designer</p>
                                        </div>
                                    </div>
                                    <svg width="111" height="79" viewBox="0 0 111 79" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M24.6166 0.323242C11.0432 0.323242 0.00183105 11.3646 0.00183105 24.9382C0.00183105 38.0324 10.2777 48.7721 23.1889 49.5141C23.4124 51.9277 23.2447 58.4977 16.9491 67.6369C16.4732 68.3264 16.5596 69.2561 17.1506 69.8472C19.7269 72.4235 21.319 74.046 22.4334 75.1808C23.8918 76.6645 24.5575 77.342 25.5313 78.2262C25.8615 78.5259 26.2781 78.6766 26.6966 78.6766C27.103 78.6766 27.5078 78.5344 27.8347 78.2515C38.805 68.7057 50.9914 48.9822 49.2282 24.8128C48.1951 10.6228 37.8447 0.323242 24.6166 0.323242ZM26.7135 74.5727C26.241 74.107 25.7023 73.5583 24.908 72.7502C23.9426 71.7663 22.6181 70.418 20.6093 68.4025C28.2498 56.6294 26.8066 48.2438 26.1749 47.0412C25.8751 46.4705 25.2602 46.0859 24.6166 46.0859C12.9571 46.0859 3.47058 36.5994 3.47058 24.9382C3.47058 13.2785 12.9571 3.79199 24.6166 3.79199C35.9748 3.79199 44.8703 12.7382 45.7696 25.0634C47.7513 52.2478 31.5949 69.898 26.7135 74.5727Z"
                                            fill="var(--primary)" />
                                        <path
                                            d="M110.827 24.8128C109.791 10.6246 99.4387 0.323242 86.2141 0.323242C72.6406 0.323242 61.5975 11.3646 61.5975 24.9382C61.5975 38.0324 71.875 48.7721 84.788 49.5141C85.0115 51.9259 84.8421 58.4924 78.5449 67.6369C78.069 68.3264 78.1554 69.2561 78.7464 69.8472C81.3125 72.4132 82.9011 74.0324 84.0156 75.1655C85.4807 76.6593 86.1498 77.3402 87.1287 78.2277C87.4589 78.5259 87.8772 78.6766 88.294 78.6766C88.7005 78.6766 89.1053 78.5344 89.4321 78.2498C100.402 68.7039 112.589 48.9806 110.827 24.8128ZM88.3108 74.5727C87.8349 74.1036 87.2914 73.5515 86.4901 72.7351C85.5247 71.7526 84.2054 70.4079 82.205 68.4025C89.8454 56.6276 88.4041 48.2438 87.774 47.0412C87.4742 46.4722 86.8578 46.0859 86.2141 46.0859C74.5527 46.0859 65.0662 36.5994 65.0662 24.9382C65.0662 13.2785 74.5527 3.79199 86.2141 3.79199C97.5705 3.79199 106.468 12.7382 107.369 25.0651C109.349 52.2461 93.1922 69.898 88.3108 74.5727Z"
                                            fill="var(--primary)" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-card blog-grid style-2 bg-light wow fadeInUp" data-wow-delay="1.2s">
                                <div class="dz-text">
                                    <p class="text">This is the best job searching site l’ve ever seen. i found my
                                        dream job through this site, come and grab this golden opportunity! </p>
                                </div>
                                <div class="dz-info">
                                    <div class="bottom-contact">
                                        <div class="dz-media">
                                            <a href="blog-details.html"><img src="assets/images/blog/small/pic2.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div>
                                            <h6 class="dz-title"><a href="blog-details.html">Jennifer</a></h6>
                                            <p class="text">CEO & Founder</p>
                                        </div>
                                    </div>
                                    <svg width="111" height="79" viewBox="0 0 111 79" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M24.6166 0.323242C11.0432 0.323242 0.00183105 11.3646 0.00183105 24.9382C0.00183105 38.0324 10.2777 48.7721 23.1889 49.5141C23.4124 51.9277 23.2447 58.4977 16.9491 67.6369C16.4732 68.3264 16.5596 69.2561 17.1506 69.8472C19.7269 72.4235 21.319 74.046 22.4334 75.1808C23.8918 76.6645 24.5575 77.342 25.5313 78.2262C25.8615 78.5259 26.2781 78.6766 26.6966 78.6766C27.103 78.6766 27.5078 78.5344 27.8347 78.2515C38.805 68.7057 50.9914 48.9822 49.2282 24.8128C48.1951 10.6228 37.8447 0.323242 24.6166 0.323242ZM26.7135 74.5727C26.241 74.107 25.7023 73.5583 24.908 72.7502C23.9426 71.7663 22.6181 70.418 20.6093 68.4025C28.2498 56.6294 26.8066 48.2438 26.1749 47.0412C25.8751 46.4705 25.2602 46.0859 24.6166 46.0859C12.9571 46.0859 3.47058 36.5994 3.47058 24.9382C3.47058 13.2785 12.9571 3.79199 24.6166 3.79199C35.9748 3.79199 44.8703 12.7382 45.7696 25.0634C47.7513 52.2478 31.5949 69.898 26.7135 74.5727Z"
                                            fill="var(--primary)" />
                                        <path
                                            d="M110.827 24.8128C109.791 10.6246 99.4387 0.323242 86.2141 0.323242C72.6406 0.323242 61.5975 11.3646 61.5975 24.9382C61.5975 38.0324 71.875 48.7721 84.788 49.5141C85.0115 51.9259 84.8421 58.4924 78.5449 67.6369C78.069 68.3264 78.1554 69.2561 78.7464 69.8472C81.3125 72.4132 82.9011 74.0324 84.0156 75.1655C85.4807 76.6593 86.1498 77.3402 87.1287 78.2277C87.4589 78.5259 87.8772 78.6766 88.294 78.6766C88.7005 78.6766 89.1053 78.5344 89.4321 78.2498C100.402 68.7039 112.589 48.9806 110.827 24.8128ZM88.3108 74.5727C87.8349 74.1036 87.2914 73.5515 86.4901 72.7351C85.5247 71.7526 84.2054 70.4079 82.205 68.4025C89.8454 56.6276 88.4041 48.2438 87.774 47.0412C87.4742 46.4722 86.8578 46.0859 86.2141 46.0859C74.5527 46.0859 65.0662 36.5994 65.0662 24.9382C65.0662 13.2785 74.5527 3.79199 86.2141 3.79199C97.5705 3.79199 106.468 12.7382 107.369 25.0651C109.349 52.2461 93.1922 69.898 88.3108 74.5727Z"
                                            fill="var(--primary)" />
                                    </svg>

                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-card blog-grid style-2 bg-light wow fadeInUp" data-wow-delay="1.4s">
                                <div class="dz-text">
                                    <p class="text">This is the best job searching site l’ve ever seen. i found my
                                        dream job through this site, come and grab this golden opportunity! </p>
                                </div>
                                <div class="dz-info">
                                    <div class="bottom-contact">
                                        <div class="dz-media">
                                            <a href="blog-details.html"><img src="assets/images/blog/small/pic3.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div>
                                            <h6 class="dz-title"><a href="blog-details.html"> Ronald Richards</a>
                                            </h6>
                                            <p class="text">Consultant</p>
                                        </div>
                                    </div>
                                    <svg width="111" height="79" viewBox="0 0 111 79" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M24.6166 0.323242C11.0432 0.323242 0.00183105 11.3646 0.00183105 24.9382C0.00183105 38.0324 10.2777 48.7721 23.1889 49.5141C23.4124 51.9277 23.2447 58.4977 16.9491 67.6369C16.4732 68.3264 16.5596 69.2561 17.1506 69.8472C19.7269 72.4235 21.319 74.046 22.4334 75.1808C23.8918 76.6645 24.5575 77.342 25.5313 78.2262C25.8615 78.5259 26.2781 78.6766 26.6966 78.6766C27.103 78.6766 27.5078 78.5344 27.8347 78.2515C38.805 68.7057 50.9914 48.9822 49.2282 24.8128C48.1951 10.6228 37.8447 0.323242 24.6166 0.323242ZM26.7135 74.5727C26.241 74.107 25.7023 73.5583 24.908 72.7502C23.9426 71.7663 22.6181 70.418 20.6093 68.4025C28.2498 56.6294 26.8066 48.2438 26.1749 47.0412C25.8751 46.4705 25.2602 46.0859 24.6166 46.0859C12.9571 46.0859 3.47058 36.5994 3.47058 24.9382C3.47058 13.2785 12.9571 3.79199 24.6166 3.79199C35.9748 3.79199 44.8703 12.7382 45.7696 25.0634C47.7513 52.2478 31.5949 69.898 26.7135 74.5727Z"
                                            fill="var(--primary)" />
                                        <path
                                            d="M110.827 24.8128C109.791 10.6246 99.4387 0.323242 86.2141 0.323242C72.6406 0.323242 61.5975 11.3646 61.5975 24.9382C61.5975 38.0324 71.875 48.7721 84.788 49.5141C85.0115 51.9259 84.8421 58.4924 78.5449 67.6369C78.069 68.3264 78.1554 69.2561 78.7464 69.8472C81.3125 72.4132 82.9011 74.0324 84.0156 75.1655C85.4807 76.6593 86.1498 77.3402 87.1287 78.2277C87.4589 78.5259 87.8772 78.6766 88.294 78.6766C88.7005 78.6766 89.1053 78.5344 89.4321 78.2498C100.402 68.7039 112.589 48.9806 110.827 24.8128ZM88.3108 74.5727C87.8349 74.1036 87.2914 73.5515 86.4901 72.7351C85.5247 71.7526 84.2054 70.4079 82.205 68.4025C89.8454 56.6276 88.4041 48.2438 87.774 47.0412C87.4742 46.4722 86.8578 46.0859 86.2141 46.0859C74.5527 46.0859 65.0662 36.5994 65.0662 24.9382C65.0662 13.2785 74.5527 3.79199 86.2141 3.79199C97.5705 3.79199 106.468 12.7382 107.369 25.0651C109.349 52.2461 93.1922 69.898 88.3108 74.5727Z"
                                            fill="var(--primary)" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="num-pagination style-1">
                <div class="testimonial-next btn-prev wow bounceInLeft" data-wow-delay="1.6s"><i
                        class="fa-solid fa-angle-left"></i></div>
                <div class="testimonial-prev btn-next wow bounceInRight" data-wow-delay="1.8s"><i
                        class="fa-solid fa-angle-right"></i></div>
            </div>
        </section>

        <!--footer-action -->
        <div class="container">
            <section class="footer-action wow fadeInUp" data-wow-delay="1.0s">
                <div class="inner-content wow fadeInUp" data-wow-delay="1.2s">
                    <div class="row justify-content-between align-items-center">
                        <div class="text-center text-xl-start col-xl-7 m-lg-b20">
                            <h2 class="title">Let’s Get Connected And Start Finding Your Dream Job</h2>
                        </div>
                        <div class="text-center text-xl-end col-xl-5">
                            <a class="btn btn-light btn-lg"
                                href="javascript:void(0);">{{ GetContent('Card_button') }}</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
