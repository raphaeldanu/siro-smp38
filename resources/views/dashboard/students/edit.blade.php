@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{ $judul }}</h1>
    <a href="/dashboard/students/" class="btn btn-danger">Kembali</a>
  </div>
  <div class="px-0 col-lg-8">
    <form action="/dashboard/students/{{ $student->id }}" method="POST">
      @method('put')
      @csrf
      <div class="mb-3 row">
        <label for="nisn " class="col-sm-2 col-form-label">NISN</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('nisn') is-invalid @enderror" id="nisn" name="nisn" value="{{ $student->nisn }}">
          @error('nisn')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="nis" class="col-sm-2 col-form-label">NIS</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis" name="nis" value="{{ $student->nis }}">
          @error('nis')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $student->nama }}">
          @error('nama')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Edit</button>
      </div>
    </form>
  </div>
@endsection
