@extends('layout.dash')
@section('content')
<h1> Edit Data</h1>

<form action="/admin/user/{{$user->id}}/update" method="post">
	@csrf
  <div class="form-group">
    <label>Name</label>
    <input type="text" placeholder="Masukkan Nama" class="form-control" name="name" value="{{$user->name}}"><br>
    <input type="text" placeholder="Masukkan email..." class="form-control" name="email" value="{{$user->email}}"><br>
    <input type="text" placeholder="Masukkan password..." class="form-control" name="password" value="{{$user->password}}"><br>
  </div>
  <button class="btn btn-primary btn-sm">Submit</button>
</form>

@endsection





