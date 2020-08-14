@extends('layout.master')
@section('content')
		<!-- pemberitahuan ->artikelControlller-->
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
		{{session('sukses')}}
		</div>
		@endif
		<div class="row">
		<div class="col-6">
			<h1>DATA artikel</h1>
		</div>	
				<div class="col-6">
				
		<button type="button" class="btn btn-primary btn-sm  float-right"  data-toggle="modal" data-target="#exampleModal">
		 Tambah Data artikel
		</button>

			
		</div>	
			
		<table class="table table-hover">
			<tr>
				<th>NAMA </th>
			</tr>
			@foreach($data_artikel as $artikel)	
			<tr>
				<td>{{$artikel->nama_lengkap}}</td>
				<td>{{$artikel->nama_ayah}}</td>
		 		<td>{{$artikel->agama}}</td>
		 		<td>{{$artikel->jenis_kelamin == "L" ? 'laki-laki' : 'perempuan'}}</td>
				<td>{{$artikel->alamat}}</td>
				<td>
					<a href="/artikel/{{$artikel->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
					<a href="/artikel/{{$artikel->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')">Delete</a>
				</td>
			</tr>
			@endforeach
		</table>
		</div>
	</div>

<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		     	  
		      	<form action="/artikel/create" method="POST">
		      		{{csrf_field(  )}}
					 <div class="form-group">
				    	<label for="exampleInputEmail1">Nama Lengkap</label>
				  	  	<input name="nama_lengkap" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap">
				    </div>
				 	   	<div class="form-group">
				 	 	 <label for="exampleInputEmail1">Nama Ayah</label>
				  	 	 <input name="nama_ayah" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Ayah">
				    </div>

				    <div class="form-group">
				  		  <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
				  	 	 <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
				     	 <option value="L">Laki-Laki</option>
				       	<option value="P">Perempuan</option>
				   		 </select>
				 	 </div>

				   
				 	<div class="form-group">
				  		  <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
				  	 	 <select name="agama" class="form-control" id="exampleFormControlSelect1">
				     	 <option value="Islam">islam</option>
				       	<option value="kritsen">kritsen</option>
				       	<option value="Hindu">hindu</option>
				       	<option value="Budha">budha</option>
				   		 </select>
				 	 </div>


				    <div class="form-group">
				    	<label for="exampleFormControlTextarea1">Alamat</label>
				    	<textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				    </div>
				  </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		         <button type="submit" class="btn btn-primary">Submit</button>
		         </form>
		      </div>
		    </div>
		  </div>
		  @endsection

		



