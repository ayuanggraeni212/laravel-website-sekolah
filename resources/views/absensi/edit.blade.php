@extends('layout')

@section('title', 'Edit-Page-Admin | Website SMKN 1 GunungPutri')
@section('content')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
<div class="container">
<br><br><br><br>
    <div class="row">
    
        <div class="col-md-12">
        <h3>Form Edit Data</h3>
        <form method="POST" action="/absensi/{{ $absensi->id }}">
        @method('patch')
        @csrf
  <div class="form-group">
    <label for="nama">Nama Siswa</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" name="nama" value="{{ $absensi->nama }}">
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
    <label for="kelas">Kelas</label>
    <input type="text" class="form-control @error('kelas') is-invalid @enderror" id="kelas" placeholder="Masukan Kelas" name="kelas" value="{{ $absensi->kelas }}">
    @error('kelas')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
    <label for="komentar">Komentar Siswa</label>
    <input type="text" class="form-control @error('komentar') is-invalid @enderror" id="komentar" placeholder="Masukan komentar" name="komentar" value="{{ $absensi->komentar }}">
    @error('komentar')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
    <label for="tanggal">Hari/Tanggal</label>
    <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" placeholder="Masukan Tanggal" name="tanggal" value="{{ $absensi->tanggal }}">
    @error('tanggal')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

    <br>
  <button type="submit" class="btn btn-primary">Update</button>
  <a href="/absensi" class="btn btn-primary">Kembali</a>
</form>
        </div>
    </div>
</div>

</section><!-- End Contact Section -->
@endSection