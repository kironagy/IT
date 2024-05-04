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
                    <h1>Blog Details</h1>
                    <nav aria-label="breadcrumb" class="breadcrumb-row m-t15">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
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
                        <div class="pt-20 blog-single sidebar dz-card">
                            <div class="rounded dz-media dz-media-rounded">
                                <img src="assets/images/blog/large/pic1.jpg" alt="">
                            </div>
                            <div class="dz-info m-b30">
                                <div class="dz-meta">
                                    <ul>
                                        <li class="post-author">
                                            <a href="javascript:void(0);">
                                                <img src="assets/images/avatar/avatar3.jpg" alt="">
                                                <span>By Jone Doe</span>
                                            </a>
                                        </li>
                                        <li class="post-date"><a href="javascript:void(0);"> 17 May 2022</a></li>
                                        <li class="post-comment"><a href="javascript:void(0);">3 comment</a></li>
                                    </ul>
                                </div>
                                <h3 class="dz-title">How to convince recruiters and get your dream job</h3>
                                <div class="dz-post-text">
                                    <p>Please make sure you understand what rights you are claiming before you submit a DMCA
                                        takedown notice because it is a serious legal document. Consider whether you need
                                        legal advice. It's really important not to make false claims as this could have
                                        serious legal consequences.</p>
                                    <p>penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer tristique
                                        elit lobortis purus bibendum, quis dictum metus mattis. Phasellus posuere felis sed
                                        eros porttitor mattis. Curabitur massa magna, tempor in blandit id, porta in ligula.
                                        Aliquam laoreet nisl massa, at interdum mauris sollicitudin et.Harvel is a copyright
                                        protection platform for next-gen creators, crawling the web on a daily basis in
                                        order to find piracy links and copyright infringement of your content. Ip>
                                    <blockquote class="block-quote style-1">
                                        <p>“A business consulting agency is involved in the planning, implementation, and
                                            education of businesses.”</p>
                                        <cite> Jobick </cite>
                                    </blockquote>
                                    <p>Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus,
                                        eleifend euismod and pellentesque vel, sagittis vel justo. In libero urna, venenatis
                                        sit amet ornare non, suscipit nec risus. Sed consequat justo non mauris pretium at
                                        tempor justo sodales.</p>
                                    <ul class="m-b30">
                                        <li>You need to create an account to find the best and preferred job.</li>
                                        <li>After creating the account, you have to apply for the desired job.</li>
                                        <li>After filling all the relevant information you have to upload your resume.</li>
                                    </ul>
                                    <p>The inner sanctuary, I throw myself down among the tall grass by the trickling
                                        stream; and, as I lie close to the earth, a thousand unknown plants are noticed by
                                        me: when I hear the buzz of the little world among the stalks, and grow familiar
                                        with the countless indescribable forms of the insects and flies, then I feel the
                                        presence of the Almighty.</p>
                                </div>
                                <div class="dz-share-post">
                                    <div class="post-tags">
                                        <h6 class="m-b0 m-r10 d-inline">Tags:</h6>
                                        <a href="javascript:void(0);"><span>Corporate</span></a>
                                        <a href="javascript:void(0);"><span>Blog</span></a>
                                        <a href="javascript:void(0);"><span>Marketing</span></a>
                                    </div>
                                    <div class="dz-social-icon dark">
                                        <ul>
                                            <li><a target="_blank" class="fab fa-facebook-f"
                                                    href="https://www.facebook.com/dexignzone/"></a></li>
                                            <li><a target="_blank" class="fab fa-instagram"
                                                    href="https://www.instagram.com/dexignzone/"></a></li>
                                            <li><a target="_blank" class="fab fa-twitter"
                                                    href="https://twitter.com/dexignzones"></a></li>
                                            <li><a target="_blank" class="fab fa-youtube"
                                                    href="https://www.youtube.com/channel/UCGL8V6uxNNMRrk3oZfVct1g"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget-title">
                            <h4 class="title">Related Blog</h4>
                        </div>
                        <div class="row m-b30 m-sm-b10">
                            <div class="col-md-6 col-xl-6 m-b30">
                                <div class="dz-card style-1 overlay-shine wow fadeInUp" data-wow-delay="1.0s">
                                    <div class="dz-media">
                                        <a href="blog-details.html"><img src="assets/images/blog/pic6.jpg"
                                                alt=""></a>
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
                                        <h4 class="dz-title"><a href="blog-details.html">5 Reasons Why You Should Invest In
                                                Jobs.</a></h4>
                                        <p>A wonderful serenity has taken of my entire soul, like these.</p>
                                        <a href="blog-details.html" class="btn btn-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-6 m-b30">
                                <div class="dz-card style-1 overlay-shine wow fadeInUp" data-wow-delay="1.0s">
                                    <div class="dz-media">
                                        <a href="blog-details.html"><img src="assets/images/blog/pic5.jpg"
                                                alt=""></a>
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
                                        <h4 class="dz-title"><a href="blog-details.html"> Jobs You Should Answer
                                                Truthfully.</a></h4>
                                        <p>A wonderful serenity has taken of my entire soul, like these.</p>
                                        <a href="blog-details.html" class="btn btn-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Comment List -->
                        <div class="clear" id="comment-list">
                            <div class="comments-area" id="comments">
                                <div class="widget-title style-1">
                                    <h4 class="title">Comments</h4>
                                </div>
                                <div class="clearfix">
                                    <!-- comment list END -->
                                    <ol class="comment-list">
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-author vcard">
                                                    <img class="avatar photo" src="assets/images/avatar/avatar1.jpg"
                                                        alt="">
                                                    <cite class="fn">Celesto Anderson</cite>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                                <div class="reply">
                                                    <a href="javascript:void(0);" class="comment-reply-link"><i
                                                            class="fa fa-reply"></i>Reply</a>
                                                </div>
                                            </div>
                                            <ol class="children">
                                                <li class="comment odd parent">
                                                    <div class="comment-body">
                                                        <div class="comment-author vcard">
                                                            <img class="avatar photo"
                                                                src="assets/images/avatar/avatar2.jpg" alt="">
                                                            <cite class="fn">Jake Johnson</cite>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                        <div class="reply">
                                                            <a href="javascript:void(0);" class="comment-reply-link"><i
                                                                    class="fa fa-reply"></i>Reply</a>
                                                        </div>
                                                    </div>
                                                    <!-- list END -->
                                                </li>
                                            </ol>
                                            <!-- list END -->
                                        </li>
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-author vcard">
                                                    <img class="avatar photo" src="assets/images/avatar/avatar3.jpg"
                                                        alt="">
                                                    <cite class="fn">John Doe</cite>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                                <div class="reply">
                                                    <a href="javascript:void(0);" class="comment-reply-link"><i
                                                            class="fa fa-reply"></i>Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-author vcard">
                                                    <img class="avatar photo" src="assets/images/avatar/avatar1.jpg"
                                                        alt="">
                                                    <cite class="fn">Celesto Anderson</cite>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                                <div class="reply">
                                                    <a href="javascript:void(0);" class="comment-reply-link"><i
                                                            class="fa fa-reply"></i>Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                    <!-- comment list END -->

                                    <!-- Form -->
                                    <div class="comment-respond" id="respond">
                                        <div class="widget-title style-1">
                                            <h4 class="title" id="reply-title">Leave Your Comment
                                                <small><a style="display:none;" href="javascript:void(0);"
                                                        id="cancel-comment-reply-link" rel="nofollow">Cancel
                                                        reply</a></small>
                                            </h4>
                                        </div>
                                        <form class="comment-form" id="commentform" method="post">
                                            <p class="comment-form-author">
                                                <label for="author">Name <span class="required">*</span></label>
                                                <input type="text" name="Author" placeholder="Author"
                                                    id="author">
                                            </p>
                                            <p class="comment-form-email">
                                                <label for="email">Email <span class="required">*</span></label>
                                                <input type="text" placeholder="Email" name="email" id="email">
                                            </p>
                                            <p class="comment-form-comment">
                                                <label for="comment">Comment</label>
                                                <textarea rows="8" name="comment" placeholder="Comment" id="comment"></textarea>
                                            </p>
                                            <p class="form-submit">
                                                <button type="submit" class="btn btn-primary"
                                                    id="submit">SUBMIT</button>
                                            </p>
                                        </form>
                                    </div>
                                    <!-- Form -->
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <aside class="side-bar sticky-top right">
                            <div class="widget">
                                <div class="widget-title">
                                    <h4 class="title">Search</h4>
                                </div>
                                <div class="search-bx">
                                    <form role="search" method="post">
                                        <div class="input-group">
                                            <input name="text" class="form-control style-1" placeholder="Search.."
                                                type="text">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-primary sharp radius-no"><i
                                                        class="fa-solid fa-magnifying-glass scale3"></i></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="widget widget_categories">
                                <div class="widget-title">
                                    <h4 class="title">Categories</h4>
                                </div>
                                <ul>
                                    <li class="cat-item"><a href="#">Categories(10)</a></li>
                                    <li class="cat-item"><a href="#">Education(13)</a></li>
                                    <li class="cat-item"><a href="#">Information(9)</a></li>
                                    <li class="cat-item"><a href="#">Jobs(3)</a></li>
                                    <li class="cat-item"><a href="#">Learn(12)</a></li>
                                    <li class="cat-item"><a href="#">Skill(6)</a></li>
                                </ul>
                            </div>

                            <div class="widget recent-posts-entry">
                                <div class="widget-title">
                                    <h4 class="title">Recent Post</h4>
                                </div>
                                <div class="widget-post-bx">
                                    <div class="clearfix widget-post">
                                        <div class="dz-media">
                                            <img src="assets/images/blog/small/pic1.jpg" alt="">
                                        </div>
                                        <div class="dz-info">
                                            <h6 class="title"><a href="blog-details.html">Equipment you can count on.
                                                    People you can trust.</a></h6>
                                            <div class="dz-meta">
                                                <ul>
                                                    <li class="post-date"><a href="javascript:void(0);"> 17 May 2022</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix widget-post">
                                        <div class="dz-media">
                                            <img src="assets/images/blog/small/pic2.jpg" alt="">
                                        </div>
                                        <div class="dz-info">
                                            <h6 class="title"><a href="blog-details.html">Advanced Service Functions by
                                                    Air Transport</a></h6>
                                            <div class="dz-meta">
                                                <ul>
                                                    <li class="post-date"><a href="javascript:void(0);"> 07 Jan, 2022</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix widget-post">
                                        <div class="dz-media">
                                            <img src="assets/images/blog/small/pic3.jpg" alt="">
                                        </div>
                                        <div class="dz-info">
                                            <h6 class="title"><a href="blog-details.html">Proper arrangement for keeping
                                                    the goods in the warehouse</a></h6>
                                            <div class="dz-meta">
                                                <ul>
                                                    <li class="post-date"><a href="javascript:void(0);"> 25 Aug, 2022</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="widget widget_tag_cloud">
                                <div class="widget-title">
                                    <h4 class="title">Popular Tags</h4>
                                </div>
                                <div class="tagcloud">
                                    <a href="javascript:void(0);">General</a>
                                    <a href="javascript:void(0);">Payment</a>
                                    <a href="javascript:void(0);">Jobs </a>
                                    <a href="javascript:void(0);">Application</a>
                                    <a href="javascript:void(0);">Work</a>
                                    <a href="javascript:void(0);">Recruiting</a>
                                    <a href="javascript:void(0);">Income</a>
                                    <a href="javascript:void(0);">Employer</a>
                                </div>
                            </div>
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
