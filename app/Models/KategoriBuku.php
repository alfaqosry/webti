<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBuku extends Model
{
    use HasFactory;
    protected $fillable = [
        'kategori_buku',
      
    ];


    public function perpustakaan()
    {
        return $this->belongsTo(Perpustakaan::class);
    }
}