<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
</head>
<body>

<h1>Tambah Produk</h1>

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <label>Nama:</label><br>
    <input type="text" name="name"><br><br>

    <label>Harga:</label><br>
    <input type="number" name="price"><br><br>

    <label>Deskripsi:</label><br>
    <textarea name="description"></textarea><br><br>

    <button type="submit">Simpan</button>
    <a href="{{ route('products.index') }}">Batal</a>
</form>

</body>
</html>
