@extends('layout.dash')
@section('content')

<a href="/admin/user/create">
  <button type="button" class="btn btn-primary btn-sm float-right">Tambah Data</button>
</a>

<table class="table table-hover">
	<thead>
		<tr>
			
			<th>Nama</th>
			<th>Email</th>
			<th>Password</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach( $data_user as $user)
		<tr>
			
			<td>{{ $user->name }}</td>
			<td>{{ $user->email }}</td>
			<td>{{ $user->password }}</td>
			<td>
				<a href="/admin/user/{{$user->id }}/edit" class="btn btn-warning btn-sm">edit</a>
				<a href="/admin/user/{{$user->id }}/delete" class="btn btn-danger btn-sm">hapus</a>
			</td>
			
		</tr>
		@endforeach
	</tbody>
	
</table>

@endsection





