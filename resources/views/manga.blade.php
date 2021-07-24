@php
    use Jenssegers\Agent\Agent as Agent;
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SJC Workshop Manga</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('mangas/assets/css/bd-coming-soon.css')}}">
    <style>
    .navbar-brands {
        font-size: 1.25rem;
        line-height: inherit;
        display: inline-block;
        margin-right: 1rem;
        padding-top: .0625rem;
        padding-bottom: .0625rem;
        white-space: nowrap
    }
    </style>
</head>

<body class="min-vh-100 d-flex flex-column">

    <header>
        <div class="container">
            <nav class="navbar navbar-dark bg-transparenet">
                <a class="navbar-brands" href="#">
                    <img src="{{asset('mangas/assets/images/logo.svg')}}" alt="SJC">
                </a>
                @if ($agent->isMobile())
                    <span style="font-size: 10px" class="navbar-text">13:30 WITA</span>
                    <span style="font-size: 10px" class="navbar-text">25 Juli 2021</span>
                @else
                <span class="navbar-text ml-auto d-none d-sm-inline-block">13:30 WITA</span>
                <span class="navbar-text d-none d-sm-inline-block">25 Juli 2021</span>
                @endif
            </nav>
        </div>
    </header>
    <main class="my-auto">
        <div class="container">
            <h1 class="page-title">Workshop Manga SJC</h1>
            <p class="page-description">Hanya Untuk Siswa SMA Negeri 5 Makassar & Anggota Nihonbu Doumei
            </p>
            <p>Link Workshop</p>
            <nav class="footer-social-links">
                <a href="https://meet.google.com/xyr-nzbj-pdk" class="social-link"><i class="mdi mdi-google"></i></a>
            </nav>
        </div>
    </main>
</body>

</html>
