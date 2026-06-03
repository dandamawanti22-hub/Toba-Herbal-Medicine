<?php

namespace App\Http\Controllers;

use App\Models\Herbal;
use App\Models\Resep;
use App\Models\Penyakit;
use App\Models\Bahan;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'herbal' => Herbal::count(),
            'resep' => Resep::count(),
            'penyakit' => Penyakit::count(),
            'bahan' => Bahan::count() // ✅ TAMBAHKAN INI
        ]);
    }
}