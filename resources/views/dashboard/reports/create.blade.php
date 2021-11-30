@extends('dashboard.layouts.main')
@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{ $judul }}</h1>
  </div>
  <div class="px-0 col-lg-8">
    <p>Tambah Raport Baru untuk {{ $student->nama }}</p>
    <form action="/dashboard/reports" method="POST">
      @csrf
      <input type="hidden" name="student_id" id="student_id" value="{{ $student->id }}">
      <div class="mb-3 row">
        <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
        <div class="col-sm-10">
          <select class="form-select @error('kelas') is-invalid @enderror" aria-label="Pilih Kelas" name="kelas" id="kelas">
            <option value="{{ old('kelas') }}" selected>Pilih Kelas {{ '('.old('kelas').')' }} </option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
          </select>
          @error('kelas')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="rombel" class="col-sm-2 col-form-label">Rombel</label>
        <div class="col-sm-10">
          <select class="form-select @error('rombel') is-invalid @enderror" aria-label="Pilih Rombel" name="rombel" id="rombel">
            <option value="{{ old('rombel') }}" selected>Pilih Rombel {{ '('.old('rombel').')' }} </option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
            <option value="F">F</option>
          </select>
          @error('rombel')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="semester" class="col-sm-2 col-form-label">Semester</label>
        <div class="col-sm-10">
          <select class="form-select @error('semester') is-invalid @enderror" aria-label="Pilih Semester" name="semester" id="semester">
            <option value="{{ old('semester') }}" selected>Pilih Semester {{ '('.old('semester').')' }} </option>
            <option value="1">1</option>
            <option value="2">2</option>
          </select>
          @error('semester')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="tahun_pelajaran" class="col-sm-2 col-form-label">Tahun Pelajaran</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('tahun_pelajaran') is-invalid @enderror" id="tahun_pelajaran" name="tahun_pelajaran" placeholder="mis: 2020/2021" value="{{ old('tahun_pelajaran') }}">
          @error('tahun_pelajaran')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="sikap_spiritual" class="col-sm-3 col-form-label">Nilai Sikap Spiritual</label>
        <div class="col-sm-9">
          <select class="form-select @error('sikap_spiritual') is-invalid @enderror" aria-label="Pilih Sikap Spiritual" name="sikap_spiritual" id="sikap_spiritual">
            <option value="{{ old('sikap_spiritual') }}" selected>Pilih Salah Satu {{ '('.old('sikap_spiritual').')' }} </option>
            <option value="Baik">Baik</option>
            <option value="Cukup Baik">Cukup Baik</option>
            <option value="Kurang Baik">Kurang Baik</option>
          </select>
          @error('sikap_spiritual')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="sikap_sosial" class="col-sm-3 col-form-label">Nilai Sikap Sosial</label>
        <div class="col-sm-9">
          <select class="form-select @error('sikap_sosial') is-invalid @enderror" aria-label="Pilih Sikap Sosial" name="sikap_sosial" id="sikap_sosial">
            <option value="{{ old('sikap_sosial') }}" selected>Pilih Salah Satu {{ '('.old('sikap_sosial').')' }} </option>
            <option value="Baik">Baik</option>
            <option value="Cukup Baik">Cukup Baik</option>
            <option value="Kurang Baik">Kurang Baik</option>
          </select>
          @error('sikap_sosial')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="n_agama" class="col-sm-3 col-form-label">Nilai Agama</label>
        <div class="col-sm-9">
          <input type="number" class="form-control @error('n_agama') is-invalid @enderror" id="n_agama" name="n_agama" value="{{ old('n_agama') }}">
          @error('n_agama')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="n_ppkn" class="col-sm-3 col-form-label">Nilai PPKn</label>
        <div class="col-sm-9">
          <input type="number" class="form-control @error('n_ppkn') is-invalid @enderror" id="n_ppkn" name="n_ppkn" value="{{ old('n_ppkn') }}">
          @error('n_ppkn')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="n_bindo" class="col-sm-3 col-form-label">Nilai Bahasa Indonesia</label>
        <div class="col-sm-9">
          <input type="number" class="form-control @error('n_bindo') is-invalid @enderror" id="n_bindo" name="n_bindo" value="{{ old('n_bindo') }}">
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
          <input type="number" class="form-control @error('n_mat') is-invalid @enderror" id="n_mat" name="n_mat" value="{{ old('n_mat') }}">
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
          <input type="number" class="form-control @error('n_ipa') is-invalid @enderror" id="n_ipa" name="n_ipa" value="{{ old('n_ipa') }}">
          @error('n_ipa')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="n_ips" class="col-sm-3 col-form-label">Nilai IPS</label>
        <div class="col-sm-9">
          <input type="number" class="form-control @error('n_ips') is-invalid @enderror" id="n_ips" name="n_ips" value="{{ old('n_ips') }}">
          @error('n_ips')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="n_bing" class="col-sm-3 col-form-label">Nilai Bahasa Inggris</label>
        <div class="col-sm-9">
          <input type="number" class="form-control @error('n_bing') is-invalid @enderror" id="n_bing" name="n_bing" value="{{ old('n_bing') }}">
          @error('n_bing')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="n_seni" class="col-sm-3 col-form-label">Nilai Seni Budaya</label>
        <div class="col-sm-9">
          <input type="number" class="form-control @error('n_seni') is-invalid @enderror" id="n_seni" name="n_seni" value="{{ old('n_seni') }}">
          @error('n_seni')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="n_penjas" class="col-sm-3 col-form-label">Nilai Penjasorkes</label>
        <div class="col-sm-9">
          <input type="number" class="form-control @error('n_penjas') is-invalid @enderror" id="n_penjas" name="n_penjas" value="{{ old('n_penjas') }}">
          @error('n_penjas')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="n_prakarya" class="col-sm-3 col-form-label">Nilai Prakarya</label>
        <div class="col-sm-9">
          <input type="number" class="form-control @error('n_prakarya') is-invalid @enderror" id="n_prakarya" name="n_prakarya" value="{{ old('n_prakarya') }}">
          @error('n_prakarya')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="n_bjawa" class="col-sm-3 col-form-label">Nilai Bahasa Jawa</label>
        <div class="col-sm-9">
          <input type="number" class="form-control @error('n_bjawa') is-invalid @enderror" id="n_bjawa" name="n_bjawa" value="{{ old('n_bjawa') }}">
          @error('n_bjawa')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="sakit" class="col-sm-3 col-form-label">Sakit</label>
        <div class="col-sm-9">
          <input type="number" class="form-control @error('sakit') is-invalid @enderror" id="sakit" name="sakit" value="{{ old('sakit') }}">
          @error('sakit')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="izin" class="col-sm-3 col-form-label">Izin</label>
        <div class="col-sm-9">
          <input type="number" class="form-control @error('izin') is-invalid @enderror" id="izin" name="izin" value="{{ old('izin') }}">
          @error('izin')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="tanpa_ket" class="col-sm-3 col-form-label">Tanpa Keterangan</label>
        <div class="col-sm-9">
          <input type="number" class="form-control @error('tanpa_ket') is-invalid @enderror" id="tanpa_ket" name="tanpa_ket" value="{{ old('tanpa_ket') }}">
          @error('tanpa_ket')
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
            <option value="{{ old('keputusan') }}" selected>Pilih Salah Satu {{ '('.old('keputusan').')' }}</option>
            <option value="Lulus">Lulus</option>
            <option value="Tidak Lulus">Tidak Lulus</option>
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
            <option value="{{ old('status') }}" selected>Pilih Salah Satu {{ '('.old('status').')' }} </option>
            <option value="1">Tidak Bermasalah</option>
            <option value="0">Bermasalah</option>
          </select>
          @error('status')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
@endsection
