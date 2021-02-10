@extends('layout')

@section('title', 'Login-Page-Guru | Website SMKN 1 GunungPutri')
@section('content')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
    <br><br><br>
        <div class="section-title">
          <h3>HALAMAN GURU</h3>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
     
        
          <div class="col-lg-6">
            
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h5>Data Absensi Siswa Yang Masuk</h5>
        <table class="table table-striped" width>
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Komentar</th>
      <th scope="col">Tanggal</th>
    </tr>
  </thead>
  <tbody>
  @foreach( $absensi as $a )
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $a->nama}}</td>
      <td>{{ $a->kelas}}</td>
      <td>{{ $a->komentar}}</td>
      <td>{{ $a->tanggal}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
        </div>
    </div>
</div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
@endSection


