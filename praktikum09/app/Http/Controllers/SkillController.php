<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    // Bikin fungsi untuk menampilkan view form
    public function index()
    {
        return view('skill');
    }

    // Fungsi untuk menampilkan hasil
    public function skillHasil(Request $request)
    {
        // validasi inputan
        $this->validate($request, [
            'nama' => 'required|min:5|max:20',
            'email' => 'required',
            'lokasi' => 'required',
            'jenis_kelamin' => 'required',
            'skill' => 'required',
        ]);

        $skills = $request->input('skill');

        // Mengirim nilai skill ke view
        return view('skillhasil', ['data' => $request, 'skills' => $skills]);
    }
}
