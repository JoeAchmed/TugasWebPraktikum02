<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    // Bikin fungsi untuk menampilkan view form
    public function index() {
        return view('form');
    }

    // Fungsi untuk menampilkan hasil
    public function hasil(Request $request)
    {
        // validasi inputan
        $this->validate($request, [
            'nama' => 'required|min:5|max:20',
            'ttl' => 'required',
            'jenis_kelamin' => 'required',
            'hobi' => 'required',
        ]);
        return view('hasil', ['data' => $request]);
    }
}
