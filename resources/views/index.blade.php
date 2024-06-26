@extends('layouts.website.master')
{{-- @section('title_web')
    Homepage
@endsection --}}
@section('css')
    <style>
        #portfolio .list-style {
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
            width: fit-content;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 8px;
            position: relative;
            overflow: hidden;
            z-index: 111;

            &::after {
                content: "";
                position: absolute;
                right: 0px;
                top: 0;
                background-color: #4885ED;
                width: 0px;
                height: 30px;
                transition: .8s;
                z-index: -1;
                color: white;
            }

            &::before {
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

            &:hover {
                border: 1px solid #4885ED;
                color: white;

                &::after {
                    width: 50%;
                }

                &::before {
                    width: 50%;
                }
            }
        }

        #portfolio .filter-items>.products-card.hidden {
            display: none;
        }

        #portfolio .filter-items>.products-card.active {
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

        .products .container {
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

                span {
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

        .products .container .products-cards .products-card .img-card .icon-card ul li a {
            height: 45px;
            width: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: white;
            border-radius: 50%;
            color: black;
            opacity: 0;

            &:hover {
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

            &::after {
                content: "";
                position: absolute;
                right: 0px;
                top: 0;
                background-color: #4885ED;
                width: 150px;
                height: 50px;
                transition: .8s;
                z-index: -1;
                color: white;
            }

            &::before {
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

            &:hover {
                border: 1px solid #4885ED;
                color: #4885ED;

                &::after {
                    width: 0px;

                }

                &::before {
                    width: 0px;
                }
            }
        }

        @media (max-width: 992px) {
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

        @media (max-width: 410px) {}
    </style>
@endsection
@section('content')
    <div class="page-content">

        <div class="main-bnr bg-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-7 col-md-12">
                        <h1 class=" wow fadeInUp" id="text" data-wow-delay="0.6s">{{ GetContent('intro_title') }}</h1>
                        <p class=" text text-primary wow fadeInUp font-w500" data-wow-delay="0.8s">Type your
                            keywork, then click search to find your perfect job. </p>
                        <div class="bnr-search-bar wow fadeInUp" data-wow-delay="1.0s">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-xl-9 col-lg-8 col-md-9 col-sm-12">
                                    <div class="row center-line">
                                        <div class="col-lg-6 col-md-6 col-sm-6 ">
                                            <div class="search-bar">
                                                <span>
                                                    <i class="fa-solid fa-magnifying-glass"></i>
                                                </span>
                                                <div class="icon-content w-100">
                                                    <input name="dzEmail" required="required" class="form-control"
                                                        placeholder="Job Title, Keywords..." type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="search-bar">
                                                <span>
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </span>
                                                <div class="icon-content w-100">
                                                    <input name="dzEmail" required="required" class="form-control"
                                                        placeholder="City Or Postcode" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center col-xl-3 col-lg-4 col-md-3 col-sm-12 text-lg-end text-md-center">
                                    <a class="btn btn-primary w-100" href="javascript:void(0);">Find Jobs</a>
                                </div>
                            </div>
                        </div>
                        <h6 class="bottom-contact wow fadeInUp" data-wow-delay="1.2s">
                            <span>Popular Searches: </span>
                            <a href="javascript:void(0);">Designer,</a>
                            <a href="javascript:void(0);">Senor,</a>
                            <a href="javascript:void(0);">Architecture,</a>
                            <a href="javascript:void(0);">IOS,</a>
                            <a href="javascript:void(0);">Etc.</a>
                        </h6>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-12">
                        <div class="banner-media">
                            <img class="media wow bounceInRight" data-wow-delay="1.4s"
                                src="assets/images/home-banner/media-men.png" alt="">
                            <ul class="bnr-blocks">
                                <li>
                                    <div class="bnr-block wow fadeInUp anm" data-wow-delay="1.6s" data-speed-x="-1"
                                        data-speed-scale="-1">
                                        <i class="fa-solid fa-envelope"></i>
                                        <span class="block-text">Work Inquiry From <br> All Tufon</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="bnr-block wow fadeInUp anm" data-wow-delay="1.6s" data-speed-x="-2"
                                        data-speed-scale="-1">
                                        <i class="fa-solid fa-briefcase"></i>
                                        <span class="block-text">Creative Agency <br> Startup</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="bnr-block-pics wow fadeInUp anm" data-wow-delay="1.6s" data-speed-x="-3"
                                        data-speed-scale="-1">
                                        <span class="block-text">Expert Team Members</span>
                                        <div class="twm-pics">
                                            <span><img src="assets/images/banner/banner-block-pics/pic1.jpg"
                                                    alt="image"></span>
                                            <span><img src="assets/images/banner/banner-block-pics/pic2.jpg"
                                                    alt="image"></span>
                                            <span><img src="assets/images/banner/banner-block-pics/pic3.jpg"
                                                    alt="image"></span>
                                            <span><img src="assets/images/banner/banner-block-pics/pic4.jpg"
                                                    alt="image"></span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <svg class="shape1" viewBox="0 0 250 315" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M-15.8534 213.126L-49.2042 179.81C-58.9952 170.029 -58.9952 154.167 -49.2042 144.38L-15.8534 111.064C-6.0624 101.283 9.81609 101.283 19.6137 111.064L52.9646 144.38C62.7556 154.161 62.7556 170.023 52.9646 179.81L19.6137 213.126C9.81609 222.914 -6.0624 222.914 -15.8534 213.126Z"
                    fill="var(--rgba-primary-6)"></path>
                <path
                    d="M54.9201 306.94L23.9065 275.959C13.4659 265.529 13.4659 248.623 23.9065 238.194L54.9201 207.212C65.3607 196.783 82.2839 196.783 92.7245 207.212L123.738 238.194C134.179 248.623 134.179 265.529 123.738 275.959L92.7245 306.94C82.2839 317.37 65.354 317.37 54.9201 306.94Z"
                    fill="var(--rgba-primary-6)"></path>
                <path
                    d="M11.2693 151.465L-104.622 35.6945C-115.062 25.2648 -115.062 8.35919 -104.622 -2.0705L11.2693 -117.841C21.7099 -128.27 38.6331 -128.27 49.0737 -117.841L164.965 -2.0705C175.405 8.35919 175.405 25.2648 164.965 35.6945L49.0737 151.465C38.6331 161.894 21.7099 161.894 11.2693 151.465Z"
                    fill="var(--primary-dark)"></path>
                <path
                    d="M169.833 69.519L135.973 35.6945C125.533 25.2648 125.533 8.35919 135.973 -2.0705L169.833 -35.8951C180.274 -46.3248 197.197 -46.3248 207.638 -35.8951L241.497 -2.0705C251.938 8.35919 251.938 25.2648 241.497 35.6945L207.638 69.519C197.197 79.9487 180.274 79.9487 169.833 69.519Z"
                    fill="var(--primary)"></path>
                <path
                    d="M109.494 186.871L69.1182 146.537C63.0708 140.496 63.0708 130.702 69.1182 124.661L109.494 84.3272C115.542 78.2861 125.346 78.2861 131.393 84.3272L171.769 124.661C177.817 130.702 177.817 140.496 171.769 146.537L131.393 186.871C125.346 192.912 115.542 192.912 109.494 186.871Z"
                    fill="var(--primary)"></path>
            </svg>
            <svg class="shape2" viewBox="0 0 319 612" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_54_23" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="319"
                    height="612">
                    <rect width="319" height="612" fill="var(--primary)"></rect>
                </mask>
                <g mask="url(#mask0_54_23)">
                    <path
                        d="M76.7559 377.481L36.5386 359.615C23.3563 353.759 16.9589 338.129 22.2524 324.711L38.402 283.774C43.6954 270.356 58.6781 264.223 71.8604 270.08L112.078 287.946C125.26 293.802 131.657 309.432 126.364 322.85L110.214 363.787C104.921 377.205 89.9382 383.338 76.7559 377.481Z"
                        stroke="var(--primary-dark)" stroke-width="2" stroke-miterlimit="10"></path>
                    <path
                        d="M245.853 304.82L166.379 269.514C146.657 260.753 137.091 237.381 145.011 217.305L176.924 136.41C184.844 116.335 207.247 107.165 226.97 115.927L306.443 151.232C326.166 159.994 335.731 183.365 327.812 203.441L295.899 284.336C287.979 304.412 265.575 313.581 245.853 304.82Z"
                        stroke="var(--primary-dark)" stroke-width="2" stroke-miterlimit="10"></path>
                    <path
                        d="M376.662 571.765L157.738 474.51C138.015 465.748 128.449 442.377 136.369 422.301L224.28 199.46C232.2 179.384 254.603 170.215 274.326 178.976L493.25 276.232C512.973 284.994 522.539 308.365 514.619 328.441L426.708 551.282C418.784 571.348 396.381 580.518 376.662 571.765Z"
                        stroke="var(--primary-dark)" stroke-width="2" stroke-miterlimit="10"></path>
                    <path
                        d="M115.525 575.71L45.2359 544.485C25.5131 535.723 15.9473 512.352 23.8672 492.276L52.0921 420.73C60.012 400.654 82.4152 391.485 102.138 400.246L172.427 431.471C192.149 440.233 201.715 463.605 193.795 483.68L165.57 555.226C157.659 575.299 135.247 584.472 115.525 575.71Z"
                        stroke="var(--primary-dark)" stroke-width="2" stroke-miterlimit="10"></path>
                    <path
                        d="M185.275 121.967L151.156 106.81C135.544 99.8747 127.966 81.3589 134.235 65.4683L147.936 30.7383C154.205 14.8477 171.953 7.58327 187.565 14.5184L221.684 29.6757C237.296 36.6109 244.874 55.1268 238.605 71.0173L224.904 105.747C218.635 121.638 200.895 128.899 185.275 121.967Z"
                        stroke="var(--primary-dark)" stroke-width="2" stroke-miterlimit="10"></path>
                    <path
                        d="M141.303 344.782L115.419 333.283C106.513 329.327 102.19 318.765 105.766 309.699L116.16 283.352C119.736 274.287 129.861 270.143 138.767 274.099L164.651 285.598C173.557 289.555 177.88 300.117 174.304 309.182L163.91 335.529C160.334 344.595 150.209 348.739 141.303 344.782Z"
                        stroke="var(--primary-dark)" stroke-width="2" stroke-miterlimit="10"></path>
                    <path
                        d="M88.3079 244.487L79.933 240.767C75.6064 238.845 73.5055 233.712 75.2429 229.308L78.6059 220.783C80.3433 216.379 85.2636 214.365 89.5903 216.287L97.9652 220.007C102.292 221.93 104.393 227.063 102.655 231.467L99.2923 239.991C97.5549 244.395 92.6346 246.409 88.3079 244.487Z"
                        stroke="var(--primary-dark)" stroke-width="2" stroke-miterlimit="10"></path>
                    <path
                        d="M83.1256 390.858L42.9082 372.992C29.7259 367.135 23.3286 351.505 28.622 338.087L44.7716 297.15C50.065 283.732 65.0478 277.6 78.23 283.456L118.447 301.322C131.63 307.178 138.027 322.808 132.734 336.227L116.584 377.163C111.291 390.582 96.3167 396.71 83.1256 390.858Z"
                        fill="var(--primary-dark)"></path>
                    <path
                        d="M275.11 335.94L195.637 300.634C175.914 291.873 166.348 268.501 174.268 248.426L206.181 167.531C214.101 147.455 236.504 138.285 256.227 147.047L335.7 182.352C355.423 191.114 364.989 214.486 357.069 234.561L325.156 315.456C317.245 335.528 294.833 344.701 275.11 335.94Z"
                        fill="var(--rgba-primary)"></path>
                    <path
                        d="M416.689 688.933L358.103 662.906C338.38 654.144 328.814 630.773 336.734 610.697L360.26 551.063C368.18 530.987 390.583 521.818 410.306 530.579L468.892 556.606C488.615 565.367 498.181 588.739 490.261 608.815L466.735 668.449C458.815 688.525 436.412 697.694 416.689 688.933Z"
                        fill="white"></path>
                    <path
                        d="M405.915 602.876L186.991 505.621C167.268 496.859 157.702 473.488 165.622 453.412L253.533 230.571C261.453 210.495 283.856 201.326 303.579 210.087L522.503 307.343C542.226 316.105 551.792 339.476 543.872 359.552L455.961 582.393C448.041 602.469 425.638 611.638 405.915 602.876Z"
                        fill="var(--primary-dark)"></path>
                    <path
                        d="M144.79 606.827L74.5018 575.601C54.779 566.84 45.2132 543.468 53.133 523.393L81.358 451.847C89.2779 431.771 111.681 422.601 131.404 431.363L201.693 462.588C221.415 471.35 230.981 494.721 223.061 514.797L194.836 586.343C186.916 606.419 164.504 615.592 144.79 606.827Z"
                        fill="var(--primary-dark)"></path>
                    <path
                        d="M214.529 153.078L180.409 137.921C164.798 130.986 157.219 112.47 163.488 96.5792L177.189 61.8492C183.458 45.9587 201.207 38.6942 216.818 45.6293L250.938 60.7867C266.549 67.7219 274.127 86.2377 267.859 102.128L254.158 136.858C247.893 152.758 230.153 160.019 214.529 153.078Z"
                        fill="var(--primary-dark)"></path>
                    <path
                        d="M170.56 375.902L144.676 364.404C135.769 360.447 131.446 349.885 135.023 340.82L145.417 314.473C148.993 305.407 159.118 301.263 168.024 305.22L193.908 316.718C202.814 320.675 207.137 331.237 203.56 340.302L193.167 366.649C189.59 375.715 179.475 379.855 170.56 375.902Z"
                        fill="var(--primary-dark)"></path>
                    <path
                        d="M117.561 275.598L109.186 271.878C104.86 269.956 102.759 264.823 104.496 260.419L107.859 251.894C109.596 247.49 114.517 245.476 118.843 247.398L127.218 251.118C131.545 253.04 133.646 258.173 131.909 262.577L128.546 271.102C126.808 275.506 121.897 277.517 117.561 275.598Z"
                        fill="var(--primary-dark)"></path>
                </g>
            </svg>
        </div>

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
                                <img src="{{ asset("storage/$img5[img_path]") }}" alt="image" class="rounded">
                            </div>
                            <div class="icon-content">
                                <h4 class="title">{{ GetContent('work_card1_title') }}</h4>
                                <p class="text">{{ GetContent('work_card1_description') }}</p>
                            </div>
                            <h3 class="count">01</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 m-b30">
                        <div class="icon-bx-wraper style-1 bg-clr-pink wow bounceInUp" data-wow-delay="1.0s">
                            <div class="icon-media">
                                <img src="{{ asset("storage/$img4[img_path]") }}" alt="image" class="rounded">
                            </div>
                            <div class="icon-content">
                                <h4 class="title">{{ GetContent('work_card2_title') }}</h4>
                                <p class="text">{{ GetContent('work_card2_description') }}</p>
                            </div>
                            <h3 class="count">02</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 m-b30">
                        <div class="icon-bx-wraper style-1 bg-clr-green wow bounceInRight" data-wow-delay="1.2s">
                            <div class="icon-media">
                                <img src="{{ asset("storage/$img3[img_path]") }}" alt="image" class="rounded">
                            </div>
                            <div class="icon-content">
                                <h4 class="title">{{ GetContent('work_card3_title') }}</h4>
                                <p class="text">{{ GetContent('work_card3_description') }}</p>
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

                                    <img src="{{ asset("storage/$img1[img_path]") }}" alt="image"
                                        class="wow bounceInLeft" data-wow-delay="0.6s">
                                </div>
                                <div class="col-6">
                                    <img src="{{ asset("storage/$img2[img_path]") }}" alt="image"
                                        class="wow bounceInLeft" data-wow-delay="0.4s">
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

        <section class="products" id="portfolio">
            <h1>Exclusive Products</h1>
            <div class="container">
                <div>
                    <ul class="list-group list-group-horizontal list-style">
                        <li class="list-group-item active" data-filter="all">All</li>

                        @isset($categories)
                            @foreach ($categories as $category)
                                <li class="list-group-item" data-filter="{{ $category->title }}">{{ $category->title }}</li>
                            @endforeach
                        @endisset
                    </ul>
                </div>
                <div class="products-cards filter-items " id="gallery">

                    @isset($blogs)
                        @foreach ($blogs as $blog)
                            <div class="products-card all {{ $blog->category }}">
                                <div class="img-card">
                                    <img src="{{ asset("storage/{$blog->img}") }}" alt=""></img>
                                    <div class="icon-card">
                                        {{-- <ul>
                                            <li>
                                                <a href="#">
                                                    +
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    +
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    +
                                                </a>
                                            </li>
                                        </ul> --}}
                                    </div>
                                </div>
                                {{-- <h2>{{ $blog->section }}</h2> --}}
                                <h2>{{ $blog->title }}</h2>
                                <div class="price-card">
                                    <span>{{ $blog->price }}</span>
                                </div>

                                <a href="{{ url("/blog/{$blog->id}") }}" class="btn-card">
                                    <FaCartArrowDown /> Show More
                                </a>
                            </div>
                        @endforeach
                    @endisset


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

@section('js')
    <script>
        const filterListItems = document.querySelectorAll(".list-group li"),
            filterItems = document.querySelectorAll(".filter-items .products-card");

        filterListItems.forEach((list) => {
            list.addEventListener("click", () => {
                document.querySelector(".list-group li.active").classList.remove("active");
                list.classList.add("active");
                let filteredValue = list.dataset.filter;
                filterItems.forEach((item) => {
                    if (item.classList.contains(filteredValue)) {
                        item.classList.add("active");
                        item.classList.remove("hidden");
                    } else {
                        item.classList.add("hidden");
                        item.classList.remove("active");
                    }
                });
            });
        });
        lightGallery(document.getElementById("gallery"), {});
    </script>
@endsection
