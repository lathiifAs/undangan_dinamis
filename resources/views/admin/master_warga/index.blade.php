@extends('template_admin.template')
@section('konten')
    <style>
        .js-example-basic-single {
            display: block !important;
            height: 50px !important;
            white-space: nowrap !important;
            line-height: 26px !important;
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
                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#importModal" class="btn btn-outline-info"><i class="fa fa-upload" aria-hidden="true"></i>Import Data Warga</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <p>Daftar Warga
                                    </p>


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


                                    <form action="{{ route('admin/master_warga') }}" method="post">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <select class="form-control js-example-basic-single " name="rt_id">
                                                    <option value="">Pilih RT</option>
                                                    @forelse ($rt as $dt)
                                                        <option value="{{ $dt->id }}" @if ($search->rt_id ?? "" == $dt->id) selected @endif>{{ $dt->name }}</option>
                                                    @empty
                                                        <option>Data Kosong</option>
                                                    @endforelse
                                                </select>
                                            </div>
                                            <div class="col-lg-2 col-sm-6">
                                                <input type="text" class="form-control" name="no_kk" placeholder="No. KK" value="{{ $search->no_kk ?? "" }}">
                                            </div>
                                            <div class="col-lg-2 col-sm-6">
                                                <input type="text" class="form-control" name="nik" placeholder="NIK" value="{{ $search->nik ?? "" }}">
                                            </div>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ $search->nama ?? "" }}">
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
                                                    <th width="5%" class="text-center">RT</th>
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
                                                            {{ $key + 1 }}
                                                        </td>
                                                        <td class="text-center">
                                                            {{ $dt->name }}
                                                        </td>
                                                        <td class="text-center">
                                                            {{ $dt->nik }}
                                                        </td>
                                                        <td>
                                                            {{ $dt->nama }}
                                                        </td>
                                                        <td>
                                                            {{ $dt->alamat }}
                                                        </td>
                                                        <td style="text-align: center">
                                                            <button class="btn btn-icon btn-info"><i
                                                                    class="fa fa-eye"></i></button>
                                                            <button class="btn btn-icon btn-warning"><i
                                                                    class="fa fa-edit"></i></button>
                                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                                action="" method="POST">
                                                                {{ csrf_field() }}
                                                                <input type="hidden" name="nik"
                                                                    value="{{ $dt->nik }}">
                                                                <button type="submit" class="btn btn-icon btn-danger"><i
                                                                        class="fa fa-trash"></i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td class="text-center text-mute" colspan="4">Data tidak tersedia
                                                        </td>
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
<div class="modal fade" id="importModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Import Data Warga</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
            <form action="{{route("admin/master_warga/import")}}" method="post" enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <label>Pilih file yang akan di upload  <small class="warning text-muted">{{__('Hanya berlaku format Excel (.xlsx or .xls)')}}</small></label>
                    <div class="input-group">
                        <input type="file" required class="form-control" name="uploaded_file" id="uploaded_file">
                        @if ($errors->has('uploaded_file'))
                            <p class="text-right mb-0">
                                <small class="danger text-muted" id="file-error">{{ $errors->first('uploaded_file') }}</small>
                            </p>
                        @endif
                        <div class="input-group-append" id="button-addon2">
                            <button class="btn btn-primary square" type="submit"><i class="ft-upload mr-1"></i> Upload</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
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
                var select2 = $('.js-example-basic-single').select2();
                select2.data('select2').$selection.css('height', '43px');
            });
        </script>
    @endpush
@endsection
