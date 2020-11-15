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
						<form action="{{url('produk', $produk->id)}}" method="post">
						@csrf	
						@method("PUT")
						<div class="form-group">
							<label for="" class="control-label">Nama</label>
							<input type="text" class="form-control" name="nama" value="{{$produk->nama}}">	
						</div>
						<div class="form-group">
							<label for="" class="control-label">Harga</label>
							<input type="text" class="form-control" name="harga" value="{{$produk->harga}}">	
						</div>
						<div class="form-group">
							<label for="" class="control-label">Berat</label>
							<input type="text" class="form-control" name="berat" value="{{$produk->berat}}">	
						</div>
						<div class="form-group">
							<label for="" class="control-label">Stok</label>
							<input type="text" class="form-control" name="stok" value="{{$produk->stok}}">	
						</div>
						<div class="form-group">
							<label for="" class="control-label">Deskripsi</label value="{{$produk->deskripsi}}">
							<input type="text" class="form-control" name="deskripsi">	
						</div>
						<button class="btn btn-dark float-right"><i class="fa fa-save"></i>Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection