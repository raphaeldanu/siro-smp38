@extends('layouts.main')
@section('container')
<div class="container-fluid col-lg-8 my-3">
    <h2 class="text-center mb-3">Cari Siswa</h2>
    <form action="/search" method="get">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="NISN atau Nama" name="search" id="search" value="{{ request('search') }}">
            <button class="btn btn-outline-dark" type="submit">Search</button>
        </div>
    </form>
</div>
@endsection