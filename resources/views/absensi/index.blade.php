@extends('layout')

@section('title', 'Login-Page-Admin | Website SMKN 1 GunungPutri')
@section('content')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">
    <br><br><br>
    <div class="section-title">
      <h3>HALAMAN ADMIN</h3>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">

      <h5>Data Absensi Siswa Yang Masuk</h5>
      <div class="col-lg-6">


        <div class="row">

          <div class="col-md-12">
            @if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
            @endif
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Kelas</th>
                  <th scope="col">Komentar</th>
                  <th scope="col">Tanggal</th>
                  <th scope="col">Action</th>
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
                  <td><a href="{{ $a->id }}/edit" class="btn btn-success">Edit</a>
                    <form action="{{ $a->id }}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button type="submit" class="btn btn-danger">Delete</button>
                  </td>
                  </form>
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