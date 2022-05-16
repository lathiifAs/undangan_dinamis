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
                                <li class="breadcrumb-item"><a href="javascript:">Tambah Pengajuan</a></li>
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
                                        <div class="col-9 mt-2">
                                            <h5>Tambah Pengajuan</h5>
                                        </div>
                                        <div class="col-3 text-right">
                                            <a href="{{ route('rt/pelayanan') }}"
                                                class="btn btn-outline-secondary btn-lg">
                                                <span class="fa fa-arrow-left" aria-hidden="true"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-block">

                                    <form action="{{ route('rt/pelayanan/add') }}" method="post">
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



                                    <div class="row col-lg-12">
                                        <h6><b>Data Pengajuan</b></h6>
                                    </div>
                                    <div class="row col-lg-12 mt-2">
                                        <div class="col-lg-6">
                                            <label for="">Keperluan</label>
                                            <select class="form-control select2 " style="height: 200px" name="jns_pengajuan"
                                                id="keperluan">
                                                <option value="">Pilih Keperluan</option>
                                                <option value="buat_sku">Pembuatan SKU</option>
                                                <option value="buat_ktp">Pembuatan KTP</option>
                                                <option value="ubah_ktp">Perubahan KTP</option>
                                                <option value="buat_domisili">Pembuatan Ket. Domisili</option>
                                                <option value="pindah_domisili">Pindah Domisili</option>
                                                <option value="buat_surat_nikah">Pembuatan Surat Nikah</option>
                                                <option value="buat_surat_mati">Pembuatan Surat Kematian</option>
                                                <option value="buat_kk">Pembuatan KK</option>
                                                <option value="ubah_kk">Perubahan KK</option>
                                                <option value="buat_akte">Pembuatan Akte</option>
                                                <option value="buat_sktm">Pembuatan SKTM</option>
                                                <option value="dll">Dll</option>
                                            </select>
                                        </div>
                                    </div>



                                    <div class="row col-lg-12 mt-2" id="div_sku">
                                        <div class="col-lg-6">
                                            <label for="">Alamat Usaha</label>
                                            <textarea name="alamat_usaha" id="alamat_usaha" class="form-control" cols="30" rows="5"></textarea>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="">Diperuntukan</label>
                                            <textarea name="diperuntukan" id="diperuntukan" class="form-control" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>

                                    <div class="row col-lg-12 mt-2">
                                        <div class="col-lg-12" id="div_ket">
                                            <label for="">Keterangan</label>
                                            <textarea name="ket" id="ket" class="form-control" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>

                                    <div class="row col-lg-12 mt-4">
                                        <h6><b>Data Diri Warga</b></h6>
                                    </div>
                                    <div class="row col-lg-12 mt-2">
                                        <div class="col-lg-6" id="div_nik">
                                            <label for="">NIK</label>
                                            <select class="form-control select2 " name="nik" id="nik">
                                                <option value="">Cari Nik atau Nama</option>
                                                @forelse ($warga as $wg)
                                                    <option value="{{ $wg->nik }}">{{ $wg->nik }} -
                                                        {{ $wg->nama }}</option>
                                                @empty
                                                    <option>Data Kosong</option>
                                                @endforelse
                                            </select>
                                        </div>
                                        {{-- <div class="col-lg-6" id="div_nik_baru">
                                            <label for="">NIK</label>
                                            <select class="form-control select2 " name="nik_baru" id="nik_baru">
                                                <option value="">Ketik NIK</option>
                                                <option value="WY">123</option>
                                            </select>
                                        </div> --}}
                                        <div class="col-lg-6" id="div_no_kk">
                                            <label for="">No. KK</label>
                                            <input type="text" readonly class="form-control" name="no_kk" id="no_kk"
                                                placeholder="No. KK">
                                        </div>
                                    </div>
                                    <div class="row col-lg-12 mt-2">
                                        <div class="col-lg-6" id="div_nama">
                                            <label for="">Nama Lengkap</label>
                                            <input type="text" readonly class="form-control" name="nama" id="nama"
                                                placeholder="Nama Lengkap">
                                        </div>
                                        <div class="col-lg-6" id="div_jns_kel">
                                            <label for="">Jenis Kelamin</label>
                                            <input type="text" readonly class="form-control" name="jns_kel" id="jns_kel"
                                                placeholder="Jenis Kelamin">
                                        </div>
                                    </div>
                                    <div class="row col-lg-12 mt-2">
                                        <div class="col-lg-6" id="div_tmpt_lahir">
                                            <label for="">Tempat Lahir</label>
                                            <input type="text" readonly class="form-control" name="tmpt_lahir"
                                                id="tmpt_lahir" placeholder="Tempat Lahir">
                                        </div>
                                        <div class="col-lg-6" id="div_tgl_lahir">
                                            <label for="">Tanggal Lahir</label>
                                            <input type="date" readonly class="form-control" name="tgl_lahir"
                                                id="tgl_lahir" placeholder="Tanggal Lahir">
                                        </div>
                                    </div>

                                    <div class="row col-lg-12 mt-2">
                                        <div class="col-lg-6" id="div_agama">
                                            <label for="">Agama</label>
                                            <input type="text" readonly class="form-control" name="agama" id="agama"
                                                placeholder="Agama">
                                        </div>
                                        <div class="col-lg-6" id="div_gol_darah">
                                            <label for="">Gol. Darah</label>
                                            <input type="text" readonly class="form-control" name="gol_darah"
                                                id="gol_darah" placeholder="Gol Darah">
                                        </div>
                                    </div>
                                    <div class="row col-lg-12 mt-2">
                                        <div class="col-lg-6" id="div_kewarganegaraan">
                                            <label for="">Kewarganegaraan</label>
                                            <input type="text" readonly class="form-control" name="kewarganegaraan"
                                                id="kewarganegaraan" placeholder="Kewarganegaraan">
                                        </div>
                                        <div class="col-lg-6" id="div_st_kawin">
                                            <label for="">Status Perkawinan</label>
                                            <input type="text" readonly class="form-control" name="st_kawin" id="st_kawin"
                                                placeholder="Status Perkawinan">
                                        </div>
                                    </div>
                                    <div class="row col-lg-12 mt-2">
                                        <div class="col-lg-12" id="div_alamat">
                                            <label for="">Alamat</label>
                                            <Textarea class="form-control" id="alamat" readonly name="alamat" rows="5">

                                            </Textarea>
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
            <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.0/axios.min.js"
                        integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ=="
                        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

            <script type="text/javascript">
                $(document).ready(function() {
                    var select2 = $('.select2').select2({
                        height: '100%',
                        dropdownCssClass: "bigdrop"
                    });
                    // select2.data('select2').$selection.css('height', '43px');

                    // hide item

                    $('#btn_submit').hide();

                    $('#div_ket').hide();
                    $('#div_sku').hide();
                    $('#div_nik').hide();
                    $('#div_no_kk').hide();
                    $('#div_nama').hide();
                    $('#div_jns_kel').hide();
                    $('#div_tmpt_lahir').hide();
                    $('#div_tgl_lahir').hide();
                    $('#div_agama').hide();
                    $('#div_gol_darah').hide();
                    $('#div_kewarganegaraan').hide();
                    $('#div_st_kawin').hide();
                    $('#div_alamat').hide();

                    // check selected
                    $('#keperluan').on('select2:select', function(e) {
                        var data = e.params.data;
                        // pembuatan ktp
                        if (data.id == 'buat_ktp') {
                            $('#show').hide();

                            $('#div_sku').hide();
                            $('#div_ket').show();
                            $('#div_nik').show();
                            $('#div_no_kk').show();
                            $('#div_nama').show();
                            $('#div_jns_kel').show();
                            $('#div_tmpt_lahir').show();
                            $('#div_tgl_lahir').show();
                            $('#div_agama').show();
                            $('#div_gol_darah').show();
                            $('#div_kewarganegaraan').show();
                            $('#div_st_kawin').show();
                            $('#div_alamat').show();

                            $('#ket').val('Pembuatan KTP');

                            // // check selected
                            // $('#nik').on('select2:select', function(e) {
                            //     var data_w = e.params.data_w;
                            //     console.log(data_w);
                            // });

                            $('#nik').on('select2:select', function (d) {
                                var data = d.params.data;
                                // console.log(data.id);
                                getDataWarga(data.id);
                            });

                        } else if (data.id == 'buat_sku') {


                            $('#div_ket').show();
                            $('#btn_submit').show();
                            $('#div_sku').show();

                            $('#div_nik').show();
                            $('#div_no_kk').show();
                            $('#div_nama').show();
                            $('#div_jns_kel').show();
                            $('#div_tmpt_lahir').show();
                            $('#div_tgl_lahir').show();
                            $('#div_agama').show();
                            $('#div_gol_darah').show();
                            $('#div_kewarganegaraan').show();
                            $('#div_st_kawin').show();
                            $('#div_alamat').show();


                            $('#nik').on('select2:select', function (d) {
                                var data = d.params.data;
                                // console.log(data.id);
                                getDataWarga(data.id);
                            });
                        }
                    });

                });

                // Want to use async/await? Add the `async` keyword to your outer function/method.
                async function getDataWarga(nik) {
                    try {
                        const response = await axios.get('/rt/master_warga_rt?nik='+nik);
                        // console.log(response.data.result[0].nama);
                        $('#nama').val(response.data.result[0].nama);
                        $('#no_kk').val(response.data.result[0].no_kk);
                        if (response.data.result[0].jns_kel == 'L') {
                            $('#jns_kel').val('Laki-Laki');
                        }else{
                            $('#jns_kel').val('Perempuan');
                        }

                        $('#tmpt_lahir').val(response.data.result[0].tmpt_lahir);
                        $('#tgl_lahir').val(response.data.result[0].tgl_lahir);
                        $('#agama').val(response.data.result[0].agama);
                        $('#st_kawin').val(response.data.result[0].st_kawin);
                        $('#kewarganegaraan').val(response.data.result[0].kewarganegaraan);
                        $('#alamat').val(response.data.result[0].alamat);


                    } catch (error) {
                        console.error(error);
                    }
                }
            </script>
        @endpush
    @endsection
