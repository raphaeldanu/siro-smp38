@extends('layouts.main')
@section('container')
<div class="container-fluid col-lg-8 my-3">
    <h2 class="text-center mb-3">Detail Siswa</h2>
    <div class="card border-0">
      <div class="card-body px-0 pt-0">
        <div class="row">
          <div class="col-10">
            <h4 class="card-title">{{ $student->nama }}</h4>
          </div>
          <div class="col-2">
            <a href="/dashboard/students/" class="btn btn-danger">Kembali</a>
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
  <div class="table-responsive col-lg-8 m-auto">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Kelas</th>
          <th scope="col">Semester</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($reports as $report)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $report->kelas }}</td>
          <td>{{ $report->semester }}</td>
          <td>
            <a href="/reports/{{ $report->id }}" class="badge bg-info"><span data-feather="eye"></span> </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endsection