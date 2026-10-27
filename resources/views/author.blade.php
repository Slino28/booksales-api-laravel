<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Author</title>
</head>
<body>
    <h2>Daftar Penulis Buku</h2>
    @foreach ($authors as $item)
        <ul>
            <li><strong>Nama:</strong> {{ $item->name }}</li>
            <li><strong>Bio:</strong> {{ $item->bio }}</li>
        </ul>
    @endforeach
</body>
</html>