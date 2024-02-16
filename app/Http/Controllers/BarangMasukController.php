<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.barang-masuk.index', ["list_barang_masuk" => BarangMasuk::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.barang-masuk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        BarangMasuk::create(
            [
                'kode_barang' => $request->kode_barang,
                'nama_barang' => $request->nama_barang,
                'qty_masuk' => $request->qty_masuk,
                'supplier' => $request->supplier,
                'harga' => $request->harga,
                'foto_produk' => $request->foto_produk->store("Foto Produk"),
                'rating' => $request->rating,
                'deskripsi' => $request->deskripsi,
            ]
        );

        return redirect('/barang-masuk')->with('pesan','berhasi tambah barang');
    }

    /**
     * Display the specified resource.
     */
    public function show(BarangMasuk $barangMasuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BarangMasuk $barangMasuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BarangMasuk $barangMasuk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BarangMasuk $barangMasuk)
    {
        //
    }
}
