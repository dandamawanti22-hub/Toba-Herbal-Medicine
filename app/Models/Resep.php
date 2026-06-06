<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bahan;
use App\Models\Penyakit;
use App\Models\Herbal;

class Resep extends Model
{
    use HasFactory;

    protected $table = 'resep';

    protected $fillable = [
        'kode_resep',
        'nama_resep',
        'cara_pembuatan',
        'cara_penggunaan',
        'gambar',
    ];

    public function herbal()
    {
        return $this->belongsToMany(
            Herbal::class,
            'resep_herbal'
        );
    }

    public function bahan()
    {
        return $this->belongsToMany(Bahan::class, 'resep_bahan')
                    ->withPivot('jumlah');
    }

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class);
    }
}