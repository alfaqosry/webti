<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favoritbuku extends Model
{
    use HasFactory;
    protected $fillable = [
        'buku_id',
        'user_id'
    ];


    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
