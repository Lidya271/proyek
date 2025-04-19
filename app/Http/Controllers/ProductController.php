<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Method untuk menampilkan daftar produk
    public function index()
    {
        $products = [
            1 => [
                'name' => 'Kaos Laravel', 
                'price' => 150000,
                'description' => 'Kaos dengan logo Laravel resmi',
            ],
            2 => [
                'name' => 'Stiker Coding', 
                'price' => 25000,
                'description' => 'Stiker keren untuk laptop developer',
            ],
            3 => [
                'name' => 'Notebook Dev', 
                'price' => 50000,
                'description' => 'Buku catatan khusus programmer',
            ],
        ];

        return view('products.index', compact('products'));
    }

    // Method untuk menampilkan detail produk
    public function show($id)
    {
        $products = [
            1 => ['name' => 'Kaos Laravel', 'price' => 150000, 'description' => 'Kaos keren untuk programmer.'],
            2 => ['name' => 'Stiker Coding', 'price' => 25000, 'description' => 'Stiker lucu untuk laptop kamu.'],
            3 => ['name' => 'Notebook Dev', 'price' => 50000, 'description' => 'Notebook eksklusif untuk developer.'],
        ];

        if (!array_key_exists($id, $products)) {
            abort(404); // jika produk tidak ditemukan
        }

        $product = $products[$id];

        return view('products.detail', compact('product'));
    }
}
