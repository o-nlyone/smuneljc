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
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}"
        type="text/css">
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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"
                aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
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
                            <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                                aria-label="Toggle navigation">
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
                        <a class="nav-link nav-link-icon" href="https://www.facebook.com/smuneljc" target="_blank"
                            data-toggle="tooltip" data-original-title="Like us on Facebook">
                            <i class="fab fa-facebook-square"></i>
                            <span class="nav-link-inner--text d-lg-none">Facebook</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="https://www.instagram.com/smuneljc" target="_blank"
                            data-toggle="tooltip" data-original-title="Follow us on Instagram">
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
        <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                            <h1 class="text-white">List Calon Anggota SJC</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg style="color: white" x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary border-0 mb-0">
                        <div class="card-header bg-transparent pb-5">
                            <div class="text-muted text-center mt-2 mb-3"><small> Belum Terdaftar?</small></div>
                            <div class="btn-wrapper text-center">
                                <a href="daftar" class="btn btn-neutral btn-icon">
                                    <span class="btn-inner--text">Daftar Sekarang</span>
                                </a>
                            </div>
                        </div>
                        <div class="card-body px-lg-5 py-lg-5">
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
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" class="sort" data-sort="name">No.</th>
                                            <th scope="col" class="sort" data-sort="budget">Stambuk</th>
                                            <th scope="col" class="sort" data-sort="status">Nama</th>
                                            <th scope="col" class="sort" data-sort="status">Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">

                                        <?php
                                            $querys = DB::table('forms')->get();

                                            foreach ($querys as $key) {
                                            ?>

                                        {{-- MULAI table --}}
                                        <tr>
                                            <td class="budget">
                                                {{$key->id}}
                                            </td>
                                            <td>
                                                <span class="status">{{$key->stb}}</span>
                                            </td>
                                            <td>
                                                <span class="status">{{$key->name}}</span>
                                            </td>
                                            <td>
                                                @if ($key->id != 1)
                                                <div class="dropdown">
                                                    <a class="btn btn-sm btn-icon-only text-light" href="#"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                        <a href="#" data-toggle="modal" data-target="#pin{{$key->id}}"
                                                            class="dropdown-item">Edit Formulir</a>
                                                    </div>
                                                </div>
                                                @endif
                                            </td>
                                        </tr>
                                        {{-- SELESAI table --}}

                                        {{-- pincheck --}}
                                        <div class="modal fade" id="pin{{$key->id}}" tabindex="-1" role="dialog"
                                            aria-labelledby="#hey{{$key->id}}" aria-hidden="true">
                                            <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body p-0">
                                                        <div class="card bg-secondary border-0 mb-0">
                                                            <div class="card-body px-lg-5 py-lg-5">
                                                                <div class="text-center text-muted mb-4">
                                                                    <small>Edit Formulir {{$key->name}}</small>
                                                                </div>
                                                                <form role="form" action="pincheck" method="POST">
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <label for="example-text-input"
                                                                            class="form-control-label">PIN</label>
                                                                        <input name="pin" class="form-control" type="number"
                                                                            placeholder="6 Digit Angka" id="example-text-input"
                                                                            required>
                                                                    </div>
                                                                    <input type="submit" data-toggle="modal" data-target="#hey{{$key->id}}" data-dismiss="modal" aria-label="Close" class="btn btn-primary btn-sm" value="edit" />
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- endpincheck --}}

                                            {{-- modal --}}
                                        <div class="modal fade" id="hey{{$key->id}}" tabindex="-1" role="dialog"
                                            aria-labelledby="#hey{{$key->id}}" aria-hidden="true">
                                            <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body p-0">
                                                        <div class="card bg-secondary border-0 mb-0">
                                                            <div class="card-body px-lg-5 py-lg-5">
                                                                <div class="text-center text-muted mb-4">
                                                                    <small>Edit Formulir {{$key->name}}</small>
                                                                </div>
                                                                @if (session()->get('match'))
                                                                <form role="form" action="update" method="POST">
                                                                    @csrf
                                                                        <input name="id" class="form-control" value="{{$key->id}}" type="text" placeholder="Nama Lengkap" id="example-text-input" hidden>

                                                                    <div class="form-group">
                                                                        <label for="example-text-input"
                                                                            class="form-control-label">Nama</label>
                                                                        <input name="name" class="form-control" type="text"
                                                                            placeholder="Nama Lengkap"
                                                                            value="{{$key->name}}" id="example-text-input"
                                                                            required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="example-search-input"
                                                                            class="form-control-label">NIS (bukan
                                                                            NISN)</label>
                                                                        <input name="stb" class="form-control" type="search"
                                                                            value="{{$key->stb}}" placeholder="2021xxx"
                                                                            id="example-search-input" readonly>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="example-email-input"
                                                                            class="form-control-label">Kelas/Gugus</label>
                                                                        <input name="kelas" class="form-control" type="text"
                                                                            value="{{$key->kelas}}"
                                                                            placeholder="IPS4/GUGUS4"
                                                                            id="example-email-input" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="example-email-input"
                                                                            class="form-control-label">Whatsapp</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text"
                                                                                    id="basic-addon1">+62</span>
                                                                            </div>
                                                                            <input name="phone" type="text"
                                                                                class="form-control" value="{{$key->phone}}"
                                                                                placeholder="081234567890"
                                                                                aria-label="081234567890"
                                                                                aria-describedby="basic-addon1">
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-center">
                                                                        <button type="submit"
                                                                            class="btn btn-primary my-4">Update</button>
                                                                    </div>
                                                                </form>
                                                                @else
                                                                <div class="alert alert-danger" role="alert">
                                                                    <strong>Error!</strong> Pin Salah
                                                                </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- endmodal --}}


                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                        </div>
                        <div class="col-6 text-right">
                            <a href="https://wa.me/6285158113733" class="text-dark"><small>Lupa Pin?, Chat disini</small></a>
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
                            <a href="/" class="nav-link">SJC</a>
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
