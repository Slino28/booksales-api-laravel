<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/books', BookController::class)->only(['index', 'show']);
Route::apiResource('/genres', GenreController::class)->only(['index', 'show']);
Route::apiResource('/authors', AuthorController::class)->only(['index', 'show']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::apiResource('/books', BookController::class)->except(['index', 'show']);
    Route::apiResource('/genres', GenreController::class)->except(['index', 'show']);
    Route::apiResource('/authors', AuthorController::class)->except(['index', 'show']);
});