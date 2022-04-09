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
                                    <h3>Foto Kegiatan</h3>
                                </a>
                            </div>

                            <div class="blog_details row">
                                <div class="card m-3" style="width: 18rem;">
                                    <img class="card-img-top" src="{{ URL('public_template/assets/img/kegiatan/kegiatan.jpg') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Kegiatan A</h5>
                                        <p class="card-text">Jl karangsong blok sawah sekotak RT.4 RW.01. No.269</p>
                                    </div>
                                </div>
                                <div class="card m-3" style="width: 18rem;">
                                    <img class="card-img-top" src="{{ URL('public_template/assets/img/kegiatan/kegiatan.jpg') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Kegiatan B</h5>
                                        <p class="card-text">Jl karangsong blok sawah sekotak RT.4 RW.01. No.269</p>
                                    </div>
                                </div>
                                <div class="card m-3" style="width: 18rem;">
                                    <img class="card-img-top" src="{{ URL('public_template/assets/img/kegiatan/kegiatan.jpg') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Kegiatan C</h5>
                                        <p class="card-text">Jl karangsong blok sawah sekotak RT.4 RW.01. No.269</p>
                                    </div>
                                </div>
                                <div class="card m-3" style="width: 18rem;">
                                    <img class="card-img-top" src="{{ URL('public_template/assets/img/kegiatan/kegiatan.jpg') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Kegiatan D</h5>
                                        <p class="card-text">Jl karangsong blok sawah sekotak RT.4 RW.01. No.269</p>
                                    </div>
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
                                <img src="{{ URL('public_template/assets/img/post/post_1.png') }}" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>From life was you fish...</h3>
                                    </a>
                                    <p>January 12, 2019</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{ URL('public_template/assets/img/post/post_2.png') }}" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>The Amazing Hubble</h3>
                                    </a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{ URL('public_template/assets/img/post/post_3.png') }}" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>Astronomy Or Astrology</h3>
                                    </a>
                                    <p>03 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{ URL('public_template/assets/img/post/post_4.png') }}" alt="post">
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
