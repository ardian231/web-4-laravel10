@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold mb-4 text-white text-center">Detail Barang</h2>

        <div class="mb-4">
            <p class="text-white text-center"><strong>Nama Produk:</strong> {{ $barang->nama_produk }}</p>
            <p class="text-white text-center"><strong>Kode Produk:</strong> {{ $barang->kode_produk }}</p>
            <p class="text-white text-center"><strong>Harga Produk:</strong> {{ $barang->harga_produk }}</p>
            <p class="text-white text-center"><strong>Stok:</strong> {{ $barang->stok }}</p>
            <p class="text-white text-center"><strong>Deskripsi:</strong> {{ $barang->deskripsi }}</p>
        </div>

        <div class="flex justify-center space-x-2">
            <a href="{{ route('barang.edit', $barang->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Edit</a>
            <form action="{{ route('barang.destroy', $barang->id) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">Hapus</button>
            </form>
        </div>
    </div>
@endsection
