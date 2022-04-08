@extends('template_public.template')

@section('konten')
        <!--================Blog Area =================-->
        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <a href="#" class="blog_item_date">
                                        <h3>Potensi Desa</h3>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="properties__button">
                                                <!--Nav Button  -->
                                                <nav>
                                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                        <a class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab"
                                                            href="#nav-profile" role="tab" aria-controls="nav-profile"
                                                            aria-selected="false">Hutan Mangrove</a>
                                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                                            href="#nav-contact" role="tab" aria-controls="nav-contact"
                                                            aria-selected="false">Wisata Pantai</a>
                                                        <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab"
                                                            href="#nav-last" role="tab" aria-controls="nav-contact"
                                                            aria-selected="false">Tambak Ikan</a>
                                                        <a class="nav-item nav-link" id="nav-technology" data-toggle="tab"
                                                            href="#nav-techno" role="tab" aria-controls="nav-contact"
                                                            aria-selected="false">Pelelangan Ikan</a>
                                                        <a class="nav-item nav-link" id="nav-technology" data-toggle="tab"
                                                            href="#nav-techno" role="tab" aria-controls="nav-contact"
                                                            aria-selected="false">Sentral Pembuatan Kapal</a>
                                                        <a class="nav-item nav-link" id="nav-technology" data-toggle="tab"
                                                            href="#nav-techno" role="tab" aria-controls="nav-contact"
                                                            aria-selected="false">Pembekuan Ikan</a>
                                                    </div>
                                                </nav>
                                                <!--End Nav Button  -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-5 col-12">
                                        <p>Kabupaten Indramayu merupakan salah satu kabupaten yang berada di Provinsi Jawa Barat dengan Ibu kotanya ialah Indramayu. Nama Indramayu sendiri diambil dari kecantikan putri salah satu pendiri Indramayu yang bernama Nyi Endang Darma Ayu.</p>

                                        <p>Indramayu terdapat wisata air yang bernama Pantai Karangsong, pantai ini selalu ramai dikunjungi wisatawan yang datang dari berbagai daerah.</p>

                                        <p>Karena menyuguhkan pemandangan alam yang lengkap, dimana deburan ombak laut bersatu dengan lebatnya hutan mangrove.</p>

                                        <img src="{{ URL('public_template/assets/img/banner/hutan_mangrove.jpg') }}" class="w-100" alt="">
                                        <p>Ya, di kawasan Pantai Karangsong terdapat Ekowisata yang berupa kawasan hutan mangrove atau hutan bakau yang cukup lebat dan menjadi habitat bagi berbagai jenis flora maupun fauna.</p>

                                        <p>Sehingga menjadikan Pantai Karangsong ini merupakan destinasi wisata favorit keluarga warga Indramayu. Selain menikmati keindahan pantainya, kamu dapat belajar banyak hal di kawasan Ekowisata Hutan Mangrovenya.</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Recent Post</h3>
                                <div class="media post_item">
                                    <img src="{{ URL('public_template/assets/img/post/post_1.png')}}" alt="post">
                                    <div class="media-body">
                                        <a href="single-blog.html">
                                            <h3>From life was you fish...</h3>
                                        </a>
                                        <p>January 12, 2019</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="{{ URL('public_template/assets/img/post/post_2.png')}}" alt="post">
                                    <div class="media-body">
                                        <a href="single-blog.html">
                                            <h3>The Amazing Hubble</h3>
                                        </a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="{{ URL('public_template/assets/img/post/post_3.png')}}" alt="post">
                                    <div class="media-body">
                                        <a href="single-blog.html">
                                            <h3>Astronomy Or Astrology</h3>
                                        </a>
                                        <p>03 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="{{ URL('public_template/assets/img/post/post_4.png')}}" alt="post">
                                    <div class="media-body">
                                        <a href="single-blog.html">
                                            <h3>Asteroids telescope</h3>
                                        </a>
                                        <p>01 Hours ago</p>
                                    </div>
                                </div>
                            </aside>

                            <aside class="single_sidebar_widget newsletter_widget">
                                <h4 class="widget_title">Newsletter</h4>

                                <form action="#">
                                    <div class="form-group">
                                        <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                                    </div>
                                    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                        type="submit">Subscribe</button>
                                </form>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
@endsection
