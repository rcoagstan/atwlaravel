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
		$produk->stok = request('stok');
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
		$produk->stok = request('stok');
		$produk->harga = request('harga');
		$produk->berat = request('berat');
		$produk->deskripsi = request('deskripsi');
		$produk->save();

		return redirect('produk')->with('success', 'Data berhasil diedit');
	}
	function destroy(Produk $produk){
		$produk->delete();

		return redirect('produk')->with('danger', 'Data berhasil dihapus');
	}

}