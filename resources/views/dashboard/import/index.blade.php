@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Import Excel</h1>
</div>

<div class="col-lg-8">
  <form method="post" action="/dashboard/import" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="dataraport" class="form-label">Pilih File yang akan di import</label>
      <input class="form-control" type="file" id="dataraport" name="dataraport">
    </div>    
    <button type="submit" class="btn btn-primary mb-3">Import</button>
  </form>
</div>
@endsection

