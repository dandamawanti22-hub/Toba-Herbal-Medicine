<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;

    protected $table = 'penyakit';

    protected $fillable = [
        'kode_penyakit',
        'nama_penyakit',
        'deskripsi',
        'gambar',
        'gejala',
        'penyebab',
        'pengobatan',
        'pencegahan',
    ];

    public function herbal()
    {
        return $this->belongsToMany(\App\Models\Herbal::class, 'herbal_penyakit');
    }

    public function resep()
    {
        return $this->hasOne(Resep::class);
    }
}