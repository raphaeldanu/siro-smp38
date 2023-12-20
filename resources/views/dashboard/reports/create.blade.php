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
        <div class="col-sm-4">Nilai</div>
        <div class="col-sm-4">Pengetahuan</div>
        <div class="col-sm-4">Keterampilan</div>
      </div>
      <div class="mb-3 row">
        <label for="n_agama_p" class="col-sm-4 col-form-label">Nilai Agama</label>
        <div class="col-sm-4">
          <input type="number" class="form-control @error('n_agama_p') is-invalid @enderror" id="n_agama_p" name="n_agama_p" value="{{ old('n_agama_p') }}">
          @error('n_agama_p')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="col-sm-4">
          <input type="number" class="form-control @error('n_agama_k') is-invalid @enderror" id="n_agama_k" name="n_agama_k" value="{{ old('n_agama_k') }}">
          @error('n_agama_k')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="n_ppkn_p" class="col-sm-4 col-form-label">Nilai PPKn</label>
        <div class="col-sm-4">
          <input type="number" class="form-control @error('n_ppkn_p') is-invalid @enderror" id="n_ppkn_p" name="n_ppkn_p" value="{{ old('n_ppkn_p') }}">
          @error('n_ppkn_p')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="col-sm-4">
          <input type="number" class="form-control @error('n_ppkn_k') is-invalid @enderror" id="n_ppkn_k" name="n_ppkn_k" value="{{ old('n_ppkn_k') }}">
          @error('n_ppkn_k')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="n_bindo_p" class="col-sm-4 col-form-label">Nilai Bahasa Indonesia</label>
        <div class="col-sm-4">
          <input type="number" class="form-control @error('n_bindo_p') is-invalid @enderror" id="n_bindo_p" name="n_bindo_p" value="{{ old('n_bindo_p') }}">
          @error('n_bindo_p')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="col-sm-4">
          <input type="number" class="form-control @error('n_bindo_k') is-invalid @enderror" id="n_bindo_k" name="n_bindo_k" value="{{ old('n_bindo_k') }}">
          @error('n_bindo_k')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="n_mat_p" class="col-sm-4 col-form-label">Nilai Matematika</label>
        <div class="col-sm-4">
          <input type="number" class="form-control @error('n_mat_p') is-invalid @enderror" id="n_mat_p" name="n_mat_p" value="{{ old('n_mat_p') }}">
          @error('n_mat_p')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="col-sm-4">
          <input type="number" class="form-control @error('n_mat_k') is-invalid @enderror" id="n_mat_k" name="n_mat_k" value="{{ old('n_mat_k') }}">
          @error('n_mat_k')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="n_ipa_p" class="col-sm-4 col-form-label">Nilai IPA</label>
        <div class="col-sm-4">
          <input type="number" class="form-control @error('n_ipa_p') is-invalid @enderror" id="n_ipa_p" name="n_ipa_p" value="{{ old('n_ipa_p') }}">
          @error('n_ipa_p')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="col-sm-4">
          <input type="number" class="form-control @error('n_ipa_k') is-invalid @enderror" id="n_ipa_k" name="n_ipa_k" value="{{ old('n_ipa_k') }}">
          @error('n_ipa_k')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="n_ips_p" class="col-sm-4 col-form-label">Nilai IPS</label>
        <div class="col-sm-4">
          <input type="number" class="form-control @error('n_ips_p') is-invalid @enderror" id="n_ips_p" name="n_ips_p" value="{{ old('n_ips_p') }}">
          @error('n_ips_p')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="col-sm-4">
          <input type="number" class="form-control @error('n_ips_k') is-invalid @enderror" id="n_ips_k" name="n_ips_k" value="{{ old('n_ips_k') }}">
          @error('n_ips_k')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="n_bing_p" class="col-sm-4 col-form-label">Nilai Bahasa Inggris</label>
        <div class="col-sm-4">
          <input type="number" class="form-control @error('n_bing_p') is-invalid @enderror" id="n_bing_p" name="n_bing_p" value="{{ old('n_bing_p') }}">
          @error('n_bing_p')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="col-sm-4">
          <input type="number" class="form-control @error('n_bing_k') is-invalid @enderror" id="n_bing_k" name="n_bing_k" value="{{ old('n_bing_k') }}">
          @error('n_bing_k')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="n_seni_p" class="col-sm-4 col-form-label">Nilai Seni Budaya</label>
        <div class="col-sm-4">
          <input type="number" class="form-control @error('n_seni_p') is-invalid @enderror" id="n_seni_p" name="n_seni_p" value="{{ old('n_seni_p') }}">
          @error('n_seni_p')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="col-sm-4">
          <input type="number" class="form-control @error('n_seni_k') is-invalid @enderror" id="n_seni_k" name="n_seni_k" value="{{ old('n_seni_k') }}">
          @error('n_seni_k')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="n_penjas_p" class="col-sm-4 col-form-label">Nilai Penjasorkes</label>
        <div class="col-sm-4">
          <input type="number" class="form-control @error('n_penjas_p') is-invalid @enderror" id="n_penjas_p" name="n_penjas_p" value="{{ old('n_penjas_p') }}">
          @error('n_penjas_p')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="col-sm-4">
          <input type="number" class="form-control @error('n_penjas_k') is-invalid @enderror" id="n_penjas_k" name="n_penjas_k" value="{{ old('n_penjas_k') }}">
          @error('n_penjas_k')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="n_prakarya_p" class="col-sm-4 col-form-label">Nilai Prakarya</label>
        <div class="col-sm-4">
          <input type="number" class="form-control @error('n_prakarya_p') is-invalid @enderror" id="n_prakarya_p" name="n_prakarya_p" value="{{ old('n_prakarya_p') }}">
          @error('n_prakarya_p')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="col-sm-4">
          <input type="number" class="form-control @error('n_prakarya_k') is-invalid @enderror" id="n_prakarya_k" name="n_prakarya_k" value="{{ old('n_prakarya_k') }}">
          @error('n_prakarya_k')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="mb-3 row">
        <label for="n_bjawa_p" class="col-sm-4 col-form-label">Nilai Bahasa Jawa</label>
        <div class="col-sm-4">
          <input type="number" class="form-control @error('n_bjawa_p') is-invalid @enderror" id="n_bjawa_p" name="n_bjawa_p" value="{{ old('n_bjawa_p') }}">
          @error('n_bjawa_p')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="col-sm-4">
          <input type="number" class="form-control @error('n_bjawa_k') is-invalid @enderror" id="n_bjawa_k" name="n_bjawa_k" value="{{ old('n_bjawa_k') }}">
          @error('n_bjawa_k')
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
