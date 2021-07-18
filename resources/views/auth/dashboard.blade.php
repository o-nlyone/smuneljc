<?php

use App\Http\Controllers\auth\logoutController;
use Jenssegers\Agent\Agent as Agent;

$Agent = new Agent();

$pendaftar = DB::table('forms')->count();
$cowok = DB::table('forms')->where('gender', '=', 'L')->count();
$cewek = DB::table('forms')->where('gender', '=', 'P')->count();
$grow20 = number_format(DB::table('forms')->count()/21*100)-100;
$grow19 = DB::table('forms')->count()-27/100;
$pesan = DB::table('details')->where('idtext', '1')->first();
$code = DB::table('details')->where('idtext', '2')->first();
$contactwa = DB::table('details')->where('idtext', '3')->first();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Nlyone">
    <title>Dashboard Nlyone</title>
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


<body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  align-items-center">
                <a class="navbar-brand" href="/">
                    <img src="{{asset('home/assets/img/logo.png')}}" class="navbar-brand-img" alt="...">
                </a>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        @if ($Agent->isMobile())
                        <li class="nav-item">
                            <a class="nav-link">
                                <div class="pr-3 sidenav-toggler sidenav-toggler" data-action="sidenav-pin"
                                    data-target="#sidenav-main">
                                    <div class="sidenav-toggler-inner">
                                        <i class="sidenav-toggler-line"></i>
                                        <i class="sidenav-toggler-line"></i>
                                        <i class="sidenav-toggler-line"></i>
                                    </div>
                                </div>
                            </a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link" href="/dash">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Divider -->
                    <hr class="my-3">
                    <!-- Heading -->
                    <h6 class="navbar-heading p-0 text-muted">
                        <span class="docs-normal">Lain-Lain</span>
                    </h6>
                    <!-- Navigation -->
                    <ul class="navbar-nav mb-md-3">
                        <li class="nav-item">
                            <a class="nav-link"
                                href="#"
                                data-toggle="modal"
                                data-target="#securitycode">
                                <i class="ni ni-lock-circle-open"></i>
                                <span class="nav-link-text">Security Code</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="#"
                                data-toggle="modal"
                                data-target="#pesan">
                                <i class="ni ni-single-copy-04"></i>
                                <span class="nav-link-text">Pesan Default</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="#"
                                data-toggle="modal"
                                data-target="#whatsappcon">
                                <i class="ni ni-mobile-button"></i>
                                <span class="nav-link-text">Contact Number</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="https://wa.me/6281354000500"
                                target="_blank">
                                <i class="ni ni-spaceship"></i>
                                <span class="nav-link-text">Tukang Servis</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active active-pro" href="logout">
                                <i class="ni ni-user-run"></i>
                                <span class="nav-link-text">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Search form -->
                    <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                        <div class="form-group mb-0">
                            <div class="input-group input-group-alternative input-group-merge">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                </div>
                                <input class="form-control" placeholder="Search" type="text">
                            </div>
                        </div>
                        <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main"
                            aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </form>
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center  ml-md-auto ">
                        <li class="nav-item d-xl-none">
                            <!-- Sidenav toggler -->
                            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin"
                                data-target="#sidenav-main">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item d-sm-none">
                            <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                                <i class="ni ni-zoom-split-in"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="ni ni-bell-55"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="ni ni-ungroup"></i>
                            </a>
                            <div
                                class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-white  dropdown-menu-right ">
                                <div class="row shortcuts px-4">
                                    <a href="#!" class="col-4 shortcut-item">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                                            <i class="ni ni-calendar-grid-58"></i>
                                        </span>
                                        <small>Menu1</small>
                                    </a>
                                    <a href="#!" class="col-4 shortcut-item">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                                            <i class="ni ni-email-83"></i>
                                        </span>
                                        <small>Menu2</small>
                                    </a>
                                    <a href="#!" class="col-4 shortcut-item">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                                            <i class="ni ni-credit-card"></i>
                                        </span>
                                        <small>Menu3</small>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder"
                                            src="{{asset('dashboard/assets/img/brand/white.png')}}">
                                    </span>
                                    <div class="media-body  ml-2  d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->name }}</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu  dropdown-menu-right ">
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome!</h6>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a href="{{ url('logout') }}" class="dropdown-item">
                                    <i class="ni ni-user-run"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header -->
        <!-- Header -->
        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0">Dashboard Pendaftaran</h6>
                        </div>
                    </div>
                    {{-- cards --}}
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Total Pendaftar 2021</h5>
                                            <span class="h2 font-weight-bold mb-0">{{$pendaftar}}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                                <i class="ni ni-chart-pie-35"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Pendaftar Laki-Laki</h5>
                                            <span class="h2 font-weight-bold mb-0">{{$cowok}}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                                <i class="ni ni-single-02"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Pendaftar Perempuan</h5>
                                            <span class="h2 font-weight-bold mb-0">{{$cewek}}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-gradient-pink text-white rounded-circle shadow">
                                                <i class="ni ni-single-02"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Perkembangan Pendaftar 2021</h5>
                                            <span class="h2 font-weight-bold mb-0">{{$grow20}}%</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                                <i class="ni ni-chart-bar-32"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- endcards --}}
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header border-0">
                            <h3 class="mb-0">Data Pendaftar</h3>
                        </div>
                        <!-- Light table -->
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort" data-sort="name">No.</th>
                                        <th scope="col" class="sort" data-sort="budget">NIS</th>
                                        <th scope="col" class="sort" data-sort="status">Nama</th>
                                        <th scope="col" class="sort" data-sort="status">WhatsApp</th>
                                        <th scope="col" class="sort" data-sort="status">Nomor WA</th>
                                        <th scope="col" class="sort" data-sort="status">PIN</th>
                                        <th scope="col" class="sort" data-sort="status">Waktu Daftar</th>
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
                                            <span class="badge badge-dot mr-4">
                                                @if ($key->gender == 'L')
                                                    <i class="bg-teal"></i>
                                                @endif
                                                @if ($key->gender == 'P')
                                                <i class="bg-pink"></i>
                                                @endif
                                                <span class="status">{{$key->name}}</span>
                                            </span>
                                        </td>
                                        <td>
                                            <a href="https://api.whatsapp.com/send/?phone=%2B62{{$key->phone}}
                                                @if ($pesan->pesan == ".")

                                                @else
                                                    &text=Hai%20{{$key->name}}%2C%0A{{$pesan->pesan}}
                                                @endif
                                                " target="_blank" type="button" class="btn btn-success">Chat</a>
                                        </td>
                                        <td>
                                            <span class="status">{{$key->phone}}</span>
                                        </td>
                                        <td>
                                            <span class="status">{{$key->pin}}</span>
                                        </td>
                                        <td>
                                            <span class="status">{{$key->tgl_daftar}}</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <form action="deleted" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{$key->id}}">
                                                        <input type="submit" class="dropdown-item"
                                                            value="Hapus Formulir">
                                                    </form>
                                                    <a href="#" data-toggle="modal" data-target="#hey{{$key->id}}"
                                                        class="dropdown-item">Edit Formulir</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    {{-- endtable --}}
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
                                                            <form role="form" action="update" method="POST">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label for="example-text-input" class="form-control-label">ID</label>
                                                                    <input name="id" class="form-control" value="{{$key->id}}" type="text" placeholder="Nama Lengkap" id="example-text-input" readonly>
                                                                </div>
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
                                                                        id="example-search-input" required>
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
                                                                <div class="form-group">
                                                                    <label for="example-email-input"
                                                                        class="form-control-label">PIN</label>
                                                                    <input name="pin" class="form-control" type="number"
                                                                        placeholder="0123456" value="{{$key->pin}}"
                                                                        id="example-email-input" required>
                                                                </div>
                                                                <div class="text-center">
                                                                    <button type="submit"
                                                                        class="btn btn-primary my-4">Update</button>
                                                                </div>
                                                            </form>
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
                        <!-- Card footer -->
                        <div class="card-footer py-4">
                            @if (session()->get('success'))
                            <div class="alert alert-success" role="alert">
                                <strong>Success!</strong> {{session('success')}}
                            </div>
                            @endif
                            <nav aria-label="...">
                                <ul class="pagination justify-content-end mb-0">
                                    <li class="page-item">
                                        <div class="mb0 text-right">
                                            <a href="print"
                                                class="btn btn-sm btn-default">Print Semua Formulir</a>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <footer class="footer pt-0">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6">
                        <div class="copyright text-center  text-lg-left  text-muted">
                            &copy; 2020 <a href="https://www.smuneljc.xyz" class="font-weight-bold ml-1"
                                target="_blank">SJC</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.smuneljc.xyz" class="nav-link" target="_blank">SJC</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.smuneljc.xyz" class="nav-link"
                                    target="_blank">About
                                    Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.smuneljc.xyz" class="nav-link" target="_blank">Blog</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    {{-- modalpesan --}}
    <div class="modal fade" id="pesan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Chat WA Default</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="whatsapp" method="post">
                @csrf
                <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Pesan</label><br>
                            <a href="#" class="text-light">Hai, (Nama).</a>
                            <textarea name="pesan" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$pesan->pesan}}</textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    {{-- endmodalpesan --}}

        {{-- modalpesan --}}
        <div class="modal fade" id="securitycode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Kode Pendaftaran</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="code" method="post">
                    @csrf
                    <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Kode</label><br>
                                <input name="pesan" class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{$code->pesan}}" onkeyup="this.value = this.value.toUpperCase();">
                                <a href="#" class="text-light"><small>Kode ini akan menjadi syarat bagi calon anggota untuk mendaftar</small></a>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        {{-- endmodalpesan --}}

                {{-- modalpesan --}}
                <div class="modal fade" id="whatsappcon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Nomor WhatsApp</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="numberwa" method="post">
                            @csrf
                            <div class="modal-body">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Nomor Telepon</label><br>
                                        <input name="pesan" type="number" placeholder="812345678 (tanpa angka 0 didepan)" class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{$contactwa->pesan}}">
                                        <a href="#" class="text-light"><small>Nomor Telepon Ini Akan Menjadi Link untuk Banyak tombol contact di Website</small></a>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
                {{-- endmodalpesan --}}
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{asset('dashboard/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/vendor/js-cookie/js.cookie.js')}}"></script>
    <script src="{{asset('dashboard/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/vendor/dropzone/dist/min/dropzone.min.js')}}"></script>
    <!-- Argon JS -->
    <script src="{{asset('dashboard/assets/js/argon.js?v=1.2.0')}}"></script>
</body>

</html>
