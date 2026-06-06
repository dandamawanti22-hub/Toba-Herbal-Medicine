<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Resep;

class Bahan extends Model
{
    protected $table = 'bahans';

    protected $fillable = [
        'kode',
        'nama_bahan',
        'tipe',
        'gambar'
    ];

    public function resep()
    {
        return $this->belongsToMany(Resep::class, 'resep_bahan')
                    ->withPivot('jumlah');
    }
}