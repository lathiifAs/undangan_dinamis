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
                                        <h3>Fasilitas Umum</h3>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <div class="row">
                                        <div class="col-12">
                                            <img src="{{ URL('public_template/assets/img/fasilitas/mushola.jpg') }}" class="w-100" alt="">
                                        </div>
                                    </div>

                                    <div class="row mt-5 col-12">
                                        <p>Seringkali kita mendengar istilah fasilitas sosial – fasilitas umum (fasos dan fasum) untuk menggambarkan fasilitas yang bisa digunakan publik. Dalam peraturan tentang fasilitas sosial, tak ditemukan istilah fasos dan fasum. Fasum dan fasos adalah  istilah untuk prasarana lingkungan, utilitas umum dan fasilitas sosial yang dipendekkan menjadi fasos fasum untuk mempermudah penyebutannya.

Dalam Kamus Besar Bahasa Indonesia Online, yang dimaksud dengan fasilitas sosial adalah fasilitas yang disediakan oleh Pemerintah atau swasta untuk masyarakat misalnya, sekolah, klinik dan tempat ibadah. Sedangkan yang dimaksud fasilitas umum adalah fasilitas yang disediakan untuk kepentingan umum, misalnya jalan dan alat penerangan umum Adapun pengertian prasarana adalah kelengkapan dasar fisik lingkungan yang memungkinkan lingkungan perumahan dan permukiman dapat berfungsi sebagaimana mestinya. Sarana adalah fasilitas penunjang yang berfungsi untuk penyelenggaraan dan pengembangan kehidupan ekonomi,sosial dan budaya. Sedangkan utilitas adalah sarana penunjang untuk pelayanan lingkungan.</p>

<p><b>Jalan Desa</b></p>

<p> Jalan Desa Cangkringan terdiri dari dua jenis yakni jalan yang menggunakan aspal dan jalan yang masih menggunakan makadam sebagai pondasinya. Jalan beton/aspal di  Desa Cangkringan sepanjang 1,5 kilometer dalam kondisi baik, 2,5 kilometer jalan aspal/beton dalam kondisi sedang dan 2 kilometer jalan aspal dalam kondisi rusak.</p>

<p><b>Masjid dan Mushola Desa</b></p>

<p> Desa Cangkringan yang mayoritas  beragama islam, Masjid dan Mushola merupakan bangunan wajib yang harus ada di desa, Desa Cangkringan sendiri memiliki 9 masjid dan musholla. Masjid dan mushola selain buat tempat ibadah, juga sebagai salah satu tempat pengajaran tentang agama bagi masyarakat Desa Cangkringan  terutama pemuda dan putra putri Desa Cangkringan.</p>

<p><b>Sarana Kesehatan</b></p>
<p> Didalam setiap desa tentunya memiliki polindes atau puskesmas desa yang menjadi pusat kesehatan masyarakat Desa Cangkringan ini memiliki kondisi yang sangat layak digunakan untuk pelayanan pertama kesehatan. Pelayanan di polindes di lakukan oleh seorang bidan desa setempat.</p>

<p><b>Sarana Pendidikan</b></p>
Salah satu aspek yang seharusnya mendapat perhatian utama oleh setiap pengelola pendidikan adalah mengenai fasilitas pendidikan. Sarana pendidikan umumnya mencakup semua fasilitas yang secara langsung dipergunakan dan menunjang dalam proses pendidikan, seperti: Gedung, ruangan belajar/kelas, alat-alat atau media pendidikan, meja, kursi, dan sebagainya. Sedangkan yang dimaksud dengan fasilitas/prasarana adalah yang secara tidak langsung menunjang jalannya proses pendidikan, seperti: halaman, kebun/taman sekolah, jalan menuju ke sekolah. Desa Cangkringan memiliki 1 lembaga pendidikan setingkat SD negeri dengan jumlah murid 80 orang, 1 buah Sekolah Dasar Islam, 2 lembaga pendidikan setingkat Taman Kanak-Kanak
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
