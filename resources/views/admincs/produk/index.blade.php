@extends('admincs.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card"> 
					<div class="card-header">
						Filter
					</div>
					<div class="card-body">
						<form action="{{url('produk/filter')}}" method="post">
							@csrf
							<div class="form-group">
							<label for="" class="control-label">Nama</label>
							<input type="text" name="nama" class="form-control" value="{{$nama ?? ""}}">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Stock</label>
							<input type="text" name="stock" class="form-control" value="{{$stok ?? ""}}">
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="control-label">Harga Min</label>
									<input type="text" name="harga_min" class="form-control" value="{{$harga_min ?? ""}}">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="control-label">Harga Max</label>
									<input type="text" name="harga_max" class="form-control" value="{{$harga_max ?? ""}}">
								</div>
							</div>
						</div>
							<button class="btn btn-dark float-left"><i class="fa fa-search">&nbspFilter</button></i></button>
						</form>
					</div>
				</div><br><br>
				<div class="card">
					<div class="card-header">
						Data Produk
						<a href="{{url('admincs/produk/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Data</a>
					</div>
					<div class="card-body">
						<table class="table">
							<thead>
								<th>No</th>
								<th>Nama</th>
								<th>Harga</th>
								<th>Stok</th>
								<th>Aksi</th>
							</thead>
							<tbody>
								@foreach($list_produk as $produk)
								<tr>
									<td>{{$loop->iteration}}</td>

									<td>{{$produk->nama}}</td>
									<td>{{$produk->harga}}</td>
									<td>{{$produk->stok}}</td>
									<td width="20px">
										<a href="{{url('produk', $produk->id)}}" class="btn btn-dark" ><i class="fa fa-info"></i></a>
									</td>
									<td width="20px">
										<a href="{{url('produk', $produk->id)}}/edit" class="btn btn-warning" ><i class="fa fa-edit"></i></a>
									</td>	
									<td width="20px">
										@include('admincs.utils.delete',['url'=>url('produk', $produk->id)])
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection