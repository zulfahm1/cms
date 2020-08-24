@extends('layout.dash')
@section('content')
<h1> Edit Data</h1>

<form action="/admin/artikel/{{$artikel->id}}/update" method="post">
	@csrf
  <div class="form-group">
    <select name="user_id">
      @foreach($user as $user)
      <option value="{{ $user->id }}" >
        {{ $user->name}}
      </option>
      @endforeach
    </select>
    <select name="category_id">
      @foreach($category as $category)
      <option value="{{ $category->id }}" >
        {{ $category->name}}
      </option>
      @endforeach
    </select>
    <label>Name</label>
    <input type="text" placeholder="Masukkan Nama" class="form-control" name="title" value="{{$artikel->title}}">
  </div>
  <div class="form-group">
    <label>Name</label>
   	<textarea name="content">
   	</textarea>
  </div>
  <br>
  <label>
    photo
    <input type="file" name="photo_file" accept="image/*">
  </label>
  <br>
  <button class="btn btn-primary btn-sm">Submit</button>
</form>

@endsection





