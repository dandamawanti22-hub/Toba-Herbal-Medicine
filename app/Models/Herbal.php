<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Resep;
use App\Models\Penyakit;

class Herbal extends Model
{
    use HasFactory;

    protected $table = 'herbal';

    protected $fillable = [
        'kode_herbal',
        'nama_herbal',
        'nama_latin',
        'khasiat',
        'gambar',
    ];

    public function resep()
    {
        return $this->belongsToMany(
            Resep::class,
            'resep_herbal'
        );
    }

    public function penyakit()
    {
        return $this->belongsToMany(Penyakit::class, 'herbal_penyakit');
    }
}