@extends('admincs.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Detail Data Produk
					</div>
					<div class="card-body">
						<h3>{{$produk->nama}}</h3>
					<hr>
					<p>
						Rp.{{number_format($produk->harga)}} |
						Stock : {{$produk->stock}} |
						Berat : {{$produk->berat}} gr
					</p>
					<p>
						{!! ($produk->deskripsi) !!}
					</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection