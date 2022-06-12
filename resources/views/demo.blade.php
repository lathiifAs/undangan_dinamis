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

    <style>
        .modal-backdrop {
        z-index: 1000;
        }
    </style>



    <!-- <link rel="stylesheet" href="{{ URL('public_template/css/responsive.css') }}"> -->
</head>

<body>

    <nav class="navbar navbar-dark navbar-expand d-md-none d-lg-none d-xl-none fixed-bottom" style="background-color: #C78665">
        <ul class="navbar-nav nav-justified w-100">
          <li class="nav-item">
            <a href="#awal" class="nav-link"><i class="fa fa-id-card text-white"></i></a>
          </li>
          <li class="nav-item">
            <a href="#pengantin" class="nav-link text-white"><i class="fa fa-user text-white"></i></a>
          </li>
          {{-- <li class="nav-item">
            <a href="#" class="nav-link text-white"><i class="fa fa-book text-white"></i></a>
          </li> --}}
          <li class="nav-item">
            <a href="#prewedding" class="nav-link text-white"><i class="fa fa-picture-o text-white"></i></a>
          </li>
          <li class="nav-item">
            <a href="#acara" class="nav-link text-white"><i class="fa fa-calendar text-white"></i></a>
          </li>
          <li class="nav-item">
            <a href="#lokasi" class="nav-link text-white"><i class="fa fa-map-marker text-white"></i></a>
          </li>
          {{-- <li class="nav-item">
            <a href="#" class="nav-link text-white"><i class="fa fa-credit-card text-white"></i></a>
          </li> --}}
        </ul>
      </nav>

    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-->
    <header>
        <div class="header-area" id="awal">
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="{{ URL('public_template/img/icon/FA_LOGO_DAT_COSTUME_PNG.png') }}" alt="" width="150px">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="index.html">Home</a></li>
                                        <li><a href="#">Buat Undangan</a></li>
                                        <li><a href="#">Tentang Kami</a></li>
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
    <div class="slider_area ">
        <div class="slider_area_inner overlay2" style=" background-image: url({{ URL('public_template/img/gallery/7.png') }});">
            <div class="slider_text text-center">
                <div class="text_inner">
                    <img src="{{ URL('public_template/img/banner/ornaments.png') }}" alt="">
                    <h4>14 Jan 2023</h4>
                    <h3>Anjelina & Jack <br>
                        &nbsp; </h3>
                    <span>The Wedding</span>
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
                        <span>14. January. 2023</span>
                        <h3>Hitung Mundur Tanggal</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div id="clock" class="countdown_area counter_bg ">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ wedding_countdown -->

    <!-- our_love-story -->
    <div class="love_story_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 mt-2">
                    <div class="section_title text-center">
                        <img src="{{ URL('public_template/img/banner/flowers.png') }}" alt="">
                        <div class="single_time_line">
                            <p>Dengan memohon rahmat dan ridho Allah SWT, Kami bermaksud menyelenggarakan pernikahan
                                kami.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="weding_time_line text-center">
                        <div class="single_time_line">
                            <h3>بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيْم</h3>
                            <p>"Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia
                                menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan
                                merasa
                                tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. Sungguh, pada
                                yang
                                demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang
                                berpikir."
                                (QS. Ar-Rum 30: Ayat 21)</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12">
                    <div class="section_title text-center">
                        <img src="{{ URL('public_template/img/banner/flowers.png') }}" alt="">
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 col-lg-4" id="pengantin">
                    <div class="single_lover_story text-center">
                        <div class="story_thumb">
                            <img src="{{ URL('public_template/img/story/1.png') }}" alt="">
                        </div>
                        <span>Pengantin Pria</span>
                        <h3>Jack Wonner</h3>
                        <p>Putra ke-4 dari Drs. H. .... , Mp.d dan Ibu Hj. .... , S.Ag.</p>
                        <div class="social_links">
                            <ul>
                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4">
                    <div class="single_lover_story text-center">
                        <div class="story_thumb">
                            <img src="{{ URL('public_template/img/story/2.png') }}" alt="">
                        </div>
                        <span>Pengantin Wanita</span>
                        <h3>Anjelina Kona</h3>
                        <p>Putri ke-2 dari Bpk ..... dan Ibu ....</p>
                        <div class="social_links">
                            <ul>
                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ our_love-story -->

    <!-- our_love-story -->
    <div class="love_story_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center">
                        <img src="{{ URL('public_template/img/banner/flowers.png') }}" alt="">
                        <h3>Cerita Cinta</h3>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="weding_time_line text-center">
                        <div class="single_time_line">
                            <h3>Pertemuan</h3>
                            <p>Pertemuan singkat berawal dari Media sosial dalam berapa waktu kami bertemu di rumah mempelai wanita untuk mengenal lebih dekat, selain itu kami
                                mencari tempat yang cocok untuk berbagi cerita dan pengalaman.</p>
                        </div>
                        <div class="single_time_line">
                            <h3>Menjalin Hubungan (Pacaran)</h3>
                            <p>Setelah kurang lebih 3 minggu kita menjalin komunikasi dengan intens kita pun bersepakat untuk mengenal lebih dalam dengan huungan pacaran.</p>
                        </div>
                        <div class="single_time_line">
                            <h3>Tunangan</h3>
                            <p>Dalam berjalannya 1 tahun kita memutuskan untuk saling mengikat agar saling terjaganya kedua hubungan, kami bertunangan pada tanggal 2 September 2021.</p>
                        </div>
                        <div class="single_time_line">
                            <h3>Lamaran</h3>
                            <p>Many variations of passages of Lorem Ipsum available, but the majority have suffered
                                alteration in some.</p>
                        </div>
                        <div class="single_time_line">
                            <h3>Hari Pernikahan</h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--/ our_love-story -->

    <!-- gallery_area  -->
    <div class="gallery_area" id="prewedding">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center">
                        <img src="{{ URL('public_template/img/banner/flowers.png') }}" alt="">
                        <h3>Foto Prewedding</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="row grid no-gutters">
                <div class="col-xl-4 col-md-6 col-lg-6 grid-item">
                    <div class="single_gallery gallery_imag_1">
                        <a class="popup-image" href="{{ URL('public_template/img/gallery/1.png') }}">
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6 grid-item">
                    <div class="single_gallery gallery_imag_2">
                        <a class="popup-image" href="{{ URL('public_template/img/gallery/2.png') }}">
                        </a>
                    </div>
                </div>
                <div class="col-xl-5 col-md-6 col-lg-6 grid-item">
                    <div class="single_gallery gallery_imag_3">
                        <a class="popup-image" href="{{ URL('public_template/img/gallery/3.png') }}">
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6 grid-item">
                    <div class="single_gallery gallery_imag_4">
                        <a class="popup-image" href="{{ URL('public_template/img/gallery/4.png') }}">
                        </a>
                    </div>
                </div>
                <div class="col-xl-5 col-md-6 col-lg-6 grid-item">
                    <div class="single_gallery gallery_imag_5">
                        <a class="popup-image" href="{{ URL('public_template/img/gallery/5.png') }}">
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-6 grid-item">
                    <div class="single_gallery gallery_imag_6">
                        <a class="popup-image" href="{{ URL('public_template/img/gallery/6.png') }}">
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-6 grid-item">
                    <div class="single_gallery gallery_imag_7">
                        <a class="popup-image" href="{{ URL('public_template/img/gallery/7.png') }}">
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6 grid-item">
                    <div class="single_gallery gallery_imag_8">
                        <a class="popup-image" href="{{ URL('public_template/img/gallery/8.png') }}">
                        </a>
                    </div>
                </div>
                <div class="col-xl-5 col-md-6 col-lg-6 grid-item">
                    <div class="single_gallery gallery_imag_9">
                        <a class="popup-image" href="{{ URL('public_template/img/gallery/9.png') }}"></a>
                    </div>
                </div>
            </div>
            <!-- <div class="grid row">
                <div class="single_image grid-item">
                    <img src="{{ URL('public_template/img/gallery/1.png') }}" alt="">
                </div><div class="single_image grid-item">
                    <img src="{{ URL('public_template/img/gallery/2.png') }}" alt="">
                </div><div class="single_image grid-item">
                    <img src="{{ URL('public_template/img/gallery/3.png') }}" alt="">
                </div>
            </div> -->


        </div>
    </div>
    <!--/ gallery_area  -->

    <!-- program_details -->
    <div class="program_details_area" id="acara">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center">
                        <img src="{{ URL('public_template/img/banner/flowers.png') }}" alt="">
                        <h3>Acara Pernikahan</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <div class="single_program program_bg_1 text-center">
                        <div class="program_inner ">
                            <span>
                                <h5>
                                    Minggu 27 Oktober 2023 <p> 20:00 - 22:00</p>
                                </h5>
                            </span>
                            <h3>Akad Nikah</h3>
                            <p>Jl. Karangsong Blok Sawah Sekotak Rt.04 Rw.01 Kec. Indramayu Kab. Indramayu, Jawa Barat
                            </p>
                            <a href="https://www.google.com/maps/@-6.3343491,108.3339911,3a,75y,114.54h,78.52t/data=!3m6!1e1!3m4!1szprUTg9JLgQYA3s4qmK5eg!2e0!7i13312!8i6656"
                                class="boxed_btn3"><i class="fa fa-home"></i>
                                <h5 class="text-white"> Lihat Rumah Hajat</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="single_program program_bg_2 text-center">
                        <div class="program_inner ">
                            <span>
                                <h5>
                                    Minggu 27 Oktober 2023 <p> 20:00 - 22:00</p>
                                </h5>
                            </span>
                            <h3>Resepsi</h3>
                            <p>Jl. Karangsong Blok Sawah Sekotak Rt.04 Rw.01 Kec. Indramayu Kab. Indramayu, Jawa Barat
                            </p>
                            <a href="https://www.google.com/maps/@-6.3343491,108.3339911,3a,75y,114.54h,78.52t/data=!3m6!1e1!3m4!1szprUTg9JLgQYA3s4qmK5eg!2e0!7i13312!8i6656"
                                class="boxed_btn3"><i class="fa fa-home"></i>
                                <h5 class="text-white"> Lihat Rumah Hajat</h5>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="row" id="lokasi">
            <div class="col-xl-12">
                <div class="section_title text-center">
                    <h3>Lokasi Hajat</h3>
                </div>

                <div id="googleMap" style="width:100%;height:380px;"></div>
                <center>
                    <a href="http://maps.google.co.uk/maps?q=-6.3343491,108.3339911"
                        class="btn mt-3 btn-outline-info"><i class="fa fa-map-marker"></i> Buka Dari Google Map</a>
                </center>
            </div>
        </div>
    </div>
    <!--/ program_details -->

    <div class="container">
        <div class="row">
            <div class="col-xl-12 mt-2">
                <div class="section_title text-center">
                    <img src="{{ URL('public_template/img/banner/flowers.png') }}" alt="">
                    <div class="single_time_line">
                        <p>Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila
                            Bapak/Ibu/Saudara/i berkenan hadir untuk memberikan Do'a restu kepada kami.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <center>
        <div class="attending_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main_attending_area">
                            <div class="row justify-content-center">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="popup_box ">
                                        <div class="popup_inner">
                                            <div class="form_heading text-center">
                                                <p>Kami yang berbahagia</p>

                                                <div class="row">
                                                    <div class="col">
                                                        <p>Keluarga Besar <br> Bapak .....</p>
                                                    </div>
                                                    <div class="col">
                                                        <p>Keluarga Besar <br> Bapak .....</p>
                                                    </div>
                                                </div>

                                                <p>Turut Mengundang</p>
                                                <p>- A <br>
                                                    - B <br>
                                                    - C
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>


    <div class="row">
        <div class="col-xl-12">
            <div class="section_title text-center">
                <h3>Berhalangan Hadir?</h3>
            </div>
        </div>
    </div>

    <center>
        <div class="attending_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main_attending_area">
                            <div class="row justify-content-center">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="popup_box ">
                                        <div class="popup_inner">
                                            <div class="form_heading text-center">
                                                <p>Anda dapat memberikan angpao via rekening berikut</p>

                                                <div class="row">
                                                    <div class="col">
                                                        <img src="{{ URL('public_template/img/icon/bri.png') }}" width="140px" alt="">
                                                        <br>
                                                        <p style="padding-top: 7px">Lathiif Aji Santhosho <br>
                                                            123 3323 333 2</p>
                                                    </div>
                                                </div>

                                                <div class="row">

                                                    <div class="col">
                                                        <img src="{{ URL('public_template/img/icon/mandiri.png') }}" width="160px" alt="">
                                                        <br>
                                                        <p style="padding-top: 7px">Lathiif Aji Santhosho <br>
                                                            123 3323 333 2</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>


    <!-- attend_area -->
    <div class="attending_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                    <div class="main_attending_area">
                        <div class="flower_1 d-none d-lg-block">
                            <img src="{{ URL('public_template/img/appointment/flower-top.png') }}" alt="">
                        </div>
                        <div class="flower_2 d-none d-lg-block">
                            <img src="{{ URL('public_template/img/appointment/flower-bottom.png') }}" alt="">
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-7 col-lg-8">
                                <div class="popup_box ">
                                    <div class="popup_inner">
                                        <div class="form_heading text-center">
                                            <h3>Memiliki kalimat indah?</h3>
                                            <p>Berikan ucapan untuk mempelai pengantin</p>
                                        </div>
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <input type="text" placeholder="Nama">
                                                </div>
                                                <div class="col-xl-12">
                                                    <input type="text" placeholder="Alamat">
                                                </div>
                                                <div class="col-xl-12">
                                                    <select class="form-select wide" id="default-select" class="">
                                                        <option data-display="Tidak Hadir">Tidak Hadir</option>
                                                        <option value="1">Hadir</option>
                                                    </select>
                                                </div>
                                                <div class="col-xl-12">
                                                    <textarea placeholder="Tulis ucapan mu..."></textarea>
                                                </div>
                                                <div class="col-xl-12">
                                                    <button type="submit" class="boxed_btn3">Kirim</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / attend_area -->

    <!-- footer_start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="quick_links">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Buat Undangan</a></li>
                                <li><a href="#">Tentang Kami</a></li>
                            </ul>
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
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script> All rights reserved | This
                            website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
                                href="https://dayutekno.com" target="_blank">Darma Ayu Tekno</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Button trigger modal -->


 <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Protokol Kesehatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="{{ URL('public_template/img/gallery/kesehatan.png') }}" alt="groom" width="360px" class="img-responsive">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="bt" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- footer_end -->

    <!-- modal -->

    <!--<div class="modal fade  bd-example-modal-lg" tabindex="-1" role="dialog" id="banner_undangan" aria-labelledby="myLargeModalLabel" aria-hidden="true">-->
    <!--  <div class="modal-dialog modal-lg  modal-dialog-centered">-->
    <!--    <div class="modal-content">-->
    <!--        testing-->
    <!--        <button type="button" id="bt" data-toggle="modal" data-target="#banner_undangan">testing audio</button>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->

    <!-- Modal -->


    <iframe src="{{ URL('public_template/lagu/Melepas-Lajang.mp3') }}" allow="autoplay" style="display:none" id="iframeAudio">
