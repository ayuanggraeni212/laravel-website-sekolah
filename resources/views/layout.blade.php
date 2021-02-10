<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/tutwuri.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >




  <!-- =======================================================
  * Template Name: BizLand - v2.0.3
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info me-auto">
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">smkn1gnputri@gmail.com</a>
        <i class="icofont-phone"></i> +62 8577 8119 750
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/">SMKN 1 GUNUNGPUTRI</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li ><a href="/">Beranda</a></li>
          <li ><a href="/about">Profil</a></li>
          <li><a href="/program-keahlian">Program Keahlian</a></li>
          <li ><a href="/kegiatan-sekolah">Kegiatan Sekolah</a></li>
          <li class="drop-down"><a href="/e-learning">E-Learning</a>
            <ul>
              <li class="drop-down"><a href="/login-page">Absensi</a>
                <ul>
                  <li><a href="/absensi">Admin</a></li>
                  <li><a href="/login-page-guru">Guru</a></li>
                  <li><a href="/login-page-siswa">Siswa</a></li>
                </ul>
              </li>
              <li><a href="/jadwal">Jadwal</a></li>
              <li><a href="/informasi">Informasi</a></li>
            </ul>
          </li>
          <li><a href="/kontak">Kontak</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->



  @yield('content')
  <footer id="footer">
<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h4>Alamat</h4>
        <p>
          Jln. Raya Barokah No. 06 <br>
          Kecamatan GunungPutri<br>
          Kabupaten Bogor <br>
          Provinsi Jawa Barat<br><br>
          <strong>Phone:</strong> +62 8577 8119 750<br>
          <strong>Email:</strong> smkn1gnputri@gmail.com<br>
        </p>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Tentang Sekolah</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="/">Beranda</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="/about">Profil Sekolah</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="/program-keahlian">Program Keahlian</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="/kegiatan-sekolah">Kegiatan Sekolah</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="/kontak">Kontak Person</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Program Keahlian</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="/program-keahlian">Teknik Kimia Industri</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="/program-keahlian">Teknik Elektronika Industri</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="/program-keahlian">Teknik Instrumentasi Logam</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="/program-keahlian">Teknik Pengelasan</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="/program-keahlian">Rekayasa Perangkat Lunak</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Sosial Media</h4>
        <div class="social-links mt-3">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="container py-4">
  <div class="copyright">
    &copy; Copyright <strong><span>Ayu Anggraeni</span></strong>. All Rights Reserved
  </div>
</div>
</footer><!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script type="text/javascript" src="{{ asset('/js/main.js') }}"></script>



</body>

</html>

