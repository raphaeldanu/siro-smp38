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
            <a href="/siswa/" class="btn btn-danger">Kembali</a>
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
  <div class="col-lg-8 m-auto">
    <h5>Raport</h5>
    @if ($reports->isEmpty())
      <h6>Nilai Belum Di Input</h5>
    @endif 
  </div>
  @if ($reports->isNotEmpty())
  <div class="table-responsive col-lg-8 m-auto">
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
  @endif
  @isset($un)   
  <div class="col-lg-8 m-auto">
    <h5>Nilai UN</h5>
  </div>
  <div class="table-responsive col-lg-8 m-auto">
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
</div>
@endsection