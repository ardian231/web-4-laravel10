<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();

        return view('barang.index', compact('barang'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'kode_produk' => 'required',
            'harga_produk' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required',
        ]);

        Barang::create($validatedData);

        return redirect('/barang')->with('success', 'Data barang berhasil ditambahkan');
    }

    public function show($id)
    {
        $barang = Barang::findOrFail($id);

        return view('barang.show', compact('barang'));
    }

    public function edit($id)
    {
        $barang = Barang::findOrFail($id);

        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'kode_produk' => 'required',
            'harga_produk' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required',
        ]);

        $barang = Barang::findOrFail($id);
        $barang->update($validatedData);

        return redirect('/barang/' . $id)->with('success', 'Data barang berhasil diperbarui');
    }

    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();

        return redirect('/barang')->with('success', 'Data barang berhasil dihapus');
    }
}