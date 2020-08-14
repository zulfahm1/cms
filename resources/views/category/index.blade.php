@extends('layout.dash')
@section('content')

<a href="/category/create">
  <button type="button" class="btn btn-primary btn-sm float-right">Tambah Data</button>
</a>

<table class="table table-hover">
	<thead>
		<tr>
			
			<th>Nama</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach( $data_category as $category)
		<tr>
			
			<td>{{ $category->name }}</td>
			<td><a href="/category/{{$category->id }}/edit" class="btn btn-warning btn-sm">edit</a></td>
			<td><a href="/category/{{$category->id }}/delete" class="btn btn-danger btn-sm">hapus</a></td>
			
		</tr>
		@endforeach
	</tbody>

		
	
</table>






@endsection




<!-- <h1>data categoies</h1>
<table>
	<tr>
		<th>nama</th>
	</tr>
	@foreach($data_category as $category)
	<tr>
		<td>{{ $category->name}}</td>
	</tr>
	@endforeach
</table>
 -->
