@extends('layout.dash')

@section('content')

<form method="post" action="/category/create">
	@csrf
  <div class="form-group">
    <label>Name</label>
    <input type="text" placeholder="Masukkan Nama" class="form-control" name="name">
  </div>
  <button class="btn btn-primary btn-sm">Tambah Data</button>
</form>


@endsection