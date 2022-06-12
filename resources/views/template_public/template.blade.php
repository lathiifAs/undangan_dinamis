<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Weeding</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="{{ URL('public_template/img/favicon.png') }}"> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ URL('public_template/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL('public_template/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL('public_template/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ URL('public_template/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL('public_template/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ URL('public_template/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ URL('public_template/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ URL('public_template/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ URL('public_template/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ URL('public_template/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ URL('public_template/css/style.css') }}">
    <!-- <link rel="stylesheet" href="{{ URL('public_template/css/responsive.css') }}"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="{{ URL('public_template/img/logo.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            @include('template_public.sidebar')
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--/ header-->

    @yield('konten')

   <!-- footer_start -->
   <footer class="footer mt-4">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="quick_links">
                        {{-- <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Our Story</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Accommodation</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | </i> by <a href="https://dayutekno.com" target="_blank">Darma Ayu Tekno</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer_end -->

    <!-- JS here -->
    <script src="{{ URL('public_template/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ URL('public_template/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ URL('public_template/js/popper.min.js') }}"></script>
    <script src="{{ URL('public_template/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL('public_template/js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL('public_template/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ URL('public_template/js/ajax-form.js') }}"></script>
    <script src="{{ URL('public_template/js/waypoints.min.js') }}"></script>
    <script src="{{ URL('public_template/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ URL('public_template/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ URL('public_template/js/scrollIt.js') }}"></script>
    <script src="{{ URL('public_template/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ URL('public_template/js/wow.min.js') }}"></script>
    <script src="{{ URL('public_template/js/nice-select.min.js') }}"></script>
    <script src="{{ URL('public_template/js/gijgo.min.js') }}"></script>
    <script src="{{ URL('public_template/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ URL('public_template/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ URL('public_template/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL('public_template/js/plugins.js') }}"></script>

    <!--contact js-->
    <script src="{{ URL('public_template/js/contact.js') }}"></script>
    <script src="{{ URL('public_template/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ URL('public_template/js/jquery.form.js') }}"></script>
    <script src="{{ URL('public_template/js/jquery.validate.min.js') }}"></script>
    <script src="{{ URL('public_template/js/mail-script.js') }}"></script>

    <script src="{{ URL('public_template/js/main.js') }}"></script>


    @stack('custom-scripts')

</body>

</html>
