<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('ecommerce.home');
});

Route::get('/about', function () {
    return view('ecommerce.about');
});

Route::get('/login', function () {
    return view('ecommerce.login');
});

Route::get('/product', function () {
    return view('ecommerce.product');
});

Route::get('/product-detail', function () {
    return view('ecommerce.product-detail');
});

Route::get('/shoping-cart', function () {
    return view('ecommerce.shoping-cart');
});

Route::get('/register', function () {
    return view('ecommerce.register');
});

Route::get('/base', function () {
    return view('admincs.base');
});

Route::get('homeadmin', [HomeController::class, 'showBeranda']);
Route::get('kategori', [HomeController::class, 'showKategori']);
Route::get('loginadmin', [AuthController::class, 'showLogin']);


Route::get('produk', [ProdukController::class, 'index']);
Route::get('produk/create', [ProdukController::class, 'create']);
Route::post('produk', [ProdukController::class, 'store']);