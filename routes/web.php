<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; // Mengimpor controller yang akan digunakan

// Rute utama (homepage) — menampilkan tampilan awal
Route::get('/', function () {
    return view('homepage');
});

// Rute resource otomatis untuk controller Product
// Akan otomatis membuat rute CRUD (index, create, store, show, edit, update, destroy)
Route::resource('product', ProductController::class);

