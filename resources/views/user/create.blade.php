@extends('layout.dash')

@section('content')

<form method="post" action="/admin/user/create">
	@csrf
  <div class="form-group">
    <label>Name</label>
    <input type="text" placeholder="Masukkan Nama" class="form-control" name="name"><br>
    <input type="text" placeholder="Masukkan email" class="form-control" name="email"><br>
    <input type="password" placeholder="Masukkan password" class="form-control" name="password"><br>
  </div>
  <button class="btn btn-primary btn-sm">Tambah Data</button>
</form>


@endsection