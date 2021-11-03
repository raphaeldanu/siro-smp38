@extends('dashboard.layouts.main')
@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{ $judul }}</h1>
  </div>
  <div class="px-0 col-lg-8">
    <p>Tambah Raport Baru untuk {{ $student->nama }}</p>
    <form action="/dashboard/reports" method="POST">
      <input type="hidden" name="student_id" id="student_id" value="{{ $student->id }}">
      <div class="mb-3 row">
        <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
        <div class="col-sm-10">
          <select class="form-select" aria-label="Pilih Kelas" name="kelas" id="kelas">
            <option selected>Pilih Kelas</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
          </select>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="rombel" class="col-sm-2 col-form-label">Rombel</label>
        <div class="col-sm-10">
          <select class="form-select" aria-label="Pilih Rombel" name="rombel" id="rombel">
            <option selected>Pilih Rombel</option>
            <option value="a">A</option>
            <option value="b">B</option>
            <option value="c">C</option>
            <option value="d">D</option>
            <option value="e">E</option>
            <option value="f">F</option>
          </select>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="semester" class="col-sm-2 col-form-label">Semester</label>
        <div class="col-sm-10">
          <select class="form-select" aria-label="Pilih Semester" name="semester" id="semester">
            <option selected>Pilih Semester</option>
            <option value="1">1</option>
            <option value="2">2</option>
          </select>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="tahun_pelajaran" class="col-sm-2 col-form-label">Tahun Pelajaran</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="tahun_pelajaran" name="tahun_pelajaran" placeholder="mis: 2020/2021">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="sikap_spiritual" class="col-sm-3 col-form-label">Nilai Sikap Spiritual</label>
        <div class="col-sm-9">
          <input type="number" class="form-control" id="sikap_spiritual" name="sikap_spiritual">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="sikap_sosial" class="col-sm-3 col-form-label">Nilai Sikap Sosial</label>
        <div class="col-sm-9">
          <input type="number" class="form-control" id="sikap_sosial" name="sikap_sosial">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="n_agama" class="col-sm-3 col-form-label">Nilai Agama</label>
        <div class="col-sm-9">
          <input type="number" class="form-control" id="n_agama" name="n_agama">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="n_ppkn" class="col-sm-3 col-form-label">Nilai PPKn</label>
        <div class="col-sm-9">
          <input type="number" class="form-control" id="n_ppkn" name="n_ppkn">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="n_bindo" class="col-sm-3 col-form-label">Nilai Bahasa Indonesia</label>
        <div class="col-sm-9">
          <input type="number" class="form-control" id="n_bindo" name="n_bindo">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="n_mat" class="col-sm-3 col-form-label">Nilai Matematika</label>
        <div class="col-sm-9">
          <input type="number" class="form-control" id="n_mat" name="n_mat">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="n_ipa" class="col-sm-3 col-form-label">Nilai IPA</label>
        <div class="col-sm-9">
          <input type="number" class="form-control" id="n_ipa" name="n_ipa">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="n_ips" class="col-sm-3 col-form-label">Nilai IPS</label>
        <div class="col-sm-9">
          <input type="number" class="form-control" id="n_ips" name="n_ips">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="n_bing" class="col-sm-3 col-form-label">Nilai Bahasa Inggris</label>
        <div class="col-sm-9">
          <input type="number" class="form-control" id="n_bing" name="n_bing">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="n_seni" class="col-sm-3 col-form-label">Nilai Seni Budaya</label>
        <div class="col-sm-9">
          <input type="number" class="form-control" id="n_seni" name="n_seni">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="n_penjas" class="col-sm-3 col-form-label">Nilai Penjasorkes</label>
        <div class="col-sm-9">
          <input type="number" class="form-control" id="n_penjas" name="n_penjas">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="n_prakarya" class="col-sm-3 col-form-label">Nilai Prakarya</label>
        <div class="col-sm-9">
          <input type="number" class="form-control" id="n_prakarya" name="n_prakarya">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="n_bjawa" class="col-sm-3 col-form-label">Nilai Bahasa Jawa</label>
        <div class="col-sm-9">
          <input type="number" class="form-control" id="n_bjawa" name="n_bjawa">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="sakit" class="col-sm-3 col-form-label">Sakit</label>
        <div class="col-sm-9">
          <input type="number" class="form-control" id="sakit" name="sakit">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="izin" class="col-sm-3 col-form-label">Izin</label>
        <div class="col-sm-9">
          <input type="number" class="form-control" id="izin" name="izin">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="tanpa_ket" class="col-sm-3 col-form-label">Tanpa Keterangan</label>
        <div class="col-sm-9">
          <input type="number" class="form-control" id="tanpa_ket" name="tanpa_ket">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="keputusan" class="col-sm-2 col-form-label">Keputusan</label>
        <div class="col-sm-10">
          <select class="form-select" aria-label="Pilih Keputusan" name="keputusan" id="keputusan">
            <option selected>Pilih Keputusan</option>
            <option value="Lulus">Lulus</option>
            <option value="Tidak Lulus">Tidak Lulus</option>
          </select>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="Status" class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-10">
          <select class="form-select" aria-label="Pilih Status" name="Status" id="Status">
            <option selected>Pilih Status</option>
            <option value="Tidak Bermasalah">Tidak Bermasalah</option>
            <option value="Bermasalah">Bermasalah</option>
          </select>
        </div>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
@endsection
