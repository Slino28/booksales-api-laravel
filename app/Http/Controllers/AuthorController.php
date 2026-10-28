<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // Read all data author (GET)
    public function index()
    {
        $authors = Author::all();

        return response()->json([
            'success' => true,
            'message' => 'Get All Resource',
            'data'    => $authors
        ], 200);
    }

    // Create data author baru (POST)
    public function store(Request $request)
    {
        // Validasi data input
        $validated = $request->validate([
            'name'  => 'required|string',
            'photo' => 'nullable|string',
            'bio'   => 'nullable|string',
        ]);

        // Simpan data ke database
        $author = Author::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Resource created successfully',
            'data'    => $author
        ], 201); // Status code 201 Created
    }
}