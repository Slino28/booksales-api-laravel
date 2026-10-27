<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        Author::create([
            'name' => 'Tere Liye',
            'photo' => 'tere_liye.jpg',
            'bio' => 'Penulis novel terkenal dari Indonesia.'
        ]);

        Author::create([
            'name' => 'Andrea Hirata',
            'photo' => 'andrea.jpg',
            'bio' => 'Penulis novel Laskar Pelangi.'
        ]);

        Author::create([
            'name' => 'J.K. Rowling',
            'photo' => 'rowling.jpg',
            'bio' => 'Penulis serial populer Harry Potter.'
        ]);

        Author::create([
            'name' => 'Agatha Christie',
            'photo' => 'agatha.jpg',
            'bio' => 'Penulis novel detektif kawakan.'
        ]);

        Author::create([
            'name' => 'Dee Lestari',
            'photo' => 'dee.jpg',
            'bio' => 'Penulis seri Supernova.'
        ]);
    }
}