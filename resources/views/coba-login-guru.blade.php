@extends('layout')

@section('title', 'Login-Page-Admin | Website SMKN 1 GunungPutri')
@section('content')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
    <br><br><br><br>
        <div class="section-title">
          <h4>HALAMAN LOGIN GURU</h4>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="/img/tutwuri.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6">
          @if (session('status'))
        <div class="alert alert-success">
        {{ session('status') }}
        </div>
        @endif
          <form method="post" action="/absensi/index">
        @csrf
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Masukan username" name="username" value="{{ old('username') }}">
    @error('username')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Masukan password" name="password" value="{{ old('password') }}">
    @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

    <br>
  <button type="submit" class="btn btn-primary">Send</button>
  <a href="/login-page" class="btn btn-primary">Back</a>
</form>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
@endSection


