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

        <!-- Blog Page Start -->
        <section class="services-area py-140 rpy-100">
            <div class="container">
                <div class="row blog-row">
                    <div class="col">
                        <div class="blog-details-content rmb-75">
                            <div class="blog-item">
                                <div class="image wow fadeInUp delay-0-2s">
                                    @if ($n->foto_berita)
                                        <img src={{ asset($n->foto_berita) }} alt="Blog">
                                    @else
                                        <img src="{{ asset('../public/img/background/cover-login.jpg') }}"
                                            alt="">
                                    @endif
                                </div>
                                <div class="blog-content wow fadeInUp delay-0-2s">
                                    <ul class="blog-meta">
                                        <li><i class="far fa-calendar-alt"></i> <a
                                                href="#">{{ $n->tanggal_berita }}</a>
                                        </li>
                                    </ul>
                                    <h3>{{ $n->judul_berita }} </h3>
                                    {!! $n->isi_berita !!}
                                </div>
                            </div>
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
                    </div>
                </div>
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
