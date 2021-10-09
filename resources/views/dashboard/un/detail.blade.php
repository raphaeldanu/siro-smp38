@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">UN Siswa</h1>
</div>
<div class="px-0 col-lg-8">
  <div class="card border-0">
    <div class="card-body px-0 pt-0">
      <div class="row">
        <div class="col-10">
          <h4 class="card-title">{{ $student->nama }}</h4>
        </div>
        <div class="col-2">
          <a href="/dashboard/students/{{ $student->id }}" class="btn btn-danger">Kembali</a>
        </div>
      </div>
      <p class="card-text">
        <div class="row">
          <div class="col-3">NISN</div>
          <div class="col-9">: {{ $student->nisn }}</div>
        </div>
        <div class="row">
          <div class="col-3">NIS</div>
          <div class="col-9">: {{ $student->nis }}</div>
        </div>
      </p>
    </div> 
  </div>
</div>
<div class="table-responsive col-lg-8">
  @if (session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  <h4>Nilai Mata Pelajaran</h4>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Mata Pelajaran</th>
        <th scope="col">Nilai</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Bahasa Indonesia</td>
        <td>{{ $un->n_bindo }}</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Matematika</td>
        <td>{{ $un->n_mat }}</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Ilmu Pengetahuan Alam</td>
        <td>{{ $un->n_ipa }}</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Bahasa Inggris</td>
        <td>{{ $un->n_bing }}</td>
      </tr>
    </tbody>
  </table>
</div>
<div class="container-fluid px-0">
  <div class="card border-0">
    <div class="card-body px-0 pt-0">
      <h4 class="card-title">Keputusan</h4> 
      <p class="card-text">
        Berdasarkan hasil yang diraih, peserta didik ditetapkan: <br>
        <strong class="text-uppercase">{{ $un->getKeputusan() }}</strong>
      </p>
    </div> 
  </div>
</div>
@endsection