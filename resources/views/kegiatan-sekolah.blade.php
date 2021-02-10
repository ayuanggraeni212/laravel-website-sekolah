@extends('layout')

@section('title', 'Kegiatan-Sekolah | Website SMKN 1 GunungPutri')
@section('content')
<section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <br><br><br>
        <div class="section-title">
          <h3>KEGIATAN SEKOLAH </h3>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">ALL</li>
              <li data-filter=".filter-app">KBM</li>
              <li data-filter=".filter-card">RELIGI</li>
              <li data-filter=".filter-web">CLASS MEETING</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="/img/PK4.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="/img/PK5.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="/img/PK6.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="/img/PK7.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="/img/PK8.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="/img/PK9.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="/img/PK1.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="/img/PK2.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="/img/PK3.jpg" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->



    <div class="section-title">
          <h3>EKSTRAKURIKULER </h3>
        </div>

    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">PRAMUKA <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">SENI MUSIK <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">PASKIBRA <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">PMR <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">OLAHRAGA <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">IT <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->



@endSection