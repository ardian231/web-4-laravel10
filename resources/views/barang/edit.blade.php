@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold mb-4 text-white text-center">Edit Barang</h2>

       <form action="{{ route('barang.update', $barang->id) }}" method="POST" class="max-w-md mx-auto">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="nama_produk" class="block text-white mb-2">Nama Produk</label>
            <input type="text" name="nama_produk" id="nama_produk" value="{{ $barang->nama_produk }}" required class="border border-gray-300 rounded-md px-3 py-2 w-full">
        </div>

        <div class="mb-4">
            <label for="kode_produk" class="block text-white mb-2">Kode Produk</label>
            <input type="text" name="kode_produk" id="kode_produk" value="{{ $barang->kode_produk }}" required class="border border-gray-300 rounded-md px-3 py-2 w-full">
        </div>

        <div class="mb-4">
            <label for="harga_produk" class="block text-white mb-2">Harga Produk</label>
            <input type="text" name="harga_produk" id="harga_produk" value="{{ $barang->harga_produk }}" required class="border border-gray-300 rounded-md px-3 py-2 w-full">
        </div>

        <div class="mb-4">
            <label for="stok" class="block text-white mb-2">Stok</label>
            <input type="text" name="stok" id="stok" value="{{ $barang->stok }}" required class="border border-gray-300 rounded-md px-3 py-2 w-full">
        </div>

        <div class="mb-4">
            <label for="deskripsi" class="block text-white mb-2">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" rows="5" required class="border border-gray-300 rounded-md px-3 py-2 w-full">{{ $barang->deskripsi }}</textarea>
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
    </form>
</div>

@endsection
