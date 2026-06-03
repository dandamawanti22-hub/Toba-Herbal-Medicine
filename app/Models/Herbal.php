<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Herbal extends Model
{
    use HasFactory;

    protected $table = 'herbal';

    protected $fillable = [
    'nama_herbal',
    'nama_latin',
    'khasiat',
    'gambar'
];
    // RELASI KE RESEP (many to many)
    public function resep()
    {
        return $this->belongsToMany(Resep::class, 'resep_herbal');
    }

    public function penyakit()
    {
        
    return $this->belongsToMany(\App\Models\Penyakit::class, 'herbal_penyakit');
    
    }
}