<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku</title>
</head>
<body>
    <h2>Daftar Koleksi Buku</h2>
    @foreach ($books as $item)
        <ul>
            <li><strong>Judul:</strong> {{ $item->title }}</li>
            <li><strong>Harga:</strong> Rp {{ number_format($item->price, 0, ',', '.') }}</li>
            <li><strong>Stok:</strong> {{ $item->stock }}</li>
            <li><strong>Deskripsi:</strong> {{ $item->description }}</li>
        </ul>
    @endforeach
</body>
</html>