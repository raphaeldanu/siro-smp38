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
    <a href="/dashboard/students/create" class="btn btn-primary mb-3">Tambah Siswa</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">NISN</th>
          <th scope="col">Nama</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($students as $student)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $student->nisn }}</td>
          <td>{{ $student->nama }}</td>
          <td>
            <a href="/dashboard/students/" class="badge bg-info"><span data-feather="eye"></span> </a>
            <a href="/dashboard/students/edit" class="badge bg-warning"><span data-feather="edit"></span> </a>
            <form action="/dashboard/students/" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" type="submit" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
