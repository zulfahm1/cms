@extends('layout.dash')
@section('content')
<h1> Edit Data</h1>

<form action="/admin/category/{{$category->id}}/update" method="post">
	@csrf
  <div class="form-group">
    <label>Name</label>
    <input type="text" placeholder="Masukkan Nama" class="form-control" name="name" value="{{$category->name}}">
  </div>
  <button class="btn btn-primary btn-sm">Submit</button>
</form>

@endsection





