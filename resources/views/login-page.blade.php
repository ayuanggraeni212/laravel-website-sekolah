@extends('layout')

@section('title', 'Login-Page | Website SMKN 1 GunungPutri')
@section('content')
<section id="services" class="services">
  <div class="container" data-aos="fade-up">
    <br><br><br>
    <div class="section-title">
      <h3>HALAMAN LOGIN</h3>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-user"></i></div>
          <h4><a href="/absensi">ADMIN</a></h4>
          <p>Halaman khusus untuk Admin pengelola.</p>
          <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
              @auth
              <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Login</a>
              @else
              <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

              @if (Route::has('register'))
              <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
              @endif
              @endauth
            </div>
            @endif
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-user"></i></div>
          <h4><a href="/login-page-guru">GURU</a></h4>
          <p>Halaman khusus untuk Ibu/Bapak Guru.</p>
          <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
              @auth
              <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Login</a>
              @else
              <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

              @if (Route::has('register'))
              <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
              @endif
              @endauth
            </div>
            @endif
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-user"></i></div>
          <h4><a href="/login-page-siswa">SISWA</a></h4>
          <p>Halaman khusus untuk Siswa/Siswi.</p>
        </div>
      </div>

      <br>


    </div>
</section><!-- End Services Section -->

@endSection