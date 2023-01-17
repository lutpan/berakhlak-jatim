<!DOCTYPE html>
<html lang="zxx">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>BerAKHLAK Jatim | Home</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('landing-page/assets/images/favicon.ico') }}" type="image/x-icon">
    <!--====== Google Fonts ======-->
    {{-- <link
        href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;600;700&family=Oswald:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="font/CS-Interface/style.css" />

    <!--====== Flaticon ======-->
    <link rel="stylesheet" href="{{ asset('landing-page/assets/css/flaticon.min.css') }}">
    <!--====== Font Awesome ======-->
    <link rel="stylesheet" href="{{ asset('landing-page/assets/css/font-awesome-5.9.0.min.css') }}">
    <!--====== Bootstrap ======-->
    <link rel="stylesheet" href="{{ asset('landing-page/assets/css/bootstrap-4.5.3.min.css') }}">
    <!--====== Magnific Popup ======-->
    <link rel="stylesheet" href="{{ asset('landing-page/assets/css/magnific-popup.min.css') }}">
    <!--====== Animate ======-->
    <link rel="stylesheet" href="{{ asset('landing-page/assets/css/animate.min.css') }}">
    <!--====== Slick ======-->
    <link rel="stylesheet" href="{{ asset('landing-page/assets/css/slick.min.css') }}">
    <!--====== Main Style ======-->
    <link rel="stylesheet" href="{{ asset('landing-page/assets/css/style.css') }}">

</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- main header -->
        <header class="main-header header-two">

            <!--Header-Upper-->
            <div class="header-upper">
                <div class="container-fluid clearfix">
                </div>
            </div>
            <!--End Header Upper-->

        </header>


        <!-- Page Banner Start -->
        <section class="page-banner rel z-1 bg-lighter text-center py-110 rpy-90"
            style="background-image: url(assets/images/background/banner-bg.png);">
            <div class="container">
                <div class="banner-inner rel">
                    <h2 class="page-title wow fadeInUp delay-0-2s">{{ $news->headline_berita }}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb wow fadeInUp delay-0-4s">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"
                                    onclick="history.back(-1)">Home</a></li>
                            <li class="breadcrumb-item active">{{ $news->judul_berita }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->


        <!-- Blog Page Start -->
        <section class="services-area py-140 rpy-100">
            <div class="container">
                <div class="row blog-row">
                    <div class="col-lg-8">
                        <div class="blog-details-content rmb-75">
                            <div class="blog-item">
                                <div class="image wow fadeInUp delay-0-2s">
                                    @if ($news->foto_berita)
                                        <img src={{ asset($news->foto_berita) }} alt="Blog">
                                    @else
                                        <img src="{{ asset('../public/img/background/cover-login.jpg') }}"
                                            alt="">
                                    @endif
                                </div>
                                <div class="blog-content wow fadeInUp delay-0-2s">
                                    <ul class="blog-meta">
                                        <li><i class="far fa-calendar-alt"></i> <a
                                                href="#">{{ $news->tanggal_berita }}</a>
                                        </li>
                                    </ul>
                                    <h3>{{ $news->judul_berita }} </h3>
                                    {!! $news->isi_berita !!}
                                    {{-- <div class="btn-share">
                                        <div class="tag-cloud">
                                            <b><b>Releted Tags :</b></b>
                                            <a href="blog.html">Agency</a>
                                            <a href="blog.html">Designing</a>
                                        </div>
                                        <div class="share-icons mb-20">
                                            <b>Share :</b>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                        </div>
                                    </div>
                                    <div class="comment-item admin-comment mt-50 wow fadeInUp delay-0-2s">
                                        <div class="author-image">
                                            <img src="assets/images/blog/admin.jpg" alt="Author">
                                        </div>
                                        <div class="comment-details">
                                            <div class="name-date">
                                                <h5>David Beckham</h5>
                                            </div>
                                            <p>Phasellus nulla diam, pretium sit amet ex vel, feugiat fermentum massa.
                                                Vestibulum blandit</p>
                                            <div class="social-style-two pt-5">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comments pt-20 mb-60 wow fadeInUp delay-0-2s">
                                        <h4 class="comment-title mb-30">3 Comments</h4>
                                        <div class="comment-item">
                                            <div class="author-image">
                                                <img src="assets/images/blog/comment-author1.jpg" alt="Author">
                                            </div>
                                            <div class="comment-details">
                                                <div class="name-date">
                                                    <h5>David Beckham</h5>
                                                    <span class="date">5 days age</span>
                                                </div>
                                                <p>Phasellus nulla diam, pretium sit amet ex vel, feugiat fermentum
                                                    massa. Vestibulum blandit faucibus arcu,</p>
                                                <form action="#">
                                                    <input type="text" required placeholder="Typing ....">
                                                    <button type="submit"><i class="fas fa-paper-plane"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="comment-item child-comment">
                                            <div class="author-image">
                                                <img src="assets/images/blog/comment-author2.jpg" alt="Author">
                                            </div>
                                            <div class="comment-details">
                                                <div class="name-date">
                                                    <h5>David Beckham</h5>
                                                    <span class="date">4 days age</span>
                                                </div>
                                                <p>Phasellus nulla diam, pretium sit amet ex vel, feugiat fermentum
                                                    massa.</p>
                                                <form action="#">
                                                    <input type="text" required placeholder="Typing ....">
                                                    <button type="submit"><i class="fas fa-paper-plane"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="comment-item">
                                            <div class="author-image">
                                                <img src="assets/images/blog/comment-author3.jpg" alt="Author">
                                            </div>
                                            <div class="comment-details">
                                                <div class="name-date">
                                                    <h5>Michael Keaton</h5>
                                                    <span class="date">5 days age</span>
                                                </div>
                                                <p>Phasellus nulla diam, pretium sit amet ex vel, feugiat fermentum
                                                    massa. Vestibulum blandit faucibus arcu,</p>
                                                <form action="#">
                                                    <input type="text" required placeholder="Typing ....">
                                                    <button type="submit"><i class="fas fa-paper-plane"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <form id="comment-page" class="comment-form wow fadeInUp delay-0-2s">
                                        <h4 class="comment-title mb-30">Add Comment</h4>
                                        <div class="row clearfix">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" id="name" name="name"
                                                        class="form-control" placeholder="full name" required="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="email" id="email" name="email"
                                                        class="form-control" placeholder="Email Address"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea name="message" id="message" rows="5" class="form-control" placeholder="comment" required=""></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mb-10">
                                                    <button class="theme-btn" type="submit">post comment</button>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-sidebar">
                            {{-- <div class="widget search-widget wow fadeInUp delay-0-2s">
                                <form action="#">
                                    <input type="search" placeholder="Search....." required>
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div> --}}
                            {{-- <div class="widget category-widget wow fadeInUp delay-0-4s">
                                <h4 class="widget-title">Category</h4>
                                <ul>
                                    <li><a href="blog.html">Web Development</a> <span>05</span></li>
                                    <li><a href="blog.html">UI-UX Designing</a> <span>07</span></li>
                                    <li><a href="blog.html">Cyber Security</a> <span>03</span></li>
                                    <li><a href="blog.html">Software development</a> <span>09</span></li>
                                    <li><a href="blog.html">Digital Marketing</a> <span>05</span></li>
                                </ul>
                            </div> --}}
                            <div class="widget blog-widget wow fadeInUp delay-0-2s">
                                {{-- <h4 class="widget-title">Berita Terkait</h4> --}}
                                <div class="widgets-posts">
                                    {{-- <div class="blog-widget-item">
                                        <div class="image">
                                            <img src="assets/images/widgets/blog1.jpg" alt="Blog">
                                        </div>
                                        <div class="blog-widget-content">
                                            <ul class="blog-meta">
                                                <li><i class="far fa-calendar-alt"></i> <a href="#">18 March,
                                                        2022</a></li>
                                            </ul>
                                            <h5><a href="blog-details.html">Providing brilliant ideas for your
                                                    business</a></h5>
                                        </div>
                                    </div>
                                    <div class="blog-widget-item">
                                        <div class="image">
                                            <img src="assets/images/widgets/blog2.jpg" alt="Blog">
                                        </div>
                                        <div class="blog-widget-content">
                                            <ul class="blog-meta">
                                                <li><i class="far fa-calendar-alt"></i> <a href="#">18 March,
                                                        2022</a></li>
                                            </ul>
                                            <h5><a href="blog-details.html">Providing brilliant ideas for your
                                                    business</a></h5>
                                        </div>
                                    </div>
                                    <div class="blog-widget-item">
                                        <div class="image">
                                            <img src="assets/images/widgets/blog3.jpg" alt="Blog">
                                        </div>
                                        <div class="blog-widget-content">
                                            <ul class="blog-meta">
                                                <li><i class="far fa-calendar-alt"></i> <a href="#">18 March,
                                                        2022</a></li>
                                            </ul>
                                            <h5><a href="blog-details.html">Providing brilliant ideas for your
                                                    business</a></h5>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="more-btn w-100 pt-10 text-center">
                                        <a href="#" class="view-more">Berita Lainnya</a>
                                    </div> --}}
                                </div>
                            </div>
                            {{-- <div class="widget tag-widget wow fadeInUp delay-0-2s">
                                <h4 class="widget-title">Tags</h4>
                                <div class="tag-cloud">
                                    <a href="blog.html">Agency</a>
                                    <a href="blog.html">Designing</a>
                                    <a href="blog.html">apps</a>
                                    <a href="blog.html">Development</a>
                                    <a href="blog.html">Graphics</a>
                                    <a href="blog.html">Cyber Security</a>
                                    <a href="blog.html">Cloud</a>
                                </div>
                            </div>
                            <div class="widget gallery-widget wow fadeInUp delay-0-2s">
                                <h4 class="widget-title">Gallery</h4>
                                <div class="gallery-items">
                                    <div class="gallery-widget-item">
                                        <img src="assets/images/widgets/gallery1.jpg" alt="Gallery">
                                        <a href="assets/images/widgets/gallery1.jpg"><i class="fas fa-plus"></i></a>
                                    </div>
                                    <div class="gallery-widget-item">
                                        <img src="assets/images/widgets/gallery2.jpg" alt="Gallery">
                                        <a href="assets/images/widgets/gallery2.jpg"><i class="fas fa-plus"></i></a>
                                    </div>
                                    <div class="gallery-widget-item">
                                        <img src="assets/images/widgets/gallery3.jpg" alt="Gallery">
                                        <a href="assets/images/widgets/gallery3.jpg"><i class="fas fa-plus"></i></a>
                                    </div>
                                    <div class="gallery-widget-item">
                                        <img src="assets/images/widgets/gallery4.jpg" alt="Gallery">
                                        <a href="assets/images/widgets/gallery4.jpg"><i class="fas fa-plus"></i></a>
                                    </div>
                                    <div class="gallery-widget-item">
                                        <img src="assets/images/widgets/gallery5.jpg" alt="Gallery">
                                        <a href="assets/images/widgets/gallery5.jpg"><i class="fas fa-plus"></i></a>
                                    </div>
                                    <div class="gallery-widget-item">
                                        <img src="assets/images/widgets/gallery6.jpg" alt="Gallery">
                                        <a href="assets/images/widgets/gallery6.jpg"><i class="fas fa-plus"></i></a>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Page End -->


        <!-- Footer Area Start -->
        <footer class="main-footer bg-dark-blue rel z-1 text-white mt-100">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="copyright-area">
                        <p>© 2022. <a href="index.html">BerAKHLAK Provinsi Jawa Timur</a> All rights reserved.</p>
                        {{-- <ul class="footer-menu py-5">
                      <li><a href="contact.html">support</a></li>
                      <li><a href="contact.html">Privacy</a></li>
                      <li><a href="contact.html">policy</a></li>
                    </ul>
                  </div> --}}
                    </div>
                    <img class="half-circle-shape" src="landing-page/assets/images/shapes/half-circle.png"
                        alt="Shape">
                    <img class="triangle-shape" src="landing-page/assets/images/shapes/triangle.png" alt="Shape">
                </div>
        </footer>

    </div>
    <!--End pagewrapper-->

    <!-- Scroll Top Button -->
    <button class="scroll-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></button>


    <!--====== Jquery ======-->
    <script src="{{ asset('landing-page/assets/js/jquery-3.6.0.min.js') }}"></script>
    <!--====== Bootstrap ======-->
    <script src="{{ asset('landing-page/assets/js/bootstrap.min.js') }}"></script>
    <!--====== Appear Js ======-->
    <script src="{{ asset('landing-page/assets/js/appear.min.js') }}"></script>
    <!--====== Slick ======-->
    <script src="{{ asset('landing-page/assets/js/slick.min.js') }}"></script>
    <!--====== Magnific Popup ======-->
    <script src="{{ asset('landing-page/assets/js/jquery.magnific-popup.min.') }}js"></script>
    <!--====== Skill bar ======-->
    <script src="{{ asset('landing-page/assets/js/skill.bars.jquery.min.js') }}"></script>
    <!--  WOW Animation -->
    <script src="{{ asset('landing-page/assets/js/wow.min.js') }}"></script>
    <!-- Custom script -->
    <script src="{{ asset('landing-page/assets/js/script.js') }}"></script>

</body>

</html>
