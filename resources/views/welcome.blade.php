@extends('template_public.template')

@section('konten')
    <main>
        <!-- Trending Area Start -->
        <div class="trending-area fix">
            <div class="container">
                <div class="trending-main">
                    <!-- Trending Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="trending-tittle">
                                <strong>Trending Saat Ini</strong>
                                <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                                <div class="trending-animated">
                                    <ul id="js-news" class="js-hidden">
                                        <li class="news-item">Festival Tari Topeng Kelana.</li>
                                        <li class="news-item">Kuliner Terbaik di Indramayu.</li>
                                        <li class="news-item">Pelelangan Ikan Terbesar di Jawa Barat.</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: -30px">
                        <div class="col-lg-12">
                            <!-- Trending Top -->
                            <div id="carouselExampleControls" class="carousel slide mb-4" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ URL('public_template/assets/img/banner/kantor_1.jpeg') }}"
                                            height="500px" class="d-block w-100" alt="">
                                        <div class="carousel-caption d-none d-md-block mt-5">
                                            <h5 class="text-white">Kantor Desa Karangsong</h5>
                                            <p class="text-white text-mute"></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ URL('public_template/assets/img/banner/kantor_2.jpeg') }}"
                                            height="500px" class="d-block w-100" alt="">
                                        <div class="carousel-caption d-none d-md-block mt-5">
                                            <h5 class="text-white">Kantor Desa Karangsong</h5>
                                            <p class="text-white text-mute"></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ URL('public_template/assets/img/banner/hutan_mangrove.jpg') }}"
                                            height="500px" class="d-block w-100" alt="">
                                        <div class="carousel-caption d-none d-md-block mt-5">
                                            <h5 class="text-white">Hutam Mangrove</h5>
                                            <p class="text-white text-mute">Eko Wisata Karangsong yang Rindang.</p>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>


                            {{-- <div class="trending-top mb-30">
                            <div class="trend-top-img">
                                <img src="{{ URL('public_template/assets/img/gallery/karangsong.jpeg')}}" height="520px" alt="">
                                <div class="trend-top-cap">
                                    <span>Appetizers</span>
                                    <h2><a href="details.html">Hutan Mangrove<br> Karangsong Indramayu, Jawa Barat</a></h2>
                                </div>
                            </div>
                        </div> --}}
                            <!-- Trending Bottom -->
                            {{-- <div class="trending-bottom">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30">
                                                <img src="{{ URL('public_template/assets/img/trending/nadran.jpg') }}"
                                                    height="240" alt="">
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <span class="color1">Budaya</span>
                                                <h4><a href="details.html">Festival Nadran.</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30">
                                                <img src="{{ URL('public_template/assets/img/trending/pindang_gombyang.jpg') }}"
                                                    height="240" alt="">
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <span class="color2">Kuliner</span>
                                                <h4>
                                                    <h4><a href="details.html">Makanan Terbaik di Indramayu.</a></h4>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30">
                                                <img src="{{ URL('public_template/assets/img/trending/tpi.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <span class="color3">Ekonomi</span>
                                                <h4><a href="details.html"> Tempat Pelelangan Ikan Terbesar di Jawa
                                                        Barat.</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <!-- Riht content -->
                        <!-- <div class="col-lg-4">
                                            <div class="trand-right-single d-flex">
                                                <div class="trand-right-img">
                                                    <img src="{{ URL('public_template/assets/img/trending/right1.jpg') }}" alt="">
                                                </div>
                                                <div class="trand-right-cap">
                                                    <span class="color1">Concert</span>
                                                    <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                                                </div>
                                            </div>
                                            <div class="trand-right-single d-flex">
                                                <div class="trand-right-img">
                                                    <img src="{{ URL('public_template/assets/img/trending/right2.jpg') }}" alt="">
                                                </div>
                                                <div class="trand-right-cap">
                                                    <span class="color3">sea beach</span>
                                                    <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                                                </div>
                                            </div>
                                            <div class="trand-right-single d-flex">
                                                <div class="trand-right-img">
                                                    <img src="{{ URL('public_template/assets/img/trending/right3.jpg') }}" alt="">
                                                </div>
                                                <div class="trand-right-cap">
                                                    <span class="color2">Bike Show</span>
                                                    <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                                                </div>
                                            </div>
                                            <div class="trand-right-single d-flex">
                                                <div class="trand-right-img">
                                                    <img src="{{ URL('public_template/assets/img/trending/right4.jpg') }}" alt="">
                                                </div>
                                                <div class="trand-right-cap">
                                                    <span class="color4">See beach</span>
                                                    <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                                                </div>
                                            </div>
                                            <div class="trand-right-single d-flex">
                                                <div class="trand-right-img">
                                                    <img src="{{ URL('public_template/assets/img/trending/right5.jpg') }}" alt="">
                                                </div>
                                                <div class="trand-right-cap">
                                                    <span class="color1">Skeping</span>
                                                    <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Trending Area End -->

        <!-- Whats New Start -->
        <section class="whats-news-area pt-50 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row d-flex justify-content-between">
                            <div class="col-lg-3 col-md-3">
                                <div class="section-tittle mb-30">
                                    <h3>Berita Terbaru</h3>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9">
                                <div class="properties__button">
                                    <!--Nav Button  -->
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                                href="#nav-home" role="tab" aria-controls="nav-home"
                                                aria-selected="true">Semua</a>
                                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                                href="#nav-profile" role="tab" aria-controls="nav-profile"
                                                aria-selected="false">Ekonomi</a>
                                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                                href="#nav-contact" role="tab" aria-controls="nav-contact"
                                                aria-selected="false">Kriminal</a>
                                            <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab"
                                                href="#nav-last" role="tab" aria-controls="nav-contact"
                                                aria-selected="false">Pidana</a>
                                            <a class="nav-item nav-link" id="nav-technology" data-toggle="tab"
                                                href="#nav-techno" role="tab" aria-controls="nav-contact"
                                                aria-selected="false">Teknologi</a>
                                        </div>
                                    </nav>
                                    <!--End Nav Button  -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <!-- Nav Card -->
                                <div class="tab-content" id="nav-tabContent">
                                    <!-- card one -->
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-home-tab">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="{{ URL('public_template/assets/img/news/pembuatan_kapal.jpg') }}"
                                                                height="250px" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Ekonomi</span>
                                                            <h4><a href="#">Pembuatan Kapal Memuncak</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="{{ URL('public_template/assets/img/news/korupsi.jpeg') }}"
                                                                height="250px" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Pidana</span>
                                                            <h4><a href="#">4 Tersangka Korupsi Corona Ditangkap</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="{{ URL('public_template/assets/img/news/kiyai.jpg') }}"
                                                                height="250px" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Kriminal</span>
                                                            <h4><a href="#">Pembacokan Kiyai di Indramayu</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="{{ URL('public_template/assets/img/news/nelayan.jpeg') }}"
                                                                height="250px" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Ekonomi</span>
                                                            <h4><a href="#">Nelayan Susah Mendapatkan Solar</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card two -->
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                        aria-labelledby="nav-profile-tab">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card three -->
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                        aria-labelledby="nav-contact-tab">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card fure -->
                                    <div class="tab-pane fade" id="nav-last" role="tabpanel"
                                        aria-labelledby="nav-last-tab">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card Five -->
                                    <div class="tab-pane fade" id="nav-nav-Sport" role="tabpanel"
                                        aria-labelledby="nav-Sports">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card Six -->
                                    <div class="tab-pane fade" id="nav-techno" role="tabpanel"
                                        aria-labelledby="nav-technology">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Nav Card -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">

                        <!-- New Poster -->
                        <div class="news-poster d-none d-lg-block">
                            <div class="card">
                                <div class="card-header">
                                    BUKU MONOGRAFI DESA
                                </div>
                                <div class="card-body">
                                    <b>Nama Desa :</b> KARANGSONG <br>
                                    <b>Tahun Pembentukan :</b> 1983 <br>
                                    <b>Dasar Hukum pembentukan :</b> PEMEKARAN DESA <br>
                                    <b>Nomor Kode Wilayah :</b> 2019 <br>
                                    <b>Nomor Kode Pos :</b> 45219 <br>
                                    <b>Kecamatan :</b> INDRAMAYU <br>
                                    <b>Kabupaten / Kota :</b> INDRAMAYU <br>
                                    <b>Provinsi :</b> JAWA BARAT <br>
                                </div>
                            </div>
                        </div>

                        <!-- Section Tittle -->
                        <div class="section-tittle mb-20 mt-5">
                            <h3>Ikuti Kami</h3>
                        </div>
                        <!-- Flow Socail -->
                        <div class="single-follow mb-45">
                            <div class="single-box">
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="{{ URL('public_template/assets/img/news/icon-fb.png') }}"
                                                height="30px" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="{{ URL('public_template/assets/img/news/icon-tw.png') }}"
                                                height="30px" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>Karangsong</span>
                                        <p>Twitter</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center mt-4">
                                    <div class="follow-social">
                                        <a href="#"><img src="{{ URL('public_template/assets/img/news/icon-ins.png') }}"
                                                height="30px" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>Karangsong</span>
                                        <p>Instagram</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center mt-4">
                                    <div class="follow-social">
                                        <a href="#"><img src="{{ URL('public_template/assets/img/news/icon-yo.png') }}"
                                                height="30px" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>Karangsong Channel</span>
                                        <p>Youtube</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center mt-4">
                                    <div class="follow-social">
                                        <a href="#"><img
                                                src="{{ URL('public_template/assets/img/news/icon-tiktok.png') }}"
                                                height="30px" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>Karangsong</span>
                                        <p>Tiktok</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center mt-4">
                                    <div class="follow-social">
                                        <a href="#"><img src="{{ URL('public_template/assets/img/news/icon-web.png') }}"
                                                height="30px" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>karangsong.com</span>
                                        <p>Website</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Whats New End -->

        <div class="weekly-news-area pt-50">
            <div class="container">
                <div class="weekly-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>Anggaran APBDes Pertahun</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <canvas id="myChart" width="300" height="150"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--   Weekly-News start -->
        <div class="weekly-news-area pt-50">
            <div class="container">
                <div class="weekly-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>Struktur Organisasi Desa dan BPD</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <img src="{{ URL('public_template/assets/img/struktur/desa.jpeg') }}" height="90%"
                                class="w-100" alt="">
                        </div>
                        <div class="col-8">
                            <img src="{{ URL('public_template/assets/img/struktur/bpd.jpg') }}" class="w-100"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- End Weekly-News -->


        <div class="weekly2-news-area  weekly2-pading gray-bg">
            <div class="container">
                <div class="weekly2-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>Letak Darurat</h3>
                            </div>
                        </div>
                    </div>
                    <div id="map_canvas" style="width:100%; height:600px"></div>
                </div>
            </div>
        </div>

        <!-- End Weekly-News -->

        <div class="weekly2-news-area  weekly2-pading gray-bg">
            <div class="container">
                <div class="weekly2-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>Letak Geografis Desa</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="mapouter">
                                <div class="gmap_canvas"><iframe width="100%" height="400px" id="gmap_canvas"
                                        src="https://maps.google.com/maps?q=karangsong&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                                        href="https://123movies-to.org">123movies</a><br>
                                    <style>
                                        .mapouter {
                                            position: relative;
                                            text-align: right;
                                            height: 100%;
                                            width: 100%;
                                        }

                                    </style><a href="https://www.embedgooglemap.net">google map for free</a>
                                    <style>
                                        .gmap_canvas {
                                            overflow: hidden;
                                            background: none !important;
                                            height: 100%;
                                            width: 100%;
                                        }

                                    </style>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--   Weekly2-News start -->

        <!-- End Weekly-News -->
        {{-- <!-- Start Youtube -->
        <div class="youtube-area video-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="video-items-active">
                            <div class="video-items text-center">
                                <iframe src="https://www.youtube.com/embed/CicQIuG8hBo" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="video-items text-center">
                                <iframe src="https://www.youtube.com/embed/rIz00N40bag" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="video-items text-center">
                                <iframe src="https://www.youtube.com/embed/CONfhrASy44" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>

                            </div>
                            <div class="video-items text-center">
                                <iframe src="https://www.youtube.com/embed/lq6fL2ROWf8" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>

                            </div>
                            <div class="video-items text-center">
                                <iframe src="https://www.youtube.com/embed/0VxlQlacWV4" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-info">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="video-caption">
                                <div class="top-caption">
                                    <span class="color1">Politics</span>
                                </div>
                                <div class="bottom-caption">
                                    <h2>Youtube Tentang Desa Karangsong</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod ipsum dolor
                                        sit. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod ipsum
                                        dolor sit. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod
                                        ipsum dolor sit lorem ipsum dolor sit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="testmonial-nav text-center">
                                <div class="single-video">
                                    <iframe src="https://www.youtube.com/embed/CicQIuG8hBo" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                    <div class="video-intro">
                                        <h4>Welcotme To The Best Model Winner Contest</h4>
                                    </div>
                                </div>
                                <div class="single-video">
                                    <iframe src="https://www.youtube.com/embed/rIz00N40bag" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                    <div class="video-intro">
                                        <h4>Welcotme To The Best Model Winner Contest</h4>
                                    </div>
                                </div>
                                <div class="single-video">
                                    <iframe src="https://www.youtube.com/embed/CONfhrASy44" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                    <div class="video-intro">
                                        <h4>Welcotme To The Best Model Winner Contest</h4>
                                    </div>
                                </div>
                                <div class="single-video">
                                    <iframe src="https://www.youtube.com/embed/lq6fL2ROWf8" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                    <div class="video-intro">
                                        <h4>Welcotme To The Best Model Winner Contest</h4>
                                    </div>
                                </div>
                                <div class="single-video">
                                    <iframe src="https://www.youtube.com/embed/0VxlQlacWV4" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                    <div class="video-intro">
                                        <h4>Welcotme To The Best Model Winner Contest</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- End Start youtube -->
        {{-- <!--  Recent Articles start -->
        <div class="recent-articles">
            <div class="container">
                <div class="recent-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>Recent Articles</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="recent-active dot-style d-flex dot-style">
                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="{{ URL('public_template/assets/img/news/recent1.jpg') }}" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <span class="color1">Night party</span>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="{{ URL('public_template/assets/img/news/recent2.jpg') }}" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <span class="color1">Night party</span>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="{{ URL('public_template/assets/img/news/recent3.jpg') }}" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <span class="color1">Night party</span>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="{{ URL('public_template/assets/img/news/recent2.jpg') }}" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <span class="color1">Night party</span>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Recent Articles End --> --}}
        <!--Start pagination -->
        {{-- <div class="pagination-area pb-45 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-wrap d-flex justify-content-center">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item"><a class="page-link" href="#"><span
                                                class="flaticon-arrow roted"></span></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><span
                                                class="flaticon-arrow right-arrow"></span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- End pagination  -->
    </main>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Detail Informasi Anggaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Detail Rincian Biaya Desa Karangsong
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>


    <!--Danger theme Modal -->
    <div class="modal fade text-left" id="showModalDanger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel120"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h3 class="modal-title white nm_kapal" id="myModalLabel120"></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="bx bx-x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row col-lg-12 justify-content-center">
                        <i class="bx bx-alarm text-danger text-center"  style="font-size: 5rem;"></i><h3 class="mt-2 ml-1 text-danger">SOS !</h3>
                    </div>
                    <div class="row col-lg-12 justify-content-center">
                        <b><h5 class="no_hp text-center ml-2 mt-1"></h5></b>
                    </div>
                    <div class="col-lg-12 row mt-1">
                        <div class="col-lg-6">
                            Longitude : <b class="long"></b>
                        </div>
                        <div class="col-lg-6">
                            Latitude : <b class="lat"></b>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Tutup</span>
                    </button>
                </div>
            </div>
        </div>
    </div>


    @push('custom-scripts')
        {{-- AIzaSyC87B6-SQkeq3eHIt6R6kbapYjZsEhJd6I --}}

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"
                integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        {{-- <script async
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFTity8TCDhO44hVIoHsoeAVVQttwdaRg&callback=initMap">
                </script> --}}

        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC87B6-SQkeq3eHIt6R6kbapYjZsEhJd6I&callback=initialize">
        </script>


        <script style="text/javascript">
            function initialize() {
                var mapMarkers = new Array();
                var infowindow = new google.maps.InfoWindow();
                var icon_st;
                var seconds = 0;

                var myLatlng = new google.maps.LatLng(-6.187590, 108.428183);
                var mapOptions = {
                    zoom: 10,
                    center: myLatlng,
                }
                var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
                var s = 0;
                var kplLoc = [
                    {long: -6.315176, lat:108.347497},
                    {long: -6.515176, lat:108.361589}
                ];

                // membuat icon berkedip
                setInterval(function () {

                var marker = [];
                var st_sos = [];
                var icon_st_tmp;
                resetMarker();

                    for (i = 0; i < kplLoc.length; i++) {
                    // resetMarker();
                    icon_st = "";
                    // berkedip
                    if (s % 2 == 0) {
                        icon_st = "https://www.freeiconspng.com/thumbs/warning-icon-png/status-warning-icon-png-29.png";
                    } else {
                        icon_st = "";
                    }

                    // init gambar
                    var icon_marker = {
                        url: icon_st, // url
                        scaledSize: new google.maps.Size(20, 20), // scaled size
                        origin: new google.maps.Point(0, 0), // origin
                        anchor: new google.maps.Point(0, 0) // anchor
                    };

                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(kplLoc[i]['long'], kplLoc[i]['lat']),
                        icon: icon_marker
                    });


                    // google.maps.event.addListener(marker, 'click', (function (marker, i) {
                    //     return function () {
                    //         tampilModal('Lathiif Aji Santhosho', '081904597978', 'SOS', 108.348113, -6.311418)
                    //     }
                    // })(marker, i));

                    google.maps.event.addListener(marker, 'click', function() {
                        tampilModal('Lathiif Aji Santhosho', '081904597978', 'SOS', 108.348113, -6.311418);
                    });

                    mapMarkers.push(marker);
                    marker.setMap(map);
                }
                s++;
            }, 900);

            function resetMarker() {
                    if (mapMarkers.length > 0) {
                        for (var i = 0; i < mapMarkers.length; i++) {
                            if (mapMarkers[i] != null) {
                                mapMarkers[i].setMap(null);
                            }
                        }
                    }
                    gmarkers = [];
                }

        }



            function tampilModal(nama, hp, sos, long, lat) {
                $('.nm_kapal').html(nama);
                $('.no_hp').html(hp);
                $('.long').html(long);
                $('.lat').html(lat);
                $('#showModalDanger').modal('show');
            }

            //    chart
            const ctx = $('#myChart');
            const myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['2017', '2018', '2019', '2020', '2021', '2022'],
                    datasets: [{
                            label: 'DD',
                            data: [10, 20, 30, 40, 50, 60, 70],
                            fill: false,
                            borderColor: 'rgb(255,0,0)',
                            tension: 0.1
                        },
                        {
                            label: 'ADD',
                            data: [10, 30, 40, 20, 40, 40, 50],
                            fill: false,
                            borderColor: 'rgb(0,206,209)',
                            tension: 0.1
                        },
                        {
                            label: 'PADes',
                            data: [10, 20, 30, 30, 50, 50, 60],
                            fill: false,
                            borderColor: 'rgb(50,205,50)',
                            tension: 0.1
                        }
                    ]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Chart APBDes Pertahun'
                        }
                    }
                },
            });
        </script>
    @endpush
@endsection
