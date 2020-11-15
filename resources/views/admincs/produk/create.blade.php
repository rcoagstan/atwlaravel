@extends('admincs.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Data Produk
					</div>
					<div class="card-body">
					<form action="{{url('produk')}}" method="post">
						@csrf
						<div class="form-group" >
							<label for="" class="control-label">Nama</label>
							<input type="text" class="form-control" name="nama"></input>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group" >
									<label for="" class="control-label">Harga</label>
									<input type="text" class="form-control" name="harga"></input>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group" >
									<label for="" class="control-label">Berat</label>
									<input type="text" class="form-control" name="berat"></input>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group" >
									<label for="" class="control-label">Stock</label>
									<input type="text" class="form-control" name="stok"></input>
								</div>
							</div>
						</div>
						<div class="form-group" >
							<label for="" class="control-label">Deskripsi</label>
							<textarea name="deskripsi" class="form-control">
								
							</textarea>
						</div>
						<button class="btn btn-primary right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
				</div>
			</div>
		</div>
	</div>
@endsection