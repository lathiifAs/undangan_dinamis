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
                                <p><b>Keterangan dalam undangan</b></p>
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
                                <form method="POST" action="{{ URL('customer/update-undangan') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" class="form-control" name="acara_id" value="{{ $data->id }}"
                                        required>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="">Tanggal Acara Pernikahan</label>
                                                <input type="date" class="form-control" value="{{ old('tanggal_wedding', $data->tanggal_wedding) }}" name="tanggal_wedding" id="exampleFormControlInput1"
                                                    placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="mt-3"><span class="badge bg-dark">Tentang Mempelai Pria</span></h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="">Nama Lengkap</label>
                                                <input type="text" class="form-control" id="" name="nama_laki" value="{{ old('nama_laki', $data->nama_laki) }}"
                                                    placeholder="Nama Mempelai Pria">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="">Nama Panggilan</label>
                                                <input type="text" class="form-control" value="{{ old('nama_panggilan_laki', $data->nama_panggilan_laki) }}"
                                                name="nama_panggilan_laki"
                                                    placeholder="Nama Panggilan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="">Nama Ayah</label>
                                                <input type="text" class="form-control" id="" name="ayah_mempelai_laki" value="{{ old('ayah_mempelai_laki', $data->ayah_mempelai_laki) }}"
                                                    placeholder="Ayah Mempelai Pria">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="">Nama Ibu</label>
                                                <input type="text" class="form-control" id="" name="ibu_mempelai_laki" value="{{ old('ibu_mempelai_laki', $data->ibu_mempelai_laki) }}"
                                                    placeholder="Ibu Mempelai Pria">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="">Keterangan Anak Mempelai Pria
                                                    <br><sup>(*Contoh : Anak Pertama dari 5 Saudara)</sup></label>
                                                <input type="text" class="form-control" id="" name="desc_laki" value="{{ old('desc_laki', $data->desc_laki) }}"
                                                    placeholder="Ket. Anak">
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="mt-3"><span class="badge bg-dark">Tentang Mempelai Wanita</span></h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="">Nama Lengkap</label>
                                                <input type="text" class="form-control" id="" name="nama_wanita" value="{{ old('nama_wanita', $data->nama_wanita) }}"
                                                    placeholder="Nama Mempelai Wanita">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="">Nama Panggilan</label>
                                                <input type="text" class="form-control" name="nama_panggilan_wanita" value="{{ old('nama_panggilan_wanita', $data->nama_panggilan_wanita) }}"
                                                    placeholder="Nama Panggilan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="">Nama Ayah</label>
                                                <input type="text" class="form-control" id="" name="ayah_mempelai_wanita" value="{{ old('ayah_mempelai_wanita', $data->ayah_mempelai_wanita) }}"
                                                    placeholder="Ayah Mempelai Pria">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="">Nama Ibu</label>
                                                <input type="text" class="form-control" name="ibu_mempelai_wanita" value="{{ old('ibu_mempelai_wanita', $data->ibu_mempelai_wanita) }}"
                                                    placeholder="Ibu Mempelai Wanita">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="">Keterangan Anak Mempelai Pria
                                                    <br><sup>(*Contoh : Anak Pertama dari 5 Saudara)</sup></label>
                                                <input type="text" class="form-control" id="" name="desc_wanita" value="{{ old('desc_wanita', $data->desc_wanita) }}"
                                                    placeholder="Ket. Anak">
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="mt-3"><span class="badge bg-dark">Jadwal dan Lokasi</span></h5>
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <label for="">Lokasi Hajat</label>
                                        <input type="text" class="form-control" name="lokasi_hajat" value="{{ old('lokasi_hajat', $data->lokasi_hajat) }}"
                                        placeholder="Link googlemaps Lokasi Hajat">
                                        </div>
                                        <label class="mt-1" for=""><i><sup>(*Contoh Link : <a href="https://www.google.co.uk/maps?q=-6.3343491,108.3339911">https://www.google.co.uk/maps?q=-6.3343491,108.3339911)</a></sup></i></label>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="">Waktu Akad Nikah</label>
                                                <div class="row">
                                                    <div class="col-">
                                                        <input type="date" class="form-control" name="tgl_akad" value="{{ old('tgl_akad', $data->tgl_akad) }}"
                                                        placeholder="Tanggal">
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-5">
                                                        <input type="text" class="form-control" name="start_jam_akad" value="{{ old('start_jam_akad', $data->start_jam_akad) }}"
                                                        placeholder="00:00">
                                                    </div>
                                                    <div class="col-2">
                                                        s/d
                                                    </div>
                                                    <div class="col-5">
                                                        <input type="text" class="form-control" name="end_jam_akad" value="{{ old('end_jam_akad', $data->end_jam_akad) }}"
                                                        placeholder="00:00">
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <label for="">Alamat Akad Nikah</label>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <textarea name="alamat_akad" class="form-control" id="" cols="30" rows="2">{{ old('alamat_akad', $data->alamat_akad) }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-12">
                                                    <input type="text" class="form-control" name="link_alamat_akad" value="{{ old('link_alamat_akad', $data->link_alamat_akad) }}"
                                                    placeholder="Link googlemaps Alamat Akad">
                                                    </div>
                                                    <label class="mt-1" for=""><i><sup>(*Contoh Link : <a href="https://www.google.co.uk/maps?q=-6.3343491,108.3339911">https://www.google.co.uk/maps?q=-6.3343491,108.3339911)</a></sup></i></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="">Waktu Resepsi</label>
                                                <div class="row">
                                                    <div class="col">
                                                        <input type="date" class="form-control" name="tgl_akad" value="{{ old('tgl_akad', $data->tgl_akad) }}"
                                                        placeholder="Tanggal">
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-5">
                                                        <input type="text" class="form-control" name="start_jam_resepsi" value="{{ old('start_jam_resepsi', $data->start_jam_resepsi) }}"
                                                        placeholder="00:00">
                                                    </div>
                                                    <div class="col-2">
                                                        s/d
                                                    </div>
                                                    <div class="col-5">
                                                        <input type="text" class="form-control" name="end_jam_resepsi" value="{{ old('end_jam_resepsi', $data->end_jam_resepsi) }}"
                                                        placeholder="00:00">
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <label for="">Alamat Resepsi</label>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <textarea name="alamat_resepsi" class="form-control" id="" cols="30" rows="2">{{ old('alamat_resepsi', $data->alamat_resepsi) }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-12">
                                                    <input type="text" class="form-control" name="link_alamat_resepsi" value="{{ old('link_alamat_resepsi', $data->link_alamat_resepsi) }}"
                                                    placeholder="Link googlemaps Alamat Resepsi">
                                                    </div>
                                                    <label class="mt-1" for=""><i><sup>(*Contoh Link : <a href="https://www.google.co.uk/maps?q=-6.3343491,108.3339911">https://www.google.co.uk/maps?q=-6.3343491,108.3339911)</a></sup></i></label>
                                                </div>
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
