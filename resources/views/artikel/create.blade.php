@extends('layout.dash')

@section('content')

<form method="post" enctype="multipart/form-data" action="/admin/artikel/create">
	@csrf
<div class="form-group">
  <label>User </label>
  <select name="user_id">
  	@foreach($user as $user)
  	<option value="{{ $user->id }}">
  		{{ $user->name }}
  	</option>
  	@endforeach
  </select>
</div>	
<div>
  <select name="category_id">
    @foreach($category as $category)
    <option value="{{ $category->id }}">
      {{ $category->name }}
    </option>
    @endforeach
  </select>
</div>

  <div class="form-group">
    <label>title</label>
    <input type="text" placeholder="Masukkan Nama" class="form-control" name="title">
  </div>
  <div class="form-group">
    <label>content</label>
 	<textarea name="content" id="editor">
  </textarea>
  </div>
  
  <label>
    photo
    <input type="file" name="photo_file" accept="image/*">
  </label>
  <br>

  <button class="btn btn-primary btn-sm">Tambah Data</button>
</form>

  <!-- ck editor -->
  <script>
    ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
</script>
@endsection