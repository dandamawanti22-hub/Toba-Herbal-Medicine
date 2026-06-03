<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Herbal;
use App\Models\Penyakit;
use App\Models\Resep;

class FrontendController extends Controller
{
    // =========================
    // HOME (Halaman Utama)
    // =========================
    public function home()
    {
        $penyakit = Penyakit::all();
        return view('frontend.home', compact('penyakit'));
    }

    // =========================
    // LIST HERBAL
    // =========================
   public function herbal(Request $request)
    {
        $penyakit_id = $request->penyakit;

        if ($penyakit_id) {
            $data = Herbal::whereHas('penyakit', function ($q) use ($penyakit_id) {
                $q->where('penyakit_id', $penyakit_id);
            })->get();
        } else {
            $data = Herbal::all();
        }

        return view('frontend.herbal', compact('data'));
    }

    public function detailHerbal($id)
    {
        $herbal = Herbal::findOrFail($id);

        // ambil resep berdasarkan herbal_id
        $reseps = Resep::where('herbal_id', $id)->get();

        return view('frontend.detail_herbal', compact('herbal', 'reseps'));
    }

    // =========================
    // LIST PENYAKIT
    // =========================
    public function penyakit()
    {
        $data = Penyakit::all();
        return view('frontend.penyakit', compact('data'));
    }

    public function detailPenyakit($id)
    {
        $penyakit = \App\Models\Penyakit::findOrFail($id);

        $reseps = \App\Models\Resep::with('bahan')
                    ->where('penyakit_id', $id)
                    ->get();

        return view('frontend.detail_penyakit', compact('penyakit', 'reseps'));
    }

    // =========================
    // SEARCH + LIST RESEP
    // =========================
    public function resep(Request $request)
    {
        $search = $request->search;

        $query = Resep::with('bahan', 'herbal', 'penyakit');

        // SEARCH
        if ($search) {

            $query->where('nama_resep', 'like', '%' . $search . '%')

                ->orWhereHas('herbal', function ($q) use ($search) {
                    $q->where('nama_herbal', 'like', '%' . $search . '%');
                })

                ->orWhereHas('penyakit', function ($q) use ($search) {
                    $q->where('nama_penyakit', 'like', '%' . $search . '%');
                });

        }

        // FILTER PENYAKIT
        if ($request->penyakit) {
            $query->where('penyakit_id', $request->penyakit);
        }

        // FILTER HERBAL
        if ($request->herbal) {
            $query->where('herbal_id', $request->herbal);
        }

        $data = $query->get();

        return view('frontend.resep', compact('data'));
    }

    // =========================
    // DETAIL RESEP
    // =========================
    public function detailResep($id)
    {
        $data = Resep::with('herbal')->findOrFail($id);
        return view('frontend.detail_resep', compact('data'));
    }

    // =========================
    // EXPLORE (SEMUA DALAM 1 HALAMAN)
    // =========================
    public function explore(Request $request)
    {
        $search = $request->search;

        // =====================
        // SEARCH PENYAKIT
        // =====================
        $penyakit = Penyakit::query();

        if ($search) {
            $penyakit->where('nama_penyakit', 'like', '%' . $search . '%');
        }

        $penyakit = $penyakit->get();

        // =====================
        // SEARCH HERBAL
        // =====================
        $herbal = Herbal::query();

        if ($search) {
            $herbal->where('nama_herbal', 'like', '%' . $search . '%');
        }

        $herbal = $herbal->get();

        return view('frontend.explore', compact('penyakit', 'herbal', 'search'));
    }

}