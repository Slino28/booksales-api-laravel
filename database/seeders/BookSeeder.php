<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'title' => 'Bumi',
            'description' => 'Petualangan 3 sahabat di dunia paralel.',
            'price' => 95000,
            'stock' => 20,
            'cover_photo' => 'bumi.jpg',
            'author_id' => 1
        ]);

        Book::create([
            'title' => 'Laskar Pelangi',
            'description' => 'Kisah inspiratif anak-anak Belitung.',
            'price' => 85000,
            'stock' => 15,
            'cover_photo' => 'laskar.jpg',
            'author_id' => 2
        ]);

        Book::create([
            'title' => 'Harry Potter and the Philosopher Stone',
            'description' => 'Awal petualangan penyihir muda.',
            'price' => 150000,
            'stock' => 10,
            'cover_photo' => 'hp.jpg',
            'author_id' => 3
        ]);

        Book::create([
            'title' => 'Murder on the Orient Express',
            'description' => 'Kasus pembunuhan di dalam kereta malam.',
            'price' => 75000,
            'stock' => 12,
            'cover_photo' => 'orient.jpg',
            'author_id' => 4
        ]);

        Book::create([
            'title' => 'Perahu Kertas',
            'description' => 'Kisah perjuangan meraih cita-cita dan cinta.',
            'price' => 88000,
            'stock' => 18,
            'cover_photo' => 'perahu.jpg',
            'author_id' => 5
        ]);
    }
}