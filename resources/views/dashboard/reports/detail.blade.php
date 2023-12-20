@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Raport Siswa</h1>
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
        <div class="row">
          <div class="col-3">Tahun Pelajaran</div>
          <div class="col-9">: {{ $report->tahun_pelajaran }}</div>
        </div>
        <div class="row">
          <div class="col-3">Kelas</div>
          <div class="col-9">: {{ $report->kelas . $report->rombel }}</div>
        </div>
        <div class="row">
          <div class="col-3">Semester</div>
          <div class="col-9">: {{ $report->semester }}</div>
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
        <th scope="col" rowspan="2" class="border-bottom border-dark">#</th>
        <th scope="col" rowspan="2" class="border-bottom border-dark">Mata Pelajaran</th>
        <th scope="col" colspan="2" class="text-center">Nilai Pengetahuan</th>
        <th scope="col" colspan="2" class="text-center">Nilai Keterampilan</th>
      </tr>
      <tr>
        <th scope="col" class="text-center">Nilai</th>
        <th scope="col" class="text-center">Nilai Huruf</th>
        <th scope="col" class="text-center">Nilai</th>
        <th scope="col" class="text-center">Nilai Huruf</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Agama dan Budi Pekerti</td>
        <td>{{ $report->n_agama_p }}</td>
        <td>{{ nilaiHuruf($report->n_agama_p) }}</td>
        <td>{{ $report->n_agama_k }}</td>
        <td>{{ nilaiHuruf($report->n_agama_k) }}</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Pendidikan Pancasila dan Kewarganegaraan</td>
        <td>{{ $report->n_ppkn_p }}</td>
        <td>{{ nilaiHuruf($report->n_ppkn_p) }}</td>
        <td>{{ $report->n_ppkn_k }}</td>
        <td>{{ nilaiHuruf($report->n_ppkn_k) }}</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Bahasa Indonesia</td>
        <td>{{ $report->n_bindo_p }}</td>
        <td>{{ nilaiHuruf($report->n_bindo_p) }}</td>
        <td>{{ $report->n_bindo_k }}</td>
        <td>{{ nilaiHuruf($report->n_bindo_k) }}</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Matematika</td>
        <td>{{ $report->n_mat_p }}</td>
        <td>{{ nilaiHuruf($report->n_mat_p) }}</td>
        <td>{{ $report->n_mat_k }}</td>
        <td>{{ nilaiHuruf($report->n_mat_k) }}</td>
      </tr>
      <tr>
        <td>5</td>
        <td>Ilmu Pengetahuan Alam</td>
        <td>{{ $report->n_ipa_p }}</td>
        <td>{{ nilaiHuruf($report->n_ipa_p) }}</td>
        <td>{{ $report->n_ipa_k }}</td>
        <td>{{ nilaiHuruf($report->n_ipa_k) }}</td>
      </tr>
      <tr>
        <td>6</td>
        <td>Ilmu Pengetahuan Sosial</td>
        <td>{{ $report->n_ips_p }}</td>
        <td>{{ nilaiHuruf($report->n_ips_p) }}</td>
        <td>{{ $report->n_ips_k }}</td>
        <td>{{ nilaiHuruf($report->n_ips_k) }}</td>
      </tr>
      <tr>
        <td>7</td>
        <td>Bahasa Inggris</td>
        <td>{{ $report->n_bing_p }}</td>
        <td>{{ nilaiHuruf($report->n_bing_p) }}</td>
        <td>{{ $report->n_bing_k }}</td>
        <td>{{ nilaiHuruf($report->n_bing_k) }}</td>
      </tr>
      <tr>
        <td>8</td>
        <td>Seni Budaya</td>
        <td>{{ $report->n_seni_p }}</td>
        <td>{{ nilaiHuruf($report->n_seni_p) }}</td>
        <td>{{ $report->n_seni_k }}</td>
        <td>{{ nilaiHuruf($report->n_seni_k) }}</td>
      </tr>
      <tr>
        <td>9</td>
        <td>Penjasorkes</td>
        <td>{{ $report->n_penjas_p }}</td>
        <td>{{ nilaiHuruf($report->n_penjas_p) }}</td>
        <td>{{ $report->n_penjas_k }}</td>
        <td>{{ nilaiHuruf($report->n_penjas_k) }}</td>
      </tr>
      <tr>
        <td>10</td>
        <td>Prakarya</td>
        <td>{{ $report->n_prakarya_p }}</td>
        <td>{{ nilaiHuruf($report->n_prakarya_p) }}</td>
        <td>{{ $report->n_prakarya_k }}</td>
        <td>{{ nilaiHuruf($report->n_prakarya_k) }}</td>
      </tr>
      <tr>
        <td>11</td>
        <td>Bahasa Jawa</td>
        <td>{{ $report->n_bjawa_p }}</td>
        <td>{{ nilaiHuruf($report->n_bjawa_p) }}</td>
        <td>{{ $report->n_bjawa_k }}</td>
        <td>{{ nilaiHuruf($report->n_bjawa_k) }}</td>
      </tr>
    </tbody>
  </table>
</div>
<div class="table-responsive col-md-3">
  <h4>Ketidakhadiran</h4>
  <table class="table table-striped table-sm">
    <tbody>
      <tr>
        <td>Sakit</td>
        <td>{{ $report->sakit }}</td>
      </tr>
      <tr>
        <td>Izin</td>
        <td>{{ $report->izin }}</td>
      </tr>
      <tr>
        <td>Tanpa Keterangan</td>
        <td>{{ $report->tanpa_ket }}</td>
      </tr>
    </tbody>
  </table>
</div>
@if ($report->semester == 2)
<div class="container-fluid px-0">
  <div class="card border-0">
    <div class="card-body px-0 pt-0">
      <h4 class="card-title">Keputusan</h4> 
      <p class="card-text">
        Berdasarkan hasil yang diraih pada semester 1 dan 2, peserta didik ditetapkan: <br>
        <strong class="text-uppercase">{{ $report->keputusan }}</strong>
      </p>
    </div> 
  </div>
</div>
@endif
@endsection