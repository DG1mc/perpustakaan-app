<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\AuthorController;
use App\Http\Controllers\Api\CategoryController;

// Rute Fitur Tambahan (Statistik & Stok Menipis)
Route::get('books/statistics', [BookController::class, 'statistics']);
Route::get('books/low-stock', [BookController::class, 'lowStock']);

// Rute Resource CRUD API
Route::apiResource('books', BookController::class);
Route::apiResource('authors', AuthorController::class);
Route::apiResource('categories', CategoryController::class);
