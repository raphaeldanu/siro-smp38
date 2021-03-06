@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Siswa</h1>
    <div class="d-flex justify-content-end">
      <a href="/dashboard/reports/create/{{ $student->id }}" class="btn btn-primary me-1">Tambah Raport</a>
      @isset($un)
        <a href="/dashboard/un/{{ $un->id }}/edit" class="btn btn-primary me-1">Edit Nilai UN</a>
      @else
        <a href="/dashboard/un/create/{{ $student->id }}" class="btn btn-primary me-1">Input Nilai UN</a>
      @endisset
      <a href="/dashboard/students/" class="btn btn-danger">Kembali</a>
    </div>
  </div>
  <div class="px-0 col">
    <div class="card border-0">
      <div class="card-body px-0 pt-0">
        <div class="row">
          <div class="col-7">
            <h4 class="card-title">{{ $student->nama }}</h4>
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
  <div class="col-lg-8">
    <h5>Nilai Raport</h5>
  </div>
  <div class="table-responsive col-lg-8">
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
            <a href="/dashboard/reports/{{ $report->id }}" class="badge bg-info"><span data-feather="eye"></span> </a>
            <a href="/dashboard/reports/{{ $report->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
            <form action="/dashboard/reports/{{ $report->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" type="submit" onclick="return confirm('Yakin mau hapus raport?')"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  @isset($un)   
  <div class="col-lg-8 d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
        <h5>Nilai UN</h5>
        <form action="/dashboard/un/{{ $un->id }}" method="post" class="d-inline">
          @method('delete')
          @csrf
          <button class="btn btn-danger border-0" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
  </div>
  <div class="table-responsive col-lg-8">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col" class="col-3">Bahasa Indonesia</th>
          <th scope="col" class="col-3">Matematika</th>
          <th scope="col" class="col-3">IPA</th>
          <th scope="col" class="col-3">Bahasa Inggris</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{ $un->n_bindo }}</td>
          <td>{{ $un->n_mat }}</td>
          <td>{{ $un->n_ipa }}</td>
          <td>{{ $un->n_bing }}</td>
        </tr>
      </tbody>
    </table>
  </div>
  @endisset
@endsection
