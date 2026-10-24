<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Genre</title>
</head>
<body>
    <h2>Daftar Genre Buku</h2>
    <ul>
        @foreach ($genres as $g)
            <li>{{ $g['id'] }} - {{ $g['nama'] }}</li>
        @endforeach
    </ul>
</body>
</html>