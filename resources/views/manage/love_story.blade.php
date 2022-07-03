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
                                <a href="{{ '/admin' }}" class="btn-outline-secondary" type="button" style="">
                                    <span class="btn-inner--icon"><i class="fa fa-arrow-left"></i></span>
                                    <span class="btn-inner--text"></span>
                                </a>
                            </div>
                            <div class="col-11">
                                <p><b>Love Story</b></p>
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
                            <div class="col-12 row mt-2">
                                <form method="POST" action="{{ URL('customer/update-love-story') }}">
                                    @csrf
                                    <input type="hidden" class="form-control" name="acara_id" value="{{ $acara_id }}"
                                        required>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="">1. Pertemuan
                                                    <br><sup>Contoh : Pertemuan singkat berawal dari Media sosial dalam berapa waktu kami bertemu di rumah mempelai wanita untuk mengenal lebih dekat, selain itu kami mencari tempat yang cocok untuk berbagi cerita dan pengalaman.</sup> </label>
                                                <textarea name="pertemuan" class="form-control" id="" cols="30" rows="5" placeholder="Tidak wajib Diisi.">{{ old('pertemuan', $data['pertemuan']) }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <div class="form-group">
                                                <label class="">2. Menjalin Hubungan (Pacaran)
                                                    <br><sup>Contoh : Setelah kurang lebih 3 minggu kita menjalin komunikasi dengan intens kita pun bersepakat untuk mengenal lebih dalam dengan huungan pacaran.</sup> </label>
                                                <textarea name="pacaran" class="form-control" id="" cols="30" rows="5" placeholder="Tidak wajib Diisi.">{{ old('pacaran', $data['pacaran']) }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <div class="form-group">
                                                <label class="">3. Tunangan
                                                    <br><sup>Contoh : Dalam berjalannya 1 tahun kita memutuskan untuk saling mengikat agar saling terjaganya kedua hubungan, kami bertunangan pada tanggal 2 September 2021.</sup> </label>
                                                <textarea name="tunangan" class="form-control" id="" cols="30" rows="5" placeholder="Tidak wajib Diisi.">{{ old('tunangan', $data['tunangan']) }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <div class="form-group">
                                                <label class="">4. Lamaran
                                                    <br><sup>Contoh : Setelah bertunangan, 2 bulan setelahnya kedua belah pihak bersepakat untuk menentukan tanggal dari hari spesial pernikahan.</sup> </label>
                                                <textarea name="lamaran" class="form-control" id="" cols="30" rows="5" placeholder="Tidak wajib Diisi.">{{ old('lamaran', $data['lamaran']) }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="text-align: right">
                                        <button type="submit" class="btn btn-primary mt-2">
                                            SIMPAN
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('custom-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script>


        </script>
    @endpush
@endsection
