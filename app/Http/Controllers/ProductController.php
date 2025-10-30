<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; //Menghubungkan controller dengan model Product agar bisa mengambil data dari tabel products.

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get(); //mengambil semua data dari tabel products
        return view('product', compact('products')); //mengirim data ke view bernama product.blade.php
    }
}

