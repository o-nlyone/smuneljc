<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard

* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com
=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Login SJC</title>
  <!-- Favicon -->
  <link rel="icon" href="{{asset('dashboard/assets/img/brand/favicon.png')}}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{asset('dashboard/assets/css/argon.css?v=1.2.0')}}" type="text/css">
</head>

<body class="bg-default">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="{{asset('dashboard/assets/img/brand/white.png')}}">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="/">
                <img src="{{asset('home/assets/img/logo.png')}}">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a href="/" class="nav-link">
              <span class="nav-link-inner--text">Beranda</span>
            </a>
          </li>
        </ul>
        <hr class="d-lg-none" />
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://www.facebook.com/smuneljc" target="_blank" data-toggle="tooltip" data-original-title="Like us on Facebook">
              <i class="fab fa-facebook-square"></i>
              <span class="nav-link-inner--text d-lg-none">Facebook</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://www.instagram.com/smuneljc" target="_blank" data-toggle="tooltip" data-original-title="Follow us on Instagram">
              <i class="fab fa-instagram"></i>
              <span class="nav-link-inner--text d-lg-none">Instagram</span>
            </a>
          </li>
          <li class="nav-item d-none d-lg-block ml-lg-4">
            <a href="/" class="btn btn-neutral btn-icon">
              <span class="nav-link-inner--text">Profil SJC</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div style="background-color: white" class="main-content">
    <!-- Header -->
    <div  class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">Daftar Jadi Anggota SJC</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg style="color: white" x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon  class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-3"><small>Lihat Siapa Saja yang Mendaftar</small></div>
              <div class="btn-wrapper text-center">
                <a href="list-daftar" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--text">List Pendaftar</span>
                </a>
              </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Lengkapi Formulir Berikut</small>
                @if (session()->get('error'))
                <div class="alert alert-danger" role="alert">
                    <strong>Error!</strong> {{session('error')}}
                </div>
              @endif
              @if (session()->get('success'))
                <div class="alert alert-success" role="alert">
                    <strong>Success!</strong> {{session('success')}}
                </div>
              @endif
              </div>
              <form role="form" action="daftar" method="POST">
                  @csrf
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Nama</label>
                    <input name="name" class="form-control" type="text" placeholder="Nama Lengkap" id="example-text-input" required>
                </div>
                <div class="form-group">
                    <label for="example-search-input" class="form-control-label">NIS (bukan NISN)</label>
                    <input name="stb" class="form-control" type="search" placeholder="2021xxx" id="example-search-input" required>
                </div>
                <div class="form-group">
                <label for="example-search-input" class="form-control-label">Jenis Kelamin</label>
                <div class="custom-control custom-radio mb-3">
                    <input name="gender" type="radio" id="customRadio1" class="custom-control-input" value="L" required>
                    <label class="custom-control-label" for="customRadio1">Laki-Laki</label>
                  </div>
                  <div class="custom-control custom-radio">
                    <input name="gender" type="radio" id="customRadio2" class="custom-control-input" value="P" required>
                    <label class="custom-control-label" for="customRadio2">Perempuan</label>
                  </div>
                </div>
                <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Kelas/Gugus</label>
                    <input name="kelas" class="form-control" type="text" placeholder="IPS4/GUGUS4" id="example-email-input" required>
                </div>
                <div class="form-group">
                    <label id="wassap" for="example-email-input" class="form-control-label">Whatsapp</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">+62</span>
                        </div>
                        <input name="phone" type="text" class="form-control" placeholder="81234567890" aria-label="81234567890" aria-describedby="basic-addon1">
                    </div>
                    <a href="#wassap" class="text-light"><small>Pastikan Nomor Whatsappmu Aktif</small></a>
                </div>
                <div class="form-group">
                    <label id="pinning" for="example-email-input" class="form-control-label">PIN</label>
                    <input name="pin" class="form-control" type="number" placeholder="6 Digit Angka" id="example-email-input" required>
                    <a href="#pinning" class="text-light"><small>PIN digunakan untuk mengedit formulir</small></a>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary my-4">Daftar SJC</button>
                  </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="https://wa.me/6285158113733" class="text-dark"><small>Bingung?, Tanyakan Disini</small></a>
            </div>
            <div class="col-6 text-right">
              {{-- <a href="#" class="text-light"><small>PIN digunakan untuk mengedit</small></a> --}}
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer style="background-color: white" class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2021 <a href="#" class="font-weight-bold ml-1" target="_blank">SJC</a>
          </div>
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a href="/" class="nav-link" >SJC</a>
            </li>
            <li class="nav-item">
              <a href="about" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="daftar" class="nav-link" target="_blank">Pendaftaran</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{asset('dashboard/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('dashboard/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('dashboard/assets/vendor/js-cookie/js.cookie.js')}}"></script>
  <script src="{{asset('dashboard/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
  <script src="{{asset('dashboard/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
  <!-- Argon JS -->
  <script src="{{asset('dashboard/assets/js/argon.js?v=1.2.0')}}"></script>
</body>

</html>
