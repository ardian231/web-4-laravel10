@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-2xl font-bold mb-4 text-black text-center">Daftar Barang</h2>

            @if(session('success'))
        <div class="bg-green-200 text-green-800 rounded-md py-2 px-4 mb-4">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('barang.create') }}" class="bg-green-500 hover:bg-green-700 text-black font-bold py-2 px-4 rounded mt-4">Tambah Barang</a>

    <table class="table-auto w-full border-collapse border border-spacing-2">
        <thead>
            <tr>
                <th class="border p-2 bg-blue-500 text-black">No</th>
                <th class="border p-2 bg-blue-500 text-black">Nama Produk</th>
                <th class="border p-2 bg-blue-500 text-black">Kode Produk</th>
                <th class="border p-2 bg-blue-500 text-black">Harga Produk</th>
                <th class="border p-2 bg-blue-500 text-black">Stok</th>
                <th class="border p-2 bg-blue-500 text-black">Deskripsi</th>
                <th class="border p-2 bg-blue-500 text-black">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barang as $item)
                <tr>
                    <td class="border p-2 bg-gray-200 text-black">{{ $loop->iteration }}</td>
                    <td class="border p-2 bg-gray-200 text-black">{{ $item->nama_produk }}</td>
                    <td class="border p-2 bg-gray-200 text-black">{{ $item->kode_produk }}</td>
                    <td class="border p-2 bg-gray-200 text-black">{{ $item->harga_produk }}</td>
                    <td class="border p-2 bg-gray-200 text-black">{{ $item->stok }}</td>
                    <td class="border p-2 bg-gray-200 text-black">{{ $item->deskripsi }}</td>
                    <td class="border p-2 bg-gray-200 text-black">
                        <div class="space-x-2">
                            <a href="{{ route('barang.show', $item->id) }}" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Lihat</a>
                            <a href="{{ route('barang.edit', $item->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-black font-bold py-2 px-4 rounded">Edit</a>
                            <form action="{{ route('barang.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Apakah yakin ingin menghapus barang ini?')" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
