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
                                    <img src="{{ URL('public_template/img/icon/FA_LOGO_DAT_COSTUME_PNG.png') }}" width="200px" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="javascript:;">Beranda</a></li>
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        <li><a href="https://dayutekno.com">Tentang Kami</a></li>
                                    </ul>
                                </nav>
                            </div>
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

    <!-- slider_area -->
    <div class="slider_area " id="undangan">
        <div class="slider_area_inner slider_bg_1 overlay2">
            <div class="slider_text text-center">
                <div class="text_inner">
                    <img src="{{ URL('public_template/img/banner/ornaments.png') }}" alt="">
                    <h4>UNDANGAN ONLINE</h4>
                    <h3 style="font-size: 20px">Anda & Pasangan Anda <br></h3>

                    <a href="https://api.whatsapp.com/send/?phone=6281904597978&text=Hallo+Darma+Ayu+Tekno+,+Saya+Ingin+membuat+undangan+digital&app_absent=0" class="btn btn-info"><span>Buat Sekarang !</span></a>

                </div>
            </div>
        </div>
    </div>
    <!--/ slider_area -->

    <!-- wedding_countdown -->
    <div class="weeding_countdown_area">
        <div class="flowaers_top d-none d-lg-block">
            <img src="{{ URL('public_template/img/banner/flower-top.png') }}" alt="">
        </div>
        <div class="flowaers_bottom d-none d-lg-block">
                <img src="{{ URL('public_template/img/banner/flower-bottom.png') }}" alt="">
            </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center">
                        <img src="{{ URL('public_template/img/banner/flowers.png') }}" alt="">
                        <span>Mulai dari Rp. 100K</span>
                        <a  href="{{ URL('public_template/files/undangan_paket.pdf') }}" target="_blank" class="btn btn-outline-info text-success"><i class="fa fa-file"></i> <b class="text-success">Lihat Paket</b></a>
                        <a  href="{{ route('/demo') }}" target="_blank" class="btn btn-outline-info text-info mt-3"><i class="fa fa-id-card"></i> <b class="text-info">Lihat Contoh Undangan</b></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ wedding_countdown -->

   <!-- footer_start -->
   <footer class="footer mt-4">

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

    <script>
        $('#clock').countdown('2022/05/29', function (event) {
            $(this).html(event.strftime(
                '<div class="countdown_wrap d-flex"><div  class="single_countdown"><h3>%D</h3><span>Days</span></div><div class="single_countdown"><h3>%H</h3><span>Hours</span></div><div class="single_countdown"><h3>%M</h3><span>Minutes</span></div><div class="single_countdown"><h3>%S</h3><span>Seconds</span></div></div>'
            ));
        });
    </script>
    <script>
        function initMap() {
            var uluru = {
                lat: -25.363,
                lng: 131.044
            };
            var grayStyles = [{
                    featureType: "all",
                    stylers: [{
                            saturation: -90
                        },
                        {
                            lightness: 50
                        }
                    ]
                },
                {
                    elementType: 'labels.text.fill',
                    stylers: [{
                        color: '#ccdee9'
                    }]
                }
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: -31.197,
                    lng: 150.744
                },
                zoom: 9,
                styles: grayStyles,
                scrollwheel: false
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap">
    </script>

</body>

</html>
