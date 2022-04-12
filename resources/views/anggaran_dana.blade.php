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
                                        <h3>Anggaran Desa (APBDes)</h3>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <canvas id="myChart" width="400" height="300"></canvas>
                                </div>

                                <div class="blog_details">
                                    <h2>DD</h2>
                                    <div class="row">
                                        <div class="col-6">
                                            <table border="1" cellpadding="0" cellspacing="0" style="width: 100%;">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                <strong><em>Pendapatan Asli Desa</em></strong></p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                <strong>Rp&nbsp;</strong><strong> - </strong></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Hasil sewa tanah bengkok</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Hasil sewa dari tanah kas desa lain</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Hasil Usaha desa lainnya yang sah</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Pendapatan bunga bank</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Rekening pada bank</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                <strong><em>Pendapatan Transfer</em></strong></p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                <strong>Rp - </strong></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Dana Desa</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Bagian dari hasil pajak daerah</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Bagian dari hasil retribusi daerah</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Alokasi Dana Desa ( ADD )</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Bantuan&nbsp; Keuangan Khusus dari Provinsi</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                <strong><em>JUMLAH&nbsp; PENDAPATAN</em></strong></p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                <strong>Rp - </strong></p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-6">
                                            <table align="left" border="1" cellpadding="0" cellspacing="0" style="width: 100%;">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                <strong>Pengeluaran</strong></p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                &nbsp;</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Bidang&nbsp; Penyelenggaraan Pemerintahan Desa</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Bidang Pelaksanaan Pembangunan Desa</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Bidang Pembinaan Kemasyarakatan Desa</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Bidang Pemberdayaan Masyarakat Desa</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Bidang Tidak Terduga</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                <strong>SiLPA</strong></p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                <strong>Rp - </strong></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                JUMLAH&nbsp;&nbsp; (Rp.)</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                <strong>JUMLAH PENDAPATAN + SILPA</strong></p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                <strong>Rp - </strong></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                <strong>JUMLAH BELANJA</strong></p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                <strong>Rp - </strong></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                <strong>SALDO</strong></p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                <strong>Rp - </strong></p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="row mt-5 col-12">
                                        Rincian Tentang DD
                                    </div>
                                </div>
                                <div class="blog_details">
                                    <h2>ADD</h2>
                                    <div class="row">
                                        <div class="col-6">
                                            <table border="1" cellpadding="0" cellspacing="0" style="width: 100%;">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                <strong><em>Pendapatan Asli Desa</em></strong></p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                <strong>Rp&nbsp;</strong><strong> - </strong></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Hasil sewa tanah bengkok</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Hasil sewa dari tanah kas desa lain</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Hasil Usaha desa lainnya yang sah</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Pendapatan bunga bank</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Rekening pada bank</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                <strong><em>Pendapatan Transfer</em></strong></p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                <strong>Rp - </strong></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Dana Desa</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Bagian dari hasil pajak daerah</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Bagian dari hasil retribusi daerah</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Alokasi Dana Desa ( ADD )</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Bantuan&nbsp; Keuangan Khusus dari Provinsi</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                <strong><em>JUMLAH&nbsp; PENDAPATAN</em></strong></p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                <strong>Rp - </strong></p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-6">
                                            <table align="left" border="1" cellpadding="0" cellspacing="0" style="width: 100%;">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                <strong>Pengeluaran</strong></p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                &nbsp;</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Bidang&nbsp; Penyelenggaraan Pemerintahan Desa</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Bidang Pelaksanaan Pembangunan Desa</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Bidang Pembinaan Kemasyarakatan Desa</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Bidang Pemberdayaan Masyarakat Desa</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Bidang Tidak Terduga</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                <strong>SiLPA</strong></p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                <strong>Rp - </strong></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                JUMLAH&nbsp;&nbsp; (Rp.)</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                <strong>JUMLAH PENDAPATAN + SILPA</strong></p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                <strong>Rp - </strong></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                <strong>JUMLAH BELANJA</strong></p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                <strong>Rp - </strong></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                <strong>SALDO</strong></p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                <strong>Rp - </strong></p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="row mt-5 col-12">
                                        Rincian Tentang ADD
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
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
                                <div class="blog_details">
                                    <h2>DD</h2>
                                    <div class="row">
                                        <div class="col-6">
                                            <table border="1" cellpadding="0" cellspacing="0" style="width: 100%;">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                <strong><em>Pendapatan Asli Desa</em></strong></p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                <strong>Rp&nbsp;</strong><strong> - </strong></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Hasil sewa tanah bengkok</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Hasil sewa dari tanah kas desa lain</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Hasil Usaha desa lainnya yang sah</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Pendapatan bunga bank</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Rekening pada bank</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                <strong><em>Pendapatan Transfer</em></strong></p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                <strong>Rp - </strong></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Dana Desa</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Bagian dari hasil pajak daerah</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Bagian dari hasil retribusi daerah</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Alokasi Dana Desa ( ADD )</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Bantuan&nbsp; Keuangan Khusus dari Provinsi</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                <strong><em>JUMLAH&nbsp; PENDAPATAN</em></strong></p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                <strong>Rp - </strong></p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-6">
                                            <table align="left" border="1" cellpadding="0" cellspacing="0" style="width: 100%;">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                <strong>Pengeluaran</strong></p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                &nbsp;</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Bidang&nbsp; Penyelenggaraan Pemerintahan Desa</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Bidang Pelaksanaan Pembangunan Desa</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Bidang Pembinaan Kemasyarakatan Desa</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Bidang Pemberdayaan Masyarakat Desa</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Bidang Tidak Terduga</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                <strong>SiLPA</strong></p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                <strong>Rp - </strong></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                JUMLAH&nbsp;&nbsp; (Rp.)</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                <strong>JUMLAH PENDAPATAN + SILPA</strong></p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                <strong>Rp - </strong></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                <strong>JUMLAH BELANJA</strong></p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                <strong>Rp - </strong></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                <strong>SALDO</strong></p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                <strong>Rp - </strong></p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="row mt-5 col-12">
                                        Rincian Tentang DD
                                    </div>
                                </div>
                                <div class="blog_details">
                                    <h2>PADes</h2>
                                    <div class="row">
                                        <div class="col-6">
                                            <table border="1" cellpadding="0" cellspacing="0" style="width: 100%;">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                <strong><em>Pendapatan Asli Desa</em></strong></p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                <strong>Rp&nbsp;</strong><strong> - </strong></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Hasil sewa tanah bengkok</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Hasil sewa dari tanah kas desa lain</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Hasil Usaha desa lainnya yang sah</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Pendapatan bunga bank</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Rekening pada bank</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                <strong><em>Pendapatan Transfer</em></strong></p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                <strong>Rp - </strong></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Dana Desa</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Bagian dari hasil pajak daerah</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Bagian dari hasil retribusi daerah</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Alokasi Dana Desa ( ADD )</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Bantuan&nbsp; Keuangan Khusus dari Provinsi</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                <strong><em>JUMLAH&nbsp; PENDAPATAN</em></strong></p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                <strong>Rp - </strong></p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-6">
                                            <table align="left" border="1" cellpadding="0" cellspacing="0" style="width: 100%;">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                <strong>Pengeluaran</strong></p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                &nbsp;</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Bidang&nbsp; Penyelenggaraan Pemerintahan Desa</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Bidang Pelaksanaan Pembangunan Desa</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Bidang Pembinaan Kemasyarakatan Desa</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Bidang Pemberdayaan Masyarakat Desa</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                Bidang Tidak Terduga</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                <strong>SiLPA</strong></p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                <strong>Rp - </strong></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                JUMLAH&nbsp;&nbsp; (Rp.)</p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                Rp -</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                <strong>JUMLAH PENDAPATAN + SILPA</strong></p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                <strong>Rp - </strong></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                <strong>JUMLAH BELANJA</strong></p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                <strong>Rp - </strong></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                <strong>SALDO</strong></p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                <strong>Rp - </strong></p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="row mt-5 col-12">
                                        Rincian Tentang PADes
                                    </div>
                                </div>
                    <div class="col-lg-4">

                    </div>
                </div>
            </div>
        </section>

  @push('custom-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
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
            }]
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
