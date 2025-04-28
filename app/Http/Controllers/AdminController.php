<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create()
    {
        return view('admin.index');
    }

    public function store(Request $request)
    {
        // Validasi inputan
        $validated = $request->validate([
            'nama'   => 'required|string|max:255',
            'email'  => 'required|email|unique:users,email',
            'no_hp'  => 'required|string|max:15',
            'alamat' => 'required|string',
            'role'   => 'required|in:Super Admin,Kasir',
        ]);

        // Jika lolos validasi, lakukan sesuatu
        // Misalnya simpan ke database (nanti ditambahkan sesuai kebutuhan)

        // Response sukses
        return back()->with('success', 'Data admin berhasil disimpan!');
    }
}

