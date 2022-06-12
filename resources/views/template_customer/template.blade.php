<!--
=========================================================
* Soft UI Dashboard - v1.0.3
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ URL('admin_template/assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ URL('admin_template/assets/img/favicon.png') }}">
  <title>
    Soft UI Dashboard by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{ URL('admin_template/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ URL('admin_template/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ URL('admin_template/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ URL('admin_template/assets/css/soft-ui-dashboard.css?v=1.0.3') }}" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2">
      <div class="container-fluid py-1">
        <nav aria-label="breadcrumb">

        </nav>
        <div class="collapse navbar-collapse me-md-0 me-sm-4 mt-sm-0 mt-5" id="navbar">
          <div class="ms-md-auto pe-md-5 d-flex align-items-center">
            <div class="input-group">
                <label for="" class="text-white">Akun Berlaku s / d </label>
                <label for="" class="text-white">{{ date('j F, Y', strtotime(auth()->user()->tgl_expired)) }}</label>

            </div>
          </div>
          <ul class="navbar-nav justify-content-end col-md-1">
            <li class="nav-item d-flex align-items-center">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a href="javascript:;}"  onclick="parentNode.submit();"  class="nav-link text-white font-weight-bold px-0">
                        <i class="fa fa-sign-out me-sm-1"></i>
                        <span class="d-sm-inline d-none">Logout</span>
                      </a>
                </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    @yield('konten')

  </div>

  <!--   Core JS Files   -->
  <script src="{{ URL('admin_template/assets/js/core/popper.min.js') }}"></script>
  <script src="{{ URL('admin_template/assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ URL('admin_template/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ URL('admin_template/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ URL('admin_template/assets/js/soft-ui-dashboard.min.js?v=1.0.3') }}"></script>

  @stack('custom-scripts')

</body>

</html>
