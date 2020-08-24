@extends('layout.dash')
@section('content')

<a href="/admin/category/create">
  <button type="button" class="btn btn-primary btn-sm float-right">Tambah Data</button>
</a>

<table class="table table-hover">
	<thead>
		<tr>
			<th>Name</th>
		</tr>
	</thead>
	<tbody>
		@foreach( $data_category as $category)
		<tr>
			
			<td>{{ $category->name }}</td>
		<td>
				<a href="/admin/category/{{$category->id }}/edit" class="btn btn-warning btn-sm">edit</a>
				<a href="/admin/category/{{$category->id }}/delete" class="btn btn-danger btn-sm">hapus</a>
			</td>
			
		</tr>
		@endforeach
	</tbody>
</table>

@endsection






