<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

	function showBeranda(){
		return view('admincs.homeadmin');
	}

	function showProduk(){
		return view('admincs.produk');
	}

	function showKategori(){
		return view('admincs.kategori');
	}

}