</iframe>

<audio autoplay loop  id="au">
    <source src="{{ URL('public_template/lagu/Melepas-Lajang.mp3') }}">
</audio>

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
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC87B6-SQkeq3eHIt6R6kbapYjZsEhJd6I&callback=initialize">
        </script>

    <script>


        $(document).ready(function() {

           $('#exampleModalLong').appendTo("body").modal('show');

        //     $('#banner_undangan').modal('show');
        // //     var lagu = new Audio("lagu/Melepas-Lajang.mp3");
        // //     lagu.play();
        });

        const audio = document.getElementById("au");
        let bt = document.getElementById("bt");
        console.log(audio);
        bt.addEventListener("click", ()=>{
          audio.play();
        });
        const startPlaying = ()=>{
          audio.removeEventListener('playing', startPlaying);
          bt.classList.add("hide");
          audio.src = 'lagu/Melepas-Lajang.mp3';
          audio.play();
        }
        audio.addEventListener('playing', startPlaying);
        audio.addEventListener('error', ()=>{
          console.log("error");
        });


        $('#clock').countdown('2023/01/07', function (event) {
            $(this).html(event.strftime(
                '<div class="countdown_wrap d-flex"><div  class="single_countdown"><h3>%D</h3><span>Days</span></div><div class="single_countdown"><h3>%H</h3><span>Hours</span></div><div class="single_countdown"><h3>%M</h3><span>Minutes</span></div><div class="single_countdown"><h3>%S</h3><span>Seconds</span></div></div>'
            ));
        });

        function initialize() {
            var propertiPeta = {
                center: new google.maps.LatLng(-6.3343549, 108.3339911),
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

            // membuat Marker
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(-6.3343549, 108.3339911),
                map: peta
            });
        }

    </script>
    <!-- <script>
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
    </script> -->


</body>


</html>
