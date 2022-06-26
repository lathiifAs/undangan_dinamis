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
              <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Register</li>
            </ol>
        </nav>
    </div>
</div>
<div class="col-md-12 mb-lg-0 mb-4">
    <div class="card mt-4">
      <div class="card-header pb-0 p-3">
        <div class="row">
          <div class="col-10 d-flex align-items-center">
            <h6 class="mb-0 fs-3">Register</h6>
          </div>
          
         

          <div class="col-2">
            <a href="{{ ('/admin') }}" class="btn btn-icon btn-3 btn-outline-secondary" type="button" style="float: right;">
                <span class="btn-inner--icon"><i class="fa fa-arrow-left"></i></span>
              <span class="btn-inner--text">Kembali</span>
            </a>
          </div>
        </div>
      </div>
      
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

      <div class="card-body p-3">
        <div class="row">
          <div class="col-md-12 mb-md-0 mb-4">
            <div class="card">
                    <form action="{{route('admin/inputData')}}">

                    <div class="col-md-12 row">
                        <div class="col-md-6">
                            <label for="example-text-input" class="form-control-label">Nama</label>
                            <input class="form-control" type="text" name="name" placeholder="Nama Lengkap">
                        </div>
                        
                        <div class="row col-md-6">
                            <label for="example-password-input" class="form-control-label">Password</label>
                            <div class="col-6">
                                <input class="form-control" type="text" name="password" placeholder="Password" id="input_pass">
                            </div>
                
                            <div class="col-1">
                                <a href="#" onclick="generate()" class="btn btn-primary"><span>Generate</span></a> 
                            </div>
                        </div>
                    </div>
                    <div class="row col-md-12"> 
                        <div class="col-md-6">
                            <label for="example-tel-input" class="form-control-label">Nomor Ponsel</label>
                            <input class="form-control" type="tel" name="no_hp" placeholder="(9999)-999999999">
                        </div>
                    <div class="row col-md-6">
                        <div class="col-md-12">
                            <label for="example-datetime-local-input" class="form-control-label">Expired</label>
                            <input class="form-control" type="date" name="expired" placeholder="Tanggal berakhir"> 
                        </div>
                    </div>
                    </div>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <label for="example-datetime-local-input" class="form-control-label">Paket</label>
                            <select class="form-select" label="Default select example" name="paket">
                                <option selected>Pilih Paket</option>
                                <option value="ekonimis">Ekonimis</option>
                                <option value="spesial">Spesial</option>
                              </select>
                            
                    </div>
                    <div class="row col-md-12 mt-4">
                        <span><button class="btn btn-icon btn-3 btn-dark" style="float: right;" type="submit" >Kirim</button></span> 
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
    @push('custom-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function generate() {
            var result           = '';
            var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            var charactersLength = characters.length;
            for ( var i = 0; i < 5; i++ ) {
                result += characters.charAt(Math.floor(Math.random() *
                charactersLength));
            }
            console.log(result);
            $('#input_pass').val(result)
            // return result;
        }
    </script>
    @endpush
@endsection




