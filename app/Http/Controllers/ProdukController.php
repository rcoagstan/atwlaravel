<?php

namespace App\Http\Controllers;

class ProdukController extends Controller {
	function index(){
		return view('admincs.produk.index');
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
	function show(){

	}
	function edit(){

	}
	function update(){

	}
	function destroy(){

	}

}