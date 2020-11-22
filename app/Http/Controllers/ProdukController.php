<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class ProdukController extends Controller {
	function index(){
		$data['list_produk'] = Produk::all();
		return view('admincs.produk.index', $data);
	}
	function create(){
		return view('admincs.produk.create');
	}
	function store(){
		$produk = new Produk;
		$produk->nama = request('nama');
		$produk->harga = request('harga');
		$produk->berat = request('berat');
		$produk->stok = request('stok');
		$produk->deskripsi = request('deskripsi');
		$produk->save();

		return redirect('produk')->with('success', 'Data berhasil ditambah');

	}
	function show(Produk $produk){
		$data['produk'] = $produk;
		return view('admincs.produk.show', $data);
	}
	function edit(Produk $produk){
		$data['produk'] = $produk;
		return view('admincs.produk.edit', $data);
	}
	function update(produk $produk){
		$produk = new Produk;
		$produk->nama = request('nama');
		$produk->harga = request('harga');
		$produk->berat = request('berat');
		$produk->stok = request('stok');
		$produk->deskripsi = request('deskripsi');
		$produk->save();

		return redirect('produk')->with('success', 'Data berhasil diedit');
	}
	function destroy(Produk $produk){
		$produk->delete();

		return redirect('produk')->with('danger', 'Data berhasil dihapus');
	}

	function filter(){
		$nama = request('nama');
		$stok = explode(",", request('stok'));
		$data['harga_min'] = $harga_min = request('harga_min');
		$data['harga_max'] = $harga_max = request('harga_mix');
		// $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
		// $data['list_produk'] = Produk::whereIn('stock', $stock)->get();
		// $data['list_produk'] = Produk::where('stock', '<>', $stock)->get();
		// $data['list_produk'] = Produk::whereNotIn('stock', $stock)->get();
		// $data['list_produk'] = Produk::whereNotBetween('harga', [$harga_min, $harga_max])->get();
		// $data['list_produk'] = Produk::whereNull('stock')->get();
		// $data['list_produk'] = Produk::whereNotNull('stock')->get();
		// $data['list_produk'] = Produk::whereDate('created_at', '2020-11-11')->get();
		// $data['list_produk'] = Produk::whereYear('created_at', '2020')->get();
		// $data['list_produk'] = Produk::whereMonth('created_at', '11')->get();
		// $data['list_produk'] = Produk::whereMonth('created_at', '11')->whereYear('created_at', '2019')->get();
		// $data['list_produk'] = Produk::whereTime('created_at', '03:30:22')->get();
		// $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->whereNotIn('stock', [10])->whereYear('created_at', '2020')->get();
		$data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->whereBetween('harga', [$harga_min, $harga_max])->get();
		$data['nama'] = $nama;
		$data['stok'] = request('stok');
		return view('admincs.produk.index', $data);
	}

}