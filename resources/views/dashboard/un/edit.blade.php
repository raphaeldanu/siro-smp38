@extends('dashboard.layouts.main')
@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{ $judul }}</h1>
  </div>
  <div class="px-0 col-lg-8">
    <p>Tambah Nilai UN Baru untuk {{ $student->nama }}</p>
    <form action="/dashboard/un/{{ $un->id }}" method="POST">
      @csrf
      @method('put')
      <div class="mb-3 row">
        <label for="n_bindo" class="col-sm-3 col-form-label">Nilai Bahasa Indonesia</label>
        <div class="col-sm-9">
          <input type="number" class="form-control @error('n_bindo') is-invalid @enderror" id="n_bindo" name="n_bindo" value="{{ $un->n_bindo }}">
          @error('n_bindo')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="n_mat" class="col-sm-3 col-form-label">Nilai Matematika</label>
        <div class="col-sm-9">
          <input type="number" class="form-control @error('n_mat') is-invalid @enderror" id="n_mat" name="n_mat" value="{{ $un->n_mat }}">
          @error('n_mat')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="n_ipa" class="col-sm-3 col-form-label">Nilai IPA</label>
        <div class="col-sm-9">
          <input type="number" class="form-control @error('n_ipa') is-invalid @enderror" id="n_ipa" name="n_ipa" value="{{ $un->n_ipa }}">
          @error('n_ipa')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="n_bing" class="col-sm-3 col-form-label">Nilai Bahasa Inggris</label>
        <div class="col-sm-9">
          <input type="number" class="form-control @error('n_bing') is-invalid @enderror" id="n_bing" name="n_bing" value="{{ $un->n_bing }}">
          @error('n_bing')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="keputusan" class="col-sm-2 col-form-label">Keputusan</label>
        <div class="col-sm-10">
          <select class="form-select @error('keputusan') is-invalid @enderror" aria-label="Pilih Keputusan" name="keputusan" id="keputusan">
            <option value="">Pilih Salah Satu</option>
            <option value="1" @if ($un->keputusan == 1) selected @endif>Lulus</option>
            <option value="0" @if ($un->keputusan == 0) selected @endif>Tidak Lulus</option>
          </select>
          @error('keputusan')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="Status" class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-10">
          <select class="form-select @error('status') is-invalid @enderror" aria-label="Pilih Status" name="status" id="status">
            <option value="">Pilih Salah Satu </option>
            <option value="1" @if ($un->status == 1) selected @endif>Tidak Bermasalah</option>
            <option value="0" @if ($un->status == 0) selected @endif>Bermasalah</option>
          </select>
          @error('status')
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
