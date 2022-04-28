@extends('template_admin.template')
@section('konten')
    <style>
        .select2-selection__rendered {
            line-height: 41px !important;
        }

        .select2-selection {
            height: 41px !important;
        }

    </style>
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">{{ $main_title }}</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-file-text"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="javascript:">{{ $main_title }}</a></li>
                                <li class="breadcrumb-item"><a href="javascript:">Tambah Data</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- [ Main Content ] start -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-lg-8 mt-3">
                                            <h5>Tambah Data</h5>
                                        </div>
                                        <div class="col-lg-4 text-right">
                                            <a href="{{ route('rt/master_warga') }}" class="btn btn-outline-secondary btn-lg">
                                                <span class="fa fa-arrow-left" aria-hidden="true"></span> Kembali
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-block">
                                    <form action="{{ route('rt/master_warga/add') }}" method="post">
                                        {{ csrf_field() }}

                                        @if ($errors->any())
                                        <div class="alert alert-danger m-3" role="alert">
                                            <h4>Error</h4>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </div>
                                        @endif


                                        @if ($message = Session::get('success'))
                                            <div class="alert alert-success m-3" role="alert">
                                                <h4>Success</h4>
                                                {{ $message }}
                                            </div>
                                        @endif


                                    <div class="row col-lg-12 mt-4">
                                        <h6><b>Data Diri Warga</b></h6>
                                    </div>
                                    <div class="row col-lg-12 mt-2">
                                        <div class="col-lg-6" id="div_nik">
                                            <label for="">NIK</label>
                                            <input type="number" required class="form-control" name="nik" id="nik"
                                                placeholder="NIK">
                                        </div>
                                        {{-- <div class="col-lg-6" id="div_nik_baru">
                                            <label for="">NIK</label>
                                            <select class="form-control select2 " name="nik_baru" id="nik">
                                                <option value="">Ketik NIK</option>
                                                <option value="WY">123</option>
                                            </select>
                                        </div> --}}
                                        <div class="col-lg-6" id="div_no_kk">
                                            <label for="">No. KK</label>
                                            <input type="number" required class="form-control" name="no_kk" id="no_kk"
                                                placeholder="No. KK">
                                        </div>
                                    </div>
                                    <div class="row col-lg-12 mt-2">
                                        <div class="col-lg-6" id="div_nama">
                                            <label for="">Nama Lengkap</label>
                                            <input type="text" required class="form-control" name="nama" id="nama"
                                                placeholder="Nama Lengkap">
                                        </div>
                                        <div class="col-lg-6" id="div_jns_kel">
                                            <label for="">Jenis Kelamin</label>
                                            <select class="mb-3 form-control" name="jns_kel" id="jns_kel">
                                                <option value="L">Laki-laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row col-lg-12 mt-2">
                                        <div class="col-lg-6" id="div_tmpt_lahir">
                                            <label for="">Tempat Lahir</label>
                                            <input type="text" required class="form-control" name="tmpt_lahir" id="tmpt_lahir"
                                                placeholder="Tempat Lahir">
                                        </div>
                                        <div class="col-lg-6" id="div_tgl_lahir">
                                            <label for="">Tanggal Lahir</label>
                                            <input type="date" required class="form-control" name="tgl_lahir" id="tgl_lahir"
                                                placeholder="Tanggal Lahir">
                                        </div>
                                    </div>

                                    <div class="row col-lg-12 mt-2">
                                        <div class="col-lg-6" id="div_agama">
                                            <label for="">Agama</label>
                                            <select class="mb-3 form-control" id="agama" name="agama">
                                                <option value="islam">Islam</option>
                                                <option value="protestan">Protestan</option>
                                                <option value="katolik">Katolik</option>
                                                <option value="hindu">Hindu</option>
                                                <option value="buddha">Buddha</option>
                                                <option value="khonghucu">Khonghucu</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6" id="div_gol_darah">
                                            <label for="">Gol. Darah</label>
                                            <input type="text" required class="form-control" name="gol_darah" id="gol_darah"
                                                placeholder="Gol Darah">
                                        </div>
                                    </div>
                                    <div class="row col-lg-12 mt-2">

                                        <div class="col-lg-6" id="div_st_kawin">
                                            <label for="">Status Perkawinan</label>
                                            <select class="mb-3 form-control" required id="st_kawin" name="st_kawin">
                                                <option value="belum_kawin">Belum Kawin</option>
                                                <option value="kawin">Kawin</option>
                                                <option value="cerai_hidup">Cerai Hidup</option>
                                                <option value="cerai_mati">Cerai Mati</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6" id="div_tmpt_lahir">
                                            <label for="">Pekerjaan</label>
                                            <input type="text" required class="form-control" name="tmpt_lahir" id="tmpt_lahir"
                                                placeholder="Pekerjaan">
                                        </div>
                                    </div>
                                    <div class="row col-lg-12 mt-2">
                                        <div class="col-lg-6" id="div_kewarganegaraan">
                                            <label for="">Kewarganegaraan</label>
                                            <input type="text" required class="form-control" name="kewarganegaraan" id="kewarganegaraan"
                                                placeholder="Kewarganegaraan">
                                        </div>
                                    </div>
                                    <div class="row col-lg-12 mt-2">
                                        <div class="col-lg-12" id="div_alamat">
                                            <label for="">Alamat</label>
                                            <Textarea class="form-control" required id="alamat" name="alamat" rows="5"></Textarea>
                                        </div>
                                    </div>

                                    <div class="row mt-3" id="btn_submit">
                                        <div class="col-lg-12 text-right">
                                            <button type="submit" class="btn btn-success btn-lg">
                                                <span class="fa fa-paper-plane" aria-hidden="true"></span> Kirim
                                            </button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- [ Main Content ] end -->
                    </div>
                </div>
            </div>
        </div>

        @push('custom-scripts')
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"
                        integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ=="
                        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    var select2 = $('.select2').select2({
                        height: '100%',
                        dropdownCssClass: "bigdrop"
                    });
                    // select2.data('select2').$selection.css('height', '43px');
                });
            </script>
        @endpush
    @endsection
