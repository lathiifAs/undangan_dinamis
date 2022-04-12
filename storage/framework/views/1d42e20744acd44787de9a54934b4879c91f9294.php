<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Desa Karangsong - Indramayu </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo e(URL('public_template/assets/img/favicon.ico')); ?>">

		<!-- CSS here -->
            <link rel="stylesheet" href="<?php echo e(URL('public_template/assets/css/bootstrap.min.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(URL('public_template/assets/css/owl.carousel.min.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(URL('public_template/assets/css/ticker-style.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(URL('public_template/assets/css/flaticon.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(URL('public_template/assets/css/slicknav.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(URL('public_template/assets/css/animate.min.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(URL('public_template/assets/css/magnific-popup.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(URL('public_template/assets/css/fontawesome-all.min.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(URL('public_template/assets/css/themify-icons.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(URL('public_template/assets/css/slick.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(URL('public_template/assets/css/nice-select.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(URL('public_template/assets/css/style.css')); ?>">
   </head>

   <body>

    <!-- Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?php echo e(URL('public_template/assets/img/logo/logo.png')); ?>" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>

    $(document).ready(function () {
        display_ct();
    });

    function display_c(){
        var refresh=1000; // Refresh rate in milli seconds
        mytime=setTimeout('display_ct()',refresh)
    }

    function display_ct() {
        var x = new Date()
        document.getElementById('ct').innerHTML = x;
        display_c();
    }
    </script>
    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top black-bg d-none d-md-block">
                   <div class="container">
                       <?php
                           $mytime = Carbon\Carbon::now();
                       ?>
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        <li><img src="<?php echo e(URL('public_template/assets/img/icon/header_icon1.png')); ?>" alt="">34ºc, Sunny </li>
                                        <li><img src="<?php echo e(URL('public_template/assets/img/icon/sand-clock.png')); ?>" alt="" height="20px"><label for="" id="ct" class="text-white"> </label></li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                       <li> <a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
                <div class="header-mid d-none d-md-block">
                   <div class="container">
                        <div class="row d-flex align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="index.html"><img src="<?php echo e(URL('public_template/assets/img/icon/logo_karangsong_2.png')); ?>" width="230px" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="header-banner f-right ">
                                    <img src="<?php echo e(URL('public_template/assets/img/icon/cimanuk.png')); ?>" height="90px" alt="">
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
               <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                                <!-- sticky -->
                                    <div class="sticky-logo">
                                        <a href="index.html"><img src="<?php echo e(URL('public_template/assets/img/icon/logo_karangsong_2.png')); ?>"  width="230px" alt=""></a>
                                    </div>
                                <!-- Main-menu -->
                                <?php echo $__env->make('template_public.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-4">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <i class="fas fa-search special-tag"></i>
                                    <div class="search-box">
                                        <form action="#">
                                            <input type="text" placeholder="Search">

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
    <?php echo $__env->yieldContent('konten'); ?>

   <footer>
       <!-- Footer Start-->
       <div class="footer-area footer-padding fix">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12">
                        <div class="single-footer-caption">
                            <div class="single-footer-caption">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="<?php echo e(URL('public_template/assets/img/icon/logo-karangsong-white-2.png')); ?>" height="100px" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Jl. Pantai Song, Karangsong, Kec. Indramayu, Kabupaten Indramayu, Jawa Barat 45219.</p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4  col-sm-6">
                        <div class="single-footer-caption mt-60">
                            <div class="footer-tittle">
                                <h4>Berita Terbaru</h4>
                                <p>Subscribe untuk mendapatkan notifikasi berita terbaru.</p>
                                <!-- Form -->
                                <div class="footer-form" >
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                        method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                            class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = ' Email Address '">
                                            <div class="form-icon">
                                            <button type="submit" name="submit" id="newsletter-submit"
                                            class="email_icon newsletter-submit button-contactForm"><img src="<?php echo e(URL('public_template/assets/img/logo/form-iocn.png')); ?>" alt=""></button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50 mt-60">
                            <div class="footer-tittle">
                                <h4>Instagram Feed</h4>
                            </div>
                            <div class="instagram-gellay">
                                <ul class="insta-feed">
                                    <li><a href="#"><img src="<?php echo e(URL('public_template/assets/img/post/instra1.jpg')); ?>" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo e(URL('public_template/assets/img/post/instra2.jpg')); ?>" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo e(URL('public_template/assets/img/post/instra3.jpg')); ?>" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo e(URL('public_template/assets/img/post/instra4.jpg')); ?>" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo e(URL('public_template/assets/img/post/instra5.jpg')); ?>" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo e(URL('public_template/assets/img/post/instra6.jpg')); ?>" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <!-- footer-bottom aera -->
       <div class="footer-bottom-area">
           <div class="container">
               <div class="footer-border">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://dayutekno.com" target="_blank">Darma Ayu Tekno</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="footer-menu f-right">
                                <ul>
                                    <li><a href="#">Terms of use</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
       </div>
       <!-- Footer End-->
   </footer>

	<!-- JS here -->

		<!-- All JS Custom Plugins Link Here here -->
        <script src="<?php echo e(URL('/public_template/assets/js/vendor/modernizr-3.5.0.min.js')); ?>"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="<?php echo e(URL('/public_template/assets/js/vendor/jquery-1.12.4.min.js')); ?>"></script>
        <script src="<?php echo e(URL('/public_template/assets/js/popper.min.js')); ?>"></script>
        <script src="<?php echo e(URL('/public_template/assets/js/bootstrap.min.js')); ?>"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="<?php echo e(URL('/public_template/assets/js/jquery.slicknav.min.js')); ?>"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="<?php echo e(URL('/public_template/assets/js/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(URL('/public_template/assets/js/slick.min.js')); ?>"></script>
        <!-- Date Picker -->
        <script src="<?php echo e(URL('/public_template/assets/js/gijgo.min.js')); ?>"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="<?php echo e(URL('/public_template/assets/js/wow.min.js')); ?>"></script>
		<script src="<?php echo e(URL('/public_template/assets/js/animated.headline.js')); ?>"></script>
        <script src="<?php echo e(URL('/public_template/assets/js/jquery.magnific-popup.js')); ?>"></script>

        <!-- Breaking New Pluging -->
        <script src="<?php echo e(URL('/public_template/assets/js/jquery.ticker.js')); ?>"></script>
        <script src="<?php echo e(URL('/public_template/assets/js/site.js')); ?>"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="<?php echo e(URL('/public_template/assets/js/jquery.scrollUp.min.js')); ?>"></script>
        <script src="<?php echo e(URL('/public_template/assets/js/jquery.nice-select.min.js')); ?>"></script>
		<script src="<?php echo e(URL('/public_template/assets/js/jquery.sticky.js')); ?>"></script>

        <!-- contact js -->
        <script src="<?php echo e(URL('/public_template/assets/js/contact.js')); ?>"></script>
        <script src="<?php echo e(URL('/public_template/assets/js/jquery.form.js')); ?>"></script>
        <script src="<?php echo e(URL('/public_template/assets/js/jquery.validate.min.js')); ?>"></script>
        <script src="<?php echo e(URL('/public_template/assets/js/mail-script.js')); ?>"></script>
        <script src="<?php echo e(URL('/public_template/assets/js/jquery.ajaxchimp.min.js')); ?>"></script>

		<!-- Jquery Plugins, main Jquery -->
        <script src="<?php echo e(URL('/public_template/assets/js/plugins.js')); ?>"></script>
        <script src="<?php echo e(URL('/public_template/assets/js/main.js')); ?>"></script>

        <?php echo $__env->yieldPushContent('custom-scripts'); ?>


    </body>
</html>
<?php /**PATH D:\Work\CV\Proyek\Laravel\website-desa\resources\views/template_public/template.blade.php ENDPATH**/ ?>