

@extends('template_customer.template')

@section('konten')
    <!-- End Navbar -->
    <div class="container-fluid">
        <div class="page-header min-height-250 border-radius-xl mt-4"
        style="background-image: url('admin_template/assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n7 overflow-hidden">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="{{ URL('admin_template/assets/img/cincin.jpg') }}" alt="profile_image"
                            class="w-95 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            {{ auth()->user()->name }}
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            Paket {{ auth()->user()->jenis_paket }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-1">
        <div class="row">
            <div class="col-12 col-xl-4">
                <div class="card h-100">
                    <div class="card-body">
                            <div class="row">
                                <div class="col-1">
                                    <a href="{{ ('/admin') }}" class="btn-outline-secondary" type="button" style="">
                                        <span class="btn-inner--icon"><i class="fa fa-arrow-left"></i></span>
                                      <span class="btn-inner--text"></span>
                                    </a>
                                </div>
                                <div class="col-11">
                                    <p><b>Masukan foto baru yang ingin diganti</b></p>
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

                            <div class="row">
                                <div class="col-3">
                                    <label class="">Upload foto</label>
                                </div>
                                <div class="row">
                                    <div class="col-12 justify-content-center">
                                        <div>
                                            <img src="{{ asset($data->gambar_path.$data->gambar_nama) }}"  class="card-img-top">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 row mt-2">

                                    <form method="POST" action="{{ URL('customer/updatecoverFoto') }}" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" class="form-control" name="id" value="{{ $data->id }}" required>
                                    <input type="hidden" class="form-control" name="gambar_path_lama" value="{{ $data->gambar_path }}" required>
                                    <input type="hidden" class="form-control" name="gambar_lama" value="{{ $data->gambar_nama }}" required>

                                    <input type="file" class="form-control" name="filename" id="image" onchange="previewImage()"  required>

                                    <div class="col-lg-3"  style="text-align: right">
                                        <button type="submit" class="btn btn-primary mt-2">
                                            {{ __('Upload') }}
                                        </button>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('custom-scripts')
<script>
    function previewImage{
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';
    const oFReader = new fileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.terget.result;
    }
    }
</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @endpush
@endsection
