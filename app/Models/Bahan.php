<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bahan extends Model
{
    protected $table = 'bahans';

    protected $fillable = [
        'nama_bahan',
        'tipe',
        'gambar'
    ];

    public function resep()
    {
        return $this->belongsToMany(Resep::class, 'resep_bahan');
    }
}