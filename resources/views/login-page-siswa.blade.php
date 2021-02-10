@extends('layout')

@section('title', 'Login-Page=Siswa | Website SMKN 1 GunungPutri')
@section('content')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
    <br><br><br><br>
        <div class="section-title">
          <h4>HALAMAN ABSEN SISWA</h4>
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
    <label for="nama">Nama Siswa</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" name="nama" value="{{ old('nama') }}">
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
    <label for="kelas">Kelas</label>
    <input type="text" class="form-control @error('kelas') is-invalid @enderror" id="kelas" placeholder="Masukan Kelas" name="kelas" value="{{ old('kelas') }}">
    @error('kelas')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
    <label for="komentar">Komentar</label>
    <input type="text" class="form-control @error('komentar') is-invalid @enderror" id="komentar" placeholder="Masukan Komentar (Hadir)" name="komentar" value="{{ old('komentar') }}">
    @error('komentar')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
    <label for="tanggal">Hari/Tanggal</label>
    <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" placeholder="Masukan Tanggal" name="tanggal" value="{{ old('tanggal') }}">
    @error('tanggal')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
    <br>
  <button type="submit" class="btn btn-primary">Send</button>

</form>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
@endSection


