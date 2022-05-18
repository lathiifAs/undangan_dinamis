@extends('template_admin.template')
@section('konten')
<style>
    .js-example-basic-single{
        display: block!important;
        height: 50px!important;
        white-space: nowrap!important;
        line-height: 26px!important;
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
                            <li class="breadcrumb-item"><a href="javascript:">{{ $main_title }}</a></li>
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

                            <div class="text-center mt-2">
                                <a href="{{ route('rt/pelayanan/add') }}" class="btn btn-primary btn-lg">
                                    <span class="fa fa-plus" aria-hidden="true"></span> Tambah Pengajuan
                                </a>
                            </div>
                            <div class="card-block">
                                <p>Daftar Pengajuan Pelayanan
                                </p>

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
                                                    {{-- <a href="" class="btn btn-icon btn-outline-primary"><i class="fa fa-file"></i></a> --}}
                                                    <button class="btn btn-icon btn-info"><i class="fa fa-eye"></i></button>
                                                    <button class="btn btn-icon btn-warning"><i class="fa fa-edit"></i></button>
                                                    {{-- <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="" method="POST">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="id" value="{{ $dt->id }}">
                                                    <button type="submit" class ="btn btn-icon btn-danger"><i class="fa fa-trash"></i></button>
                                                    </form> --}}
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

@push('custom-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        var select2 = $('.js-example-basic-single').select2();
        select2.data('select2').$selection.css('height', '43px');
    });
    </script>
@endpush
@endsection
