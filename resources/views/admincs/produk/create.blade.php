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
						<form action="produk" method="post">
						@csrf	
						<div class="form-group">
							<label for="" class="control-label">Nama</label>
							<input type="text" class="form-control" name="nama">	
						</div>
						<div class="form-group">
							<label for="" class="control-label">Harga</label>
							<input type="text" class="form-control" name="nama">	
						</div>
						<div class="form-group">
							<label for="" class="control-label">Berat</label>
							<input type="text" class="form-control" name="nama">	
						</div>
						<div class="form-group">
							<label for="" class="control-label">Stok</label>
							<input type="text" class="form-control" name="nama">	
						</div>
						<div class="form-group">
							<label for="" class="control-label">Deskripsi</label>
							<input type="text" class="form-control" name="nama">	
						</div>
						<button class="btn btn-dark float-right"><i class="fa fa-save"></i>Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection