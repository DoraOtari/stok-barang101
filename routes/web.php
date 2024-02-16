<?php

use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\BarangMasukController;
use App\Models\BarangMasuk;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function(){
    return view('login');
});
Route::get('/register', function(){
    return view('register');
});
Route::get('/dashboard', function(){
    return view('admin.dashboard');
});

Route::get('barang-masuk', [BarangMasukController::class, 'index']);
Route::get('tambah-produk', [BarangMasukController::class, 'create']);
Route::post('tambah-produk', [BarangMasukController::class, 'store']);

Route::get('transaksi', [BarangKeluarController::class, 'page_barang_keluar']);
Route::get('/cari/produk', [BarangKeluarController::class, 'cari_produk']);
Route::post('/transaksi/keluar', [BarangKeluarController::class, 'transaksi_produk']);

Route::get('/barang/keluar', [BarangKeluarController::class, 'barang_keluar']);