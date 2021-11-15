@extends('layouts.main')
@section('container')
<div class="container-fluid col-lg-8 my-3">
    <h2 class="text-center mb-3">Cari Siswa</h2>
    <form action="/search" method="get">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="NISN atau Nama" name="search" id="search" value="{{ request('search') }}" required>
            <button class="btn btn-outline-dark" type="submit">Search</button>
        </div>
    </form>
</div>
<div class="container-fluid col-lg-8">
  <table class="table table-hover">
      <thead>
        <tr class="table-dark">
          <th scope="col">#</th>
          <th scope="col">NISN</th>
          <th scope="col">Nama</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        
          @foreach ($students as $student)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $student->nisn }}</td>
            <td>{{ $student->nama }}</td>
            <td>
              <a href="/students/{{ $student->id }}" class="badge bg-info text-light"><span data-feather="eye"></span> </a>
            </td>
          </tr>
          @endforeach
      </tbody>
    </table>
    <div class="d-flex justify-content-end">
      {{ $students->links() }}
    </div>
</div>

@endsection