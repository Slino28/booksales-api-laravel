<?php

namespace App\Models;

class Author
{
    public static function getAll()
    {
        return [
            ['id' => 1, 'nama' => 'Tere Liye', 'negara' => 'Indonesia'],
            ['id' => 2, 'nama' => 'Andrea Hirata', 'negara' => 'Indonesia'],
            ['id' => 3, 'nama' => 'J.K. Rowling', 'negara' => 'Inggris'],
            ['id' => 4, 'nama' => 'Agatha Christie', 'negara' => 'Inggris'],
            ['id' => 5, 'nama' => 'Dee Lestari', 'negara' => 'Indonesia'],
        ];
    }
}