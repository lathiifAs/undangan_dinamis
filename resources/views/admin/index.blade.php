@extends('template_admin.template')

@section('konten')
<div class="row">
    <div class="col-1">
        &nbsp;
    </div>
    <div class="col-9">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5 pl-2">
              <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Admin</a></li>
              <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Daftar Pelanggan</li>
            </ol>
        </nav>
    </div>
</div>
<div class="col-md-12 mb-lg-0 mb-4">
    <div class="card mt-4">
      <div class="card-header pb-0 p-3">
        <div class="row">
          <div class="col-10 d-flex align-items-center">
            <h6 class="mb-0">Daftar Pelanggan</h6>
          </div>
          <div class="col-2">
            <a href="{{ ('admin/register') }}" class="btn btn-icon btn-3 btn-scondary"   style="float: right;" type="button">
                <span class="btn-inner--icon"><i  class="fa fa-plus mr-1"></i></span>
              <span class="btn-inner--text">Tambah</span>
            </a>
          </div>
        </div>
      </div>
      <div class="card-body p-3">
        <div class="row">
          <div class="col-md-12 mb-md-0 mb-4">
            <div class="card">
                <div class="table-responsive">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pelanggan</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Paket / Expired</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $key => $dt)
                        <tr>
                            <td class="text-xs mb-0">
                                {{ $key+1 }}.
                            </td>
                            <td>
                            <div class="d-flex px-2 py-1">
                                <div>
                                  <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-xs">{{ $dt->name }}</h6>
                                  <p class="text-xs text-secondary mb-0">{{ $dt->no_hp }}</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xs font-weight-bold mb-0">{{ ($dt->jenis_paket) }}</p>
                              <span class="text-secondary text-xs font-weight-bold @if (date('Y-m-d') > date($dt->tgl_expired))
                                text-danger
                              @endif"> {{ date('j F, Y', strtotime($dt->tgl_expired)) }}</span>
                            </td>
                            <td >
                              
                              <div class="d-flex px-2 py-1">
                                <div>
                                      <input type="hidden" name="id" value="{{ $dt->id }}">
                                      <a href="{{  route('admin/editData', $dt->id) }}" class="btn btn-dark text-xs mb-0 p-2"><i class="fa fa-edit"></i></a>
                                 
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                  <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ ('admin/hapus/') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $dt->id }}">
                                    <button type="submit" class="btn btn-danger text-xs mb-0 p-2"><i class="fa fa-trash"></i></button>
                                  </form>
                                </div>
                              </div>

                            
                          </td>
                        
                        </tr>
                        @empty
                        <tr>
                            <td class="text-center text-mute" colspan="4">Data ins tidak tersedia</td>
                        </tr>
                        @endforelse
                    </tbody>
                  </table>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    @push('custom-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @endpush
@endsection
