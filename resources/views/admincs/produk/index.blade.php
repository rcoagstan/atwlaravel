@extends('admincs.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Data Produk
						<a href="admincs/produk/create" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Data</a>
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