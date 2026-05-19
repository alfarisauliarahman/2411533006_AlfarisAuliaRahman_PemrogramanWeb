<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
</head>
<body>

<h1>Edit Produk</h1>

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nama:</label><br>
    <input type="text" name="name" value="{{ $product->name }}"><br><br>

    <label>Harga:</label><br>
    <input type="number" name="price" value="{{ $product->price }}"><br><br>

    <label>Deskripsi:</label><br>
    <textarea name="description">{{ $product->description }}</textarea><br><br>

    <button type="submit">Update</button>
    <a href="{{ route('products.index') }}">Batal</a>
</form>

</body>
</html>
