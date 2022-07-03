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

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12 col-xl-4">
                <div class="card h-100">
                    <div class="card-body p-3">
                        <div class="row text-center">
                            <div class="row">
                                <div class="col">
                                    <a href="{{ URL('customer/coverFoto') }}">
                                    <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                                        <i class="fa fa-picture-o opacity-10"></i>
                                    </div>
                                    </a>
                                    <br>
                                    <label for="">Gambar Cover</label>
                                </div>
                                <div class="col">
                                    <a href="{{ URL('customer/undangan', $acara_id) }}">
                                    <div
                                        class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                                        <i class="fas fa-newspaper opacity-10"></i>
                                    </div>
                                    </a>
                                    <br>
                                    <label for="">Undangan</label>
                                </div>
                                <div class="col">
                                    @if (auth()->user()->jenis_paket == 'ekonomis')
                                        <div
                                        class="icon icon-shape icon-lg shadow text-center border-radius-lg bg-gradient-secondary btn-tooltip"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hanya Tersedia di Paket Spesial" data-container="body" data-animation="true">
                                            <i class="fas fa-book opacity-10"></i>
                                        </div>
                                    @else
                                        <a href="{{ URL('customer/love-story', $acara_id) }}">
                                            <div
                                                class="icon icon-shape icon-lg shadow text-center border-radius-lg bg-gradient-primary">
                                                <i class="fas fa-book opacity-10"></i>
                                            </div>
                                        </a>
                                    @endif
                                    <br>
                                    <label for="">Cerita Cinta</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div
                                        class="icon icon-shape icon-lg shadow text-center border-radius-lg @if (auth()->user()->jenis_paket == 'ekonomis')
                                        bg-gradient-secondary btn-tooltip
                                    @else
                                        bg-gradient-primary
                                    @endif "
                                        @if (auth()->user()->jenis_paket == 'ekonomis')
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hanya Tersedia di Paket Spesial" data-container="body" data-animation="true"
                                        @endif>
                                        <i class="fas fa-file-image opacity-10"></i>
                                    </div>
                                    <br>
                                    <label for="">Foto Prewedd</label>
                                </div>
                                <div class="col">
                                    <div
                                        class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                                        <i class="fas fa-credit-card opacity-10"></i>
                                    </div>
                                    <br>
                                    <label for="">Rekening</label>
                                </div>
                                <div class="col">
                                        <div class="icon icon-shape icon-lg  shadow text-center border-radius-lg
                                        @if (auth()->user()->jenis_paket == 'ekonomis')
                                            bg-gradient-secondary btn-tooltip
                                        @else
                                            bg-gradient-primary
                                        @endif "
                                            @if (auth()->user()->jenis_paket == 'ekonomis')
                                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hanya Tersedia di Paket Spesial" data-container="body" data-animation="true"
                                            @endif >
                                            <i class="fas fa-comments opacity-10" title="Terbuka untuk pake Spesial"></i>
                                        </div>
                                    <br>
                                    <label for="">Ucapan</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div
                                        class="icon icon-shape icon-lg shadow text-center border-radius-lg
                                        @if (auth()->user()->jenis_paket == 'ekonomis')
                                        bg-gradient-secondary btn-tooltip
                                    @else
                                        bg-gradient-primary
                                    @endif "
                                        @if (auth()->user()->jenis_paket == 'ekonomis')
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hanya Tersedia di Paket Spesial" data-container="body" data-animation="true"
                                        @endif >
                                        <i class="fas fa-music opacity-10"></i>
                                    </div>
                                    <br>
                                    <label for="">Lagu Undangan</label>
                                </div>
                                <div class="col">
                                </div>
                                <div class="col">

                                </div>
                            </div>
                            {{-- <div class="row mt-4">
                                <div class="text-cente ">
                                    <a href="" class="btn btn-outline-info"><i class="fa fa-paper-plane opacity-10 mr-2"></i> Sebarkan Undangan</a>
                                </div>
                            </div> --}}
                            <div class="row mt-4">
                                <div class="text-center">
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <a href="javascript:;" onclick="parentNode.submit();"
                                            class="btn btn-outline-danger">Logout</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- Button trigger modal -->
{{-- <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>
        <footer class="footer pt-3  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>, by
                            <a href="https://dayutekno.com" class="font-weight-bold" target="_blank">Darma Ayu Tekno</a>.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div> --}}
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn bg-gradient-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
    @push('custom-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @endpush
@endsection
