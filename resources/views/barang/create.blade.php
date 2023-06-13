@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold mb-4 text-white text-center">Tambah Barang</h2>

            <form action="{{ route('barang.store') }}" method="POST" class="max-w-md mx-auto">
        @csrf

        <div class="mb-4">
            <label for="nama_produk" class="block text-white mb-2">Nama Produk</label>
            <input type="text" name="nama_produk" id="nama_produk" required class="border border-gray-300 rounded-md px-3 py-2 w-full">
        </div>

        <div class="mb-4">
            <label for="kode_produk" class="block text-white mb-2">Kode Produk</label>
            <input type="text" name="kode_produk" id="kode_produk" required class="border border-gray-300 rounded-md px-3 py-2 w-full">
        </div>

        <div class="mb-4">
            <label for="harga_produk" class="block text-white mb-2">Harga Produk</label>
            <input type="text" name="harga_produk" id="harga_produk" required class="border border-gray-300 rounded-md px-3 py-2 w-full">
        </div>

        <div class="mb-4">
            <label for="stok" class="block text-white mb-2">Stok</label>
            <input type="text" name="stok" id="stok" required class="border border-gray-300 rounded-md px-3 py-2 w-full">
        </div>

        <div class="mb-4">
            <label for="deskripsi" class="block text-white mb-2">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" rows="5" required class="border border-gray-300 rounded-md px-3 py-2 w-full"></textarea>
        </div>

        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Tambah</button>
    </form>
</div>

@endsection
