@extends('admincs.base')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Tambah Data User
					</div>
					<div class="card-body">
					<form action="{{url('user')}}" method="post">
						@csrf
						<div class="form-group" >
							<label for="" class="control-label">Username</label>
							<input type="text" class="form-control" name="username"></input>
						</div>
						
						<div class="form-group" >
							<label for="" class="control-label">Email</label>
							<input type="email" class="form-control" name="email"></input>
						</div>
						<div class="form-group" >
							<label for="" class="control-label">Nama</label>
							<input type="text" class="form-control" name="nama"></input>
						</div>
						<div class="col-md-3">
								<div class="form-group" >
									<label for="" class="control-label">No HP</label>
									<input type="text" class="form-control" name="no_hp" value="{{$user->no_hp}}"></input>
								</div>
							</div>
						<div class="form-group" >
							<label for="" class="control-label">Password</label>
							<input type="password" class="form-control" name="password"></input>
						</div>
						<button class="btn btn-primary right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
				</div>
			</div>
		</div>
	</div>
@endsection