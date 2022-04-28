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
                                    <div class="col-lg-4 text-right">
                                        <a href="{{ route('rt/master_warga/add') }}" class="btn btn-primary btn-lg">
                                            <span class="fa fa-plus" aria-hidden="true"></span> Tambah
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-block">
                                <p>Daftar Warga
                                </p>
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <input type="text" class="form-control" placeholder="No. KK">
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <input type="text" class="form-control" placeholder="NIK">
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="Nama">
                                    </div>

                                    <div class="col-lg-2 row d-none d-lg-block">
                                        <button class="btn btn-icon btn-info"><i class="fa fa-search"></i></button>
                                        <button class="btn btn-icon btn-outline-secondary"><i class="fa fa-times"></i></button>
                                    </div>

                                    <div class="col-lg-2 row d-lg-none">
                                        <div class="row ml-3 mt-4">
                                                <button class="btn btn-icon btn-info"><i class="fa fa-search"></i></button>
                                                <button class="btn btn-icon btn-outline-secondary"><i class="fa fa-times"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive mt-3" style="overflow: scroll;">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th width="5%" class="text-center">No.</th>
                                                <th width="15%" class="text-center">NIK</th>
                                                <th width="30%" class="text-center">Nama Lengkap</th>
                                                <th width="25%" class="text-center">Alamat</th>
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
                                                    {{ $dt->nik}}
                                                </td>
                                                <td>
                                                    {{ $dt->nama}}
                                                </td>
                                                <td>
                                                    {{ $dt->alamat}}
                                                </td>
                                                <td style="text-align: center">
                                                    <button class="btn btn-icon btn-info"><i class="fa fa-eye"></i></button>
                                                    <button class="btn btn-icon btn-warning"><i class="fa fa-edit"></i></button>
                                                    {{-- <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="" method="POST">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="nik" value="{{ $dt->nik }}">
                                                    <button type="submit" class ="btn btn-icon btn-danger"><i class="fa fa-trash"></i></button>
                                                    </form> --}}
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td class="text-center text-mute" colspan="4">Data tidak tersedia</td>
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
