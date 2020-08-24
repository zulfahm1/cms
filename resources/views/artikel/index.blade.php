@extends('layout.dash')
@section('content')

<a href="/admin/artikel/create">
  <button type="button" class="btn btn-primary btn-sm float-right">Tambah Data</button>
</a>

<table class="table table-hover">
	<thead>
		<tr>
			
			<td>Category Id</td>
			<td>User Id</td>
			<td>Title</td>
			<td>Content</td>
			<td>Foto</td>
			
		</tr>
	</thead>
	<tbody>
		@foreach( $data_artikel as $artikel)
		<tr>
			
			<td>{{ $artikel->category_id }}</td>
			<td>{{ $artikel->user_id }}</td>
			<td>{{ $artikel->title }}</td>
			<td>{{ $artikel->content }}</td>
			<td>
				<img src="/img/{{ $artikel->image }}" style="width: 30%;">
			</td>
			<td>
				<a href="/admin/artikel/{{$artikel->id }}/edit" class="btn btn-warning btn-sm">edit</a>
				<a href="/admin/artikel/{{$artikel->id }}/delete" class="btn btn-danger btn-sm">hapus</a>
			</td>
			
		</tr>
		@endforeach
	</tbody>

		
	
</table>






@endsection





