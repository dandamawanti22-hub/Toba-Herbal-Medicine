<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bahan;

class BahanController extends Controller
{
    public function index()
    {
        $data = Bahan::all();
        return view('bahan.index', compact('data'));
    }

    public function create()
    {
        return view('bahan.create');
    }

    public function store(Request $request)
    {
        $gambar = null;

        // upload gambar
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('bahan', 'public');
        }

        Bahan::create([
            'nama_bahan' => $request->nama_bahan,
            'tipe' => $request->tipe,      // ✅ tambahan
            'gambar' => $gambar           // ✅ tambahan
        ]);

        return redirect('/admin/bahan')->with('success', 'Bahan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = Bahan::findOrFail($id);
        return view('bahan.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $bahan = Bahan::findOrFail($id);

        $gambar = $bahan->gambar;

        // kalau upload gambar baru
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('bahan', 'public');
        }

        $bahan->update([
            'nama_bahan' => $request->nama_bahan,
            'tipe' => $request->tipe,      // ✅ tambahan
            'gambar' => $gambar           // ✅ tambahan
        ]);

        return redirect('/admin/bahan')->with('success', 'Bahan berhasil diupdate');
    }

    public function destroy($id)
    {
        $bahan = Bahan::findOrFail($id);
        $bahan->delete();

        return redirect('/admin/bahan')->with('success', 'Bahan berhasil dihapus');
    }
}