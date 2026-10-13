<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Produk</title>
</head>
<body>
    <h1>Detail Produk</h1>

    <p>ID Produk: {{ $id }}</p>

    <a href="{{ route('produk.index') }}">
        Kembali ke Daftar Produk
    </a>
</body>
</html>
