<?php

namespace App\Http\Controllers;

use App\Models\BarangKeluar;
use App\Models\BarangMasuk;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    function page_barang_keluar() {
        $listBarang = BarangMasuk::all();
        return view('barang_keluar.transaksi_keluar', compact('listBarang'));
    }

    function cari_produk(Request $req) {
        $barang = BarangMasuk::where('nama_barang', $req->nama_barang)->first();
        $listBarang = BarangMasuk::all();
        return view('barang_keluar.transaksi_keluar',compact('barang', 'listBarang'));
    }

    function transaksi_produk(Request $req) {
        BarangKeluar::create(
            [
                'nama_barang' => $req->nama_barang,
                'qty_keluar' => $req->jumlah_beli,
                'harga_jual' => $req->total_bayar,
            ]
            );
        $barang = BarangMasuk::where('nama_barang', $req->nama_barang)->first();
            $barang->decrement('qty_masuk', $req->jumlah_beli);
        return redirect('/barang-masuk')->with('pesan', "Stok $req->nama_barang berkurang -$req->jumlah_beli");
    }

    function barang_keluar() {
        return view('barang_keluar.list_barang_keluar',['list_barang_keluar' => BarangKeluar::latest()->get()]);
    }
}
