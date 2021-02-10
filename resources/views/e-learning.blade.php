@extends('layout')

@section('title', 'E-Learning | Website SMKN 1 GunungPutri')
@section('content')
<section id="services" class="services">
      <div class="container" data-aos="fade-up">
    <br><br><br>
        <div class="section-title">
          <h3>E-Learning</h3>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-user"></i></div>
              <h4><a href="/login-page">ABSENSI</a></h4>
              <p>Silahkan Absen bagi Siswa/Siswi maupun Ibu/Bapak Guru.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="/jadwal">JADWAL PELAJARAN</a></h4>
              <p>Berikut adalah jadwal pelajaran terupdate tahun pelajaran 2020/2021.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="/informasi">INFORMASI</a></h4>
              <p>Silahkan klik halaman ini untuk mendapatkan informasi terbaru dari pihak sekolah.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section --> 

@endSection