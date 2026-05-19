@extends('layouts.app')

@section('title', 'Products')

@section('content')

<a href="{{ route('products.create') }}">Tambah Produk</a>

<ul>
    @foreach ($products as $product)
        <li>
            {{ $product->name }} - Rp{{ number_format($product->price, 0, ',', '.') }}
            <a href="{{ route('products.show', $product->id) }}">Detail</a> |
            <a href="{{ route('products.edit', $product->id) }}">Edit</a> |
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Hapus produk ini?')">Hapus</button>
            </form>
        </li>
    @endforeach
</ul>

@endsection
