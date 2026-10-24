<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Author</title>
</head>
<body>
    <h2>Daftar Penulis (Author)</h2>
    <ul>
        @foreach ($authors as $a)
            <li>{{ $a['id'] }} - {{ $a['nama'] }} ({{ $a['negara'] }})</li>
        @endforeach
    </ul>
</body>
</html>