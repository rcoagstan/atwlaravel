<?php

namespace App\Http\Controllers;

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
		$produk->stok = request('stok');
		$produk->harga = request('harga');
		$produk->berat = request('berat');
		$produk->deskripsi = request('deskripsi');
		$produk->save();

		return redirect('produk');

	}
	function show(Produk $produk){
		$data['produk'] = Produk($produk);
		return view('produk.show', $data);
	}
	function edit(Produk $produk){
		$data['produk'] = Produk($produk);
		return view('produk.edit', $data);
	}
	function update(produk $produk){
$produk = new Produk;
		$produk->nama = request('nama');
		$produk->stok = request('stok');
		$produk->harga = request('harga');
		$produk->berat = request('berat');
		$produk->deskripsi = request('deskripsi');
		$produk->save();

		return redirect('produk');
	}
	function destroy(){

	}

}