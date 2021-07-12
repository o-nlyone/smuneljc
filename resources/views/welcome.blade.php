<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>SmunelJC</title>


    <!-- Favicon -->
    <link rel="icon" href="{{asset('dashboard/assets/img/brand/favicon.png')}}" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('home/assets/css/bootstrap.min.css')}}">
    <!-- Icon -->
    <link rel="stylesheet" href="{{asset('home/assets/fonts/line-icons.css')}}">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="{{asset('home/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/assets/css/owl.theme.css')}}">

    <link rel="stylesheet" href="{{asset('home/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('home/assets/css/nivo-lightbox.css')}}">
    <!-- Animate -->
    <link rel="stylesheet" href="{{asset('home/assets/css/animate.css')}}">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{asset('home/assets/css/main.css')}}">
    <!-- Responsive Style -->
    <link rel="stylesheet" href="{{asset('home/assets/css/responsive.css')}}">

</head>

<body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a href="index.html" class="navbar-brand"><img style="width:100px; height:auto"
                        src="{{asset('home/assets/img/logo.png')}}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="lni-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
                        <li class="nav-item active">
                            <a class="nav-link" href="#hero-area">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="daftar">
                                Daftar
                            </a>
                        </li>
                        @auth
                        <li class="nav-item">
                            @csrf
                            <form>
                                <a class="nav-link" href="logout">
                                    Logout
                                </a>
                            </form>
                        </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Hero Area Start -->
        <div id="hero-area" class="hero-area-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                        <div class="contents">
                            <h2 style="color: #F63854;" class="head-title">Smunel Japanese <br>Community</h2>
                            <p>Ekstrakulikuler Budaya Jepang Sekolah Menengah Atas Negeri 5 Makassar</p>
                            <div class="header-button">
                                @guest
                                <a rel="nofollow" href="daftar" class="btn btn-common">Daftar Sekarang</a>
                                <a href="https://www.instagram.com/smuneljc/" target="_blank"
                                    class="btn btn-border video-popup">Instagram</a>
                                @endguest
                                @auth
                                <a rel="nofollow" href="/dash" class="btn btn-common">Dashboard</a>
                                <a href="logout" class="btn btn-border video-popup">Logout</a>
                                @endauth
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                        <div class="intro-img">
                            <img class="img-fluid" src="{{asset('home/assets/img/intro-mobile.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hero Area End -->

    </header>
    <!-- Header Area wrapper End -->


    <!-- About Section start -->
    <div class="about-area section-padding bg-gray">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-titles wow fadeInDown" data-wow-delay="0.3s">Tentang Ekskul</h2>
                <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12 info">
                    <div class="about-wrapper wow fadeInLeft" data-wow-delay="0.3s">
                        <div>
                            <div class="site-heading">
                                <p class="mb-3">Tentang Smunel Japanese Community</p>
                                <h2 class="section-title">Ekstrakulikuler Budaya Jepang di Smunel</h2>
                            </div>
                            <div class="content">
                                <p>
                                    Smunel Japanese Community adalah Ekstrakulikuler Budaya Jepang yang hadir sejak 2017
                                    menjadi wadah untuk mengembangkan Minat dan Prestasi, serta Kreativitas siswa SMA
                                    NEGERI 5 Makassar Khususnya Budaya Jepang.
                                </p>
                                <a href="daftar" class="btn btn-common mt-3">Gabung</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInRight" data-wow-delay="0.3s">
                    <iframe class="videoplay" src="https://www.youtube.com/embed/yOCq7sCmhAk?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

        <!-- Pricing section Start -->
        <section id="pricing" class="section-padding">
            <div class="container">
              <div class="section-header text-center">
                <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Pencapaian</h2>
                <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="title">
                    </div>
                    <div class="title">
                    </div>
                  <div class="table wow fadeInLeft" data-wow-delay="1.2s">
                    <div class="icon-box">
                      <i class="lni-star"></i>
                    </div>
                    <div class="pricing-header">
                      <p class="price-value">Program Kerja</p>
                    </div>
                    <div class="title">
                        <h3>5 Program Kerja</h3>
                    </div>
                    <ul class="description">
                      <li>Gakuensai Festival</li>
                      <li>Tenji Kyanpu</li>
                      <li>Workshop Manga</li>
                      <li>Kegiatan Mingguan</li>
                      <li>PKK-SJC</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12 active">
                  <div class="table wow fadeInUp" id="active-tb" data-wow-delay="1.2s">
                    <div class="icon-box">
                      <i class="lni-star"></i>
                    </div>
                    <div class="pricing-header">
                      <p class="price-value">Prestasi</p>
                    </div>
                    <div class="title">
                        <h3>14 Prestasi</h3>
                    </div>
                    <ul class="description">
                      <li>Juara 1 Yonkoma 2018</li>
                      <li>Juara 1 Cosplay CF 2018</li>
                      <li>Juara 1 Cerdas Cermat 2016</li>
                      <li>Juara 1, 2, 3 Art Contest 2020</li>
                      <li>Juara 2 Baca Kana 2019</li>
                      <li>Juara 2, 3 Baca Kanji 2019</li>
                      <li>Juara 2 Baca Kana 2017</li>
                      <li>Juara 3 Chara Design 2019</li>
                      <li>Juara 3 Yonkoma 2019</li>
                      <li>Juara H2 Kanji CF 2019</li>
                      <li>Juara H2 Ranking 1 2019</li>
                    </ul>
                 </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="title">
                    </div>
                    <div class="title">
                    </div>
                  <div class="table wow fadeInRight" data-wow-delay="1.2s">
                    <div class="icon-box">
                      <i class="lni-star"></i>
                    </div>
                    <div class="pricing-header">
                      <p class="price-value">Karya Kreatif</p>
                    </div>
                    <div class="title">
                      <h3>20+ Karya</h3>
                    </div>
                    <ul class="description">
                      <li>Itsuha & Itsuki</li>
                      <li>5 Yonkoma Manga</li>
                      <li>4 Summer Theme Art</li>
                      <li>10+ Shodo</li>
                      <li>Website Profil</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Pricing Table Section End -->

    <section id="team" class="section-padding bg-gray">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-titles wow fadeInDown" data-wow-delay="0.3s">Pengurus Inti SJC</h2>
                <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12">

                    <div class="team-item wow fadeInRight" data-wow-delay="0.2s">
                        <div class="team-img">
                            <img class="img-fluid" src="{{asset('home/assets/img/team/team-01.png')}}" alt="">
                        </div>
                        <div class="contetn">
                            <div class="info-text">
                                <h3><a target="_blank" href="https://instagram.com/muh.nabill_t">Muhammad Nabil
                                        Taufik</a></h3>
                                <p>Ketua Umum SJC</p>
                            </div>
                            <p>if you have a talent, put full power into it.</p>
                            <ul class="social-icons">
                                <li><a target="_blank" href="https://instagram.com/muh.nabill_t"><i
                                            class="lni lni-instagram-filled" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-md-12 col-xs-12">

                    <div class="team-item wow fadeInRight" data-wow-delay="0.4s">
                        <div class="team-img">
                            <img class="img-fluid" src="{{asset('home/assets/img/team/team-03.png')}}" alt="">
                        </div>
                        <div class="contetn">
                            <div class="info-text">
                                <h3><a target="_blank" href="https://instagram.com/raihanith">Raihani Thami</a></h3>
                                <p>Koordinator Umum SJC</p>
                            </div>
                            <p>Don't wait for the right time to improve yourself, because now is the time. Yes, now.</p>
                            <ul class="social-icons">
                                <li><a target="_blank" href="https://instagram.com/raihanith"><i
                                            class="lni lni-instagram-filled" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-md-12 col-xs-12">

                    <div class="team-item wow fadeInRight" data-wow-delay="0.6s">
                        <div class="team-img">
                            <img class="img-fluid" src="{{asset('home/assets/img/team/team-02.png')}}" alt="">
                        </div>
                        <div class="contetn">
                            <div class="info-text">
                                <h3><a target="_blank" href="https://instagram.com/putriladyy">Putri Lady Dhiya
                                        Tendean</a>
                                </h3>
                                <p>Sekertaris SJC</p>
                            </div>
                            <p>Study hard, play hard, then istira-hard</p>
                            <ul class="social-icons">
                                <li><a target="_blank" href="https://instagram.com/putriladyy"><i
                                            class="lni lni-instagram-filled" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-md-12 col-xs-12">

                    <div class="team-item wow fadeInRight" data-wow-delay="0.8s">
                        <div class="team-img">
                            <img class="img-fluid" src="{{asset('home/assets/img/team/team-05.jpg')}}" alt="">
                        </div>
                        <div class="contetn">
                            <div class="info-text">
                                <h3><a target="_blank" href="https://instagram.com/putrymarsya_">Putri Qoidah Marsya</a></h3>
                                <p>Bendahara SJC</p>
                            </div>
                            <p>Do good without expecting anything in return.</p>
                            <ul class="social-icons">
                                <li><a target="_blank" href="https://instagram.com/putrymarsya_"><i
                                            class="lni lni-instagram-filled" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- divisi --}}

    <section id="testimonial" class="testimonial section-padding">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Koordinator Divisi SJC</h2>
                <div class="wshape wow fadeInDown" data-wow-delay="0.3s"></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="testimonials" class="owl-carousel wow fadeInUp" data-wow-delay="1.2s">
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="img-thumb">
                                    <img src="{{asset('home/assets/img/testimonial/img1.jpg')}}" alt="">
                                </div>
                                <div class="info">
                                    <h2><a href="https://instagram.com/triple_al3">Ali Akbar Azhari</a></h2>
                                    <h3><a href="https://instagram.com/triple_al3">Koordinator Divisi 火</a></h3>
                                </div>
                                <div class="content">
                                    <p class="description">Like the steam of air, it never goes down, only goes up.</p>
                                    <ul class="social-icons">
                                        <li><a target="_blank" href="https://instagram.com/triple_al3"><i
                                                    class="lni lni-instagram-filled" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="img-thumb">
                                    <img src="{{asset('home/assets/img/testimonial/img2.jpg')}}" alt="">
                                </div>
                                <div class="info">
                                    <h2><a href="https://instagram.com/anglnewrd">Angeline Wisnu Wardani</a></h2>
                                    <h3><a href="https://instagram.com/anglnewrd">Koordinator Divisi 風</a></h3>
                                </div>
                                <div class="content">
                                    <p class="description">Doing what you love and loving what you do.<br> .</p>
                                    <ul class="social-icons">
                                        <li><a target="_blank" href="https://instagram.com/anglnewrd"><i
                                                    class="lni lni-instagram-filled" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="img-thumb">
                                    <img src="{{asset('home/assets/img/testimonial/img2.jpg')}}" alt="">
                                </div>
                                <div class="info">
                                    <h2><a href="https://instagram.com/kou25_">Shelyn Wina Fidelia</a></h2>
                                    <h3><a href="https://instagram.com/kou25_">Koordinator Divisi 水</a></h3>
                                </div>
                                <div class="content">
                                    <p class="description">Berhentilah mengejar sesuatu yang akhirnya sudah jelas.</p>
                                    <ul class="social-icons">
                                        <li><a target="_blank" href="https://instagram.com/kou25_"><i
                                                    class="lni lni-instagram-filled" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end divisi --}}

    <!-- Call To Action Section Start -->
    <section style="background-color: #272727" id="cta" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">
                    <div class="cta-text">
                        <h4 style="color: white">Masih Ragu Untuk Gabung?</h4>
                        <p>Lihat Semua Sosial Media Smunel Japanese Community</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12 text-right wow fadeInRight" data-wow-delay="0.3s">
                    </br><a href="https://www.instagram.com/smuneljc/" class="btn btn-common">Lihat Instagram</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section Start -->

    <!-- Footer Section Start -->
    <footer id="footer" class="footer-area section-padding">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                        <div class="widget">
                            <h3 class="footer-logo"><img style="width:100px; height:auto"
                                    src="{{asset('home/assets/img/logo.png')}}" alt=""></h3>
                            <div class="textwidget">
                                <p>Komunitas Budaya Jepang Kreatif
                                    SMA Negeri 5 Makassar</p>
                            </div>
                            <div class="social-icon">
                                <a class="facebook" href="https://facebook.com/smuneljc" target="_blank"><i
                                        class="lni-facebook-filled"></i></a>
                                <a class="instagram" href="https://instagram.com/smuneljc" target="_blank"><i
                                        class="lni-instagram-filled"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <h3 class="footer-titel">Sosial Media</h3>
                        <ul class="footer-link">
                            <li><a href="https://instagram.com/smuneljc" target="_blank">Instagram</a></li>
                            <li><a href="https://facebook.com/smuneljc" target="_blank">Facebook</a></li>
                            <li><a href="#">TikTok</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <h3 class="footer-titel">Website Map</h3>
                        <ul class="footer-link">
                            <li><a href="#">Pendaftaran</a></li>
                            <li><a href="login">Portal Pengurus</a></li>
                            <li><a href="#">Sistem Informasi</a></li>
                            <li><a href="#">About</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <h3 class="footer-titel">Kontak</h3>
                        <ul class="address">
                            <li>
                                <a href="#"><i class="lni-map-marker"></i> Jl. Taman Makam Pahlawan No.4, Kota
                                    Makassar</a>
                            </li>
                            <li>
                                <a href="http://wa.me/62895338033117"><i class="lni-phone-handset"></i> P: +62 8953 3803 3117</a>
                            </li>
                            <li>
                                <a href="mailto:"><i class="lni-envelope"></i> E: nihon05sjc@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright-content">
                            <p>Copyright © 2021 <a rel="nofollow" href="https://instagram.com/smuneljc">Smunel
                                    Japanese Community</a> All Right
                                Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
        <i class="lni-arrow-up"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader">
        <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('home/assets/js/jquery-min.js')}}"></script>
    <script src="{{asset('home/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('home/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('home/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('home/assets/js/wow.js')}}"></script>
    <script src="{{asset('home/assets/js/jquery.nav.js')}}"></script>
    <script src="{{asset('home/assets/js/scrolling-nav.js')}}"></script>
    <script src="{{asset('home/assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('home/assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('home/assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('home/assets/js/main.js')}}"></script>

</body>

</html>
