<?php

namespace App\Models;

class Genre
{
    public static function getAll()
    {
        return [
            ['id' => 1, 'nama' => 'Fiksi'],
            ['id' => 2, 'nama' => 'Non-Fiksi'],
            ['id' => 3, 'nama' => 'Misteri'],
            ['id' => 4, 'nama' => 'Teknologi'],
            ['id' => 5, 'nama' => 'Romantis'],
        ];
    }
}