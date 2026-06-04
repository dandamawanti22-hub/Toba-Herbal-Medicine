<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bahan;
use App\Models\Penyakit;

class Resep extends Model
{
    use HasFactory;

    protected $table = 'resep';

    protected $fillable = [
        'herbal_id',
        'nama_resep',
        'cara_pembuatan',
        'cara_penggunaan',
        'gambar',
    ];

    public function herbal()
    {
        return $this->belongsTo(\App\Models\Herbal::class, 'herbal_id');
    }

    public function bahan()
    {
        return $this->belongsToMany(Bahan::class, 'resep_bahan')
                    ->withPivot('jumlah');
    }

    // TAMBAHKAN INI
    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class);
    }
}