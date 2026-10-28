<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    // Read all data genre (GET)
    public function index()
    {
        $genres = Genre::all();

        return response()->json([
            'success' => true,
            'message' => 'Get All Resource',
            'data'    => $genres
        ], 200);
    }

    // Create data genre baru (POST)
    public function store(Request $request)
    {
        // Validasi data input
        $validated = $request->validate([
            'name'        => 'required|string',
            'description' => 'nullable|string',
        ]);

        // Simpan data ke database
        $genre = Genre::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Resource created successfully',
            'data'    => $genre
        ], 201); // Status code 201 Created
    }
}