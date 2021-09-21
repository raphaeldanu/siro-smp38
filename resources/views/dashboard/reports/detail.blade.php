@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Siswa</h1>
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
        <th scope="col">Nilai Huruf</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Agama dan Budi Pekerti</td>
        <td>{{ $report->n_agama }}</td>
      </tr>
    </tbody>
  </table>
</div>
@endsection