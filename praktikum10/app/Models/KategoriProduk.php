<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    use HasFactory;
    // Menentukan nama tabel yang terhubung dengan model ini
    protected $table = 'kategori_produk';

    // tentuin kolom2 yang bisa diisi
    protected $fillable = [
        'nama',             // Nama kategori
    ];

    // bikin fungsi untuk relasi ke tabel produk
    public function produk() {
        return $this->hasMany(Produk::class);
    }
}
