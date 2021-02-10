@extends('layout')

@section('title', 'Profil | Website SMKN 1 GunungPutri')
@section('content')

<section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">
        <br> <br> <br> <br>
        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="/img/depan-sekolah.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>PROFIL SEKOLAH</h3>
            <p class="font-italic">
              SMKN 1 Gunungputri adalah salah satu Sekolah Menengah Kejuruan yang ada di Kabupaten Bogor.
            </p>
            <ul>
              <li>
                <i class="bx bx-user"></i>
                <div>
                  <h5>NPSN</h5>
                  <p>20231421</p>
                </div>
              </li>
              <li>
                <i class="bx bx-user"></i>
                <div>
                  <h5>Status Sekolah</h5>
                  <p>Negeri</p>
                </div>
              </li>
              <li>
                <i class="bx bx-user"></i>
                <div>
                  <h5>Kepala Sekolah Saat Ini</h5>
                  <p>Juniarti S.Pd</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->
@endSection