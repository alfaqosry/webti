<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perpustakaan extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul_buku',
        'penulis',
        'tahun_buku',
        'kategori_buku_id',
        'nisbn',
        'src_buku',
        'foto_sampul',
        'pdf_buku',
        'penerbit_buku'
    ];

    public function kategoribuku()
    {
        return $this->hasMany(KategoriBuku::class);
    }

}
