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
                                        <h3>Visi Misi</h3>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <h2>Visi</h2>
                                    <p>Terwujudnya Masyarakat Indramayu yang Religius, Tangguh dan Sejahtera Dalam Suasanan Kehidupan yang Aman, Tertib dan Damai serta Tatanan Daerah yang Makmur, Lestari dan Mandiri".</p>
                                </div>

                                <div class="blog_details">
                                    <h2>Misi</h2>
                                    <p>a. Pengembangan Sumber Daya Manusia.Pengembangan sumber daya manusia ditujukan untuk membangun masyarakatyang tangguh dan sejahtera. Adapun kriterianya meliputi integritas masal, taraf pendidikan, derajat kesehatan, klasifikasi ketenaga kerjaan serta tingkat pendapatan penduduk.

                                        b. Penegakan Keamanan dan KetertibanKeamanan dan ketertiban merupakan prasyarat bagi perkembangan daerah. Selain itu, keamanan dan ketertiban merupakan cerminan masyarakat yang sejahtera. Ancaman terhadap keamanan dan ketertiban antara lain ditandai intensitas kriminalitas dan kerusuhan warga serta pelanggaran ketertiban umum yang meluas.

                                        c. Penataan Perekonomian MasyarakatPerekonomian daerah merupakan cerminan kesejahteraan masyarakat dan kemakmurandaerah. Kondisi ekonomi daerah dapat dikenali secara struktural, meliputi sistem produksi, distribusi dan kelembagaan tingkat pengangguran kemiskinan dan migrasi penduduk, serta kondisinitas iklim usaha.

                                        d. Pengembangan Wilayah TerpaduPengembangan wilayah terpadu diarahkan untuk menciptakan sinergi pertumbuhan wilayah, melestarikan lingkungan serta mewujudkan pemukiman sehat, asri dan nyaman. Pengembangan wilayah terpadu mencakup aspek ketatanegaraan, pemukiman dan prasarana serta lingkungan hidup.

                                        e. Penyelenggaraan Pemerintah bebas KKN Pemerintah yang baik ditandai penyelenggaraan pemerintahan yang baik ditandai penyelenggaraan pemerintahan yang bebas dari praktek kolusi, korupsi dan nepotisme (KKN). Dalam kaitan itu penerapan azas keterbukaan (transparansi) dan keterukuran (akuntabilitas) perlu dilaksanakan secara konsisten pada setiap aspek pemerintahan. Sealin itu partisipasi masyarakat sepatutnya menjadi tumpuan utama.

                                        f. Pengembangan Sistem Pelayanan Prima Sistem pelayanan prima merupakan salah satu kriteria pemerintahan yang bebas dari praktek KKN. Dalam kaitan itu penerapan prinsip pelayanan yang mjudah, murah, pasti, adil dan merata perlu dilaksanakan secara lebih konsisten. Dalam hal ini keterlibatan masyarakat swasta perlu dikembangkan lebih luas untuk berpartisipasi dalam menyelenggarakan pelayanan umum tersebut.

                                        g. Peningkatan Pendapatan Asli Daerah Pemerintah Daerah di era otonomi daerah dituntut mampu mengoptimum Pendapatan Asli Daerah sebagai sumber pembiayaan maupun pembangunan.</p>
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
