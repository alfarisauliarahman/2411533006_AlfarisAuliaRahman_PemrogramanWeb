<!DOCTYPE html>
<html>
<head>
    <title>Detail Produk</title>
</head>
<body>

<h1>Detail Produk</h1>

<p><strong>Nama:</strong> {{ $product->name }}</p>
<p><strong>Harga:</strong> Rp{{ number_format($product->price, 0, ',', '.') }}</p>
<p><strong>Deskripsi:</strong> {{ $product->description }}</p>

<a href="{{ route('products.index') }}">Kembali</a>

</body>
</html>
