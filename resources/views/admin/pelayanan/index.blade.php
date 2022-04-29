@extends('template_admin.template')
@section('konten')
<style>
    .select2-selection__rendered {
        line-height: 43px !important;
    }

    .select2-selection {
        height: 43px !important;
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
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-file-text"></i></a></li>
                            <li class="breadcrumb-item"><a href="javascript:">Pelayanan RT</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:">{{ $main_title }}</a></li>
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
                                        <h5>{{ $main_title }}</h5>
                                    </div>

                                </div>
                            </div>
                            <div class="card-block">
                                <p>Daftar Pengajuan Pelayanan
                                </p>
                                <form action="{{ route('admin/pelayanan') }}" method="post">
                                    {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-2">
                                        <select class="form-control js-example-basic-single " name="rt_id">
                                            <option value="">Pilih RT</option>
                                            @forelse ($rt as $dt)
                                                <option value="{{ $dt->id }}"  @if ($search->rt_id ?? "" == $dt->id) selected @endif>{{ $dt->name }}</option>
                                            @empty
                                                <option>Data Kosong</option>
                                            @endforelse
                                          </select>
                                    </div>
                                    <div class="col-lg-2 col-sm-6">
                                        <input type="text" class="form-control" name="no_kk"  value="{{ $search->no_kk ?? "" }}" placeholder="No. KK">
                                    </div>
                                    <div class="col-lg-2">
                                        <input type="text" class="form-control" name="nik"  value="{{ $search->nik ?? "" }}" placeholder="NIK">
                                    </div>
                                    <div class="col-lg-2">
                                        <input type="text" class="form-control" name="nama"  value="{{ $search->nama ?? "" }}" placeholder="Nama">
                                    </div>
                                    <div class="col-lg-2">
                                        <select class="form-control js-example-basic-single " name="jns_pengajuan">
                                            <option value="">Pilih Keperluan</option>
                                                <option value="buat_sku"  @if ($search->jns_pengajuan ?? "" == "buat_sku") selected @endif>Pembuatan SKU</option>
                                                <option value="buat_ktp" @if ($search->jns_pengajuan ?? "" == "buat_ktp") selected @endif>Pembuatan KTP</option>
                                                <option value="ubah_ktp"  @if ($search->jns_pengajuan ?? "" == "ubah_ktp") selected @endif>Perubahan KTP</option>
                                                <option value="buat_domisili"  @if ($search->jns_pengajuan ?? "" == "buat_domisili") selected @endif>Pembuatan Ket. Domisili</option>
                                                <option value="pindah_domisili"  @if ($search->jns_pengajuan ?? "" == "pindah_domisili") selected @endif>Pindah Domisili</option>
                                                <option value="buat_surat_nikah"  @if ($search->jns_pengajuan ?? "" == "buat_surat_nikah") selected @endif>Pembuatan Surat Nikah</option>
                                                <option value="buat_surat_mati"  @if ($search->jns_pengajuan ?? "" == "buat_surat_mati") selected @endif>Pembuatan Surat Kematian</option>
                                                <option value="buat_kk"  @if ($search->jns_pengajuan ?? "" == "buat_kk") selected @endif>Pembuatan KK</option>
                                                <option value="ubah_kk"  @if ($search->jns_pengajuan ?? "" == "ubah_kk") selected @endif>Perubahan KK</option>
                                                <option value="buat_akte" @if ($search->jns_pengajuan ?? "" == "buat_akte") selected @endif>Pembuatan Akte</option>
                                                <option value="buat_sktm"  @if ($search->jns_pengajuan ?? "" == "buat_sktm") selected @endif>Pembuatan SKTM</option>
                                                <option value="dll" @if ($search->jns_pengajuan ?? "" == "dll") selected @endif>Dll</option>
                                          </select>
                                    </div>
                                    <div class="col-lg-2 row">
                                        <button type="submit" class="btn btn-icon btn-info" name="btn_submit" value="search"><i
                                                class="fa fa-search"></i></button>
                                        <button type="submit" value="reset" name="btn_submit" class="btn btn-icon btn-outline-secondary"><i
                                                class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                </form>
                                <div class="table-responsive mt-3" style="overflow: scroll;">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th width="5%" class="text-center">No.</th>
                                                <th width="15%" class="text-center">Jenis Pengajuan</th>
                                                <th width="10%" class="text-center">NIK</th>
                                                <th width="20%" class="text-center">Nama Lengkap</th>
                                                <th width="15%" class="text-center">RT</th>
                                                <th width="20%" class="text-center">Alamat</th>
                                                <th width="10%" class="text-center"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($data as $key => $dt)
                                            <tr>
                                                <td class=" text-center">
                                                    {{ $key+1 }}
                                                </td>
                                                <td class="text-center">
                                                    @if ($dt->jns_pengajuan == 'buat_sku')
                                                    Pembuatan SKU
                                                    @elseif ($dt->jns_pengajuan == 'buat_ktp')
                                                    Pembuatan KTP
                                                    @elseif ($dt->jns_pengajuan == 'ubah_ktp')
                                                    Perubahan TKP
                                                    @elseif ($dt->jns_pengajuan == 'buat_domisili')
                                                    Surat Ket. Domisili
                                                    @elseif ($dt->jns_pengajuan == 'pindah_domisili')
                                                    Pindah Domisili
                                                    @elseif ($dt->jns_pengajuan == 'buat_surat_nikah')
                                                    Pembuatan Surat Nikah
                                                    @elseif ($dt->jns_pengajuan == 'buat_surat_mati')
                                                    Pembuatan Surat Mati
                                                    @elseif ($dt->jns_pengajuan == 'buat_kk')
                                                    Pembuatan KK
                                                    @elseif ($dt->jns_pengajuan == 'buat_akte')
                                                    Pembuatan Akte
                                                    @elseif ($dt->jns_pengajuan == 'buat_sktm')
                                                    Pembuatan SKTM
                                                    @elseif ($dt->jns_pengajuan == 'dll')
                                                    Lainnya
                                                    @endif
                                                </td>
                                                <td>
                                                    {{ $dt->nik}}
                                                </td>
                                                <td class="text-center">
                                                    {{ $dt->nama}}
                                                </td>
                                                <td class="text-center">
                                                    {{ $dt->nama_rt}}
                                                </td>
                                                <td>
                                                    {{ $dt->alamat}}
                                                </td>

                                                <td style="text-align: center">
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#ratingModal" class="btn btn-icon btn-outline-warning"><i class="fa fa-star-half" aria-hidden="true"></i></a>
                                                    <a href="" class="btn btn-icon btn-outline-primary"><i class="fa fa-file"></i></a>
                                                    <button class="btn btn-icon btn-info"><i class="fa fa-eye"></i></button>
                                                    <button class="btn btn-icon btn-warning"><i class="fa fa-edit"></i></button>
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="" method="POST">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="id" value="{{ $dt->id }}">
                                                    <button type="submit" class ="btn btn-icon btn-danger"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td class="text-center text-mute" colspan="8">Data tidak tersedia</td>
                                            </tr>
                                            @endforelse

                                        </tbody>
                                    </table>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ Main Content ] end -->
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ratingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Berikan Penilaian</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
            <div id="basic" style="font-size:40px"></div>
            <label for="" id="rating_pick"></label>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-success">Kirim</button>
        </div>
      </div>
    </div>
  </div>

@push('custom-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ URL('admin_template/assets/plugins/rating/rating.js')}}"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        var select2 = $('.js-example-basic-single').select2({
            height: '100%',
            dropdownCssClass: "bigdrop"
        });
        select2.data('select2').$selection.css('height', '43px');

    });

    $("#basic").rating({
        "click": function (e) {
            console.log(e); // {stars: 3, event: E.Event}
            // alert(e.stars); // 3
            $('#rating_pick').html('Anda Memilih ' + e.stars + ' bintang');
        }
    });
    </script>
@endpush
@endsection
