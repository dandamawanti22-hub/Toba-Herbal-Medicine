<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bahan;

class BahanController extends Controller
{
    public function index()
    {
        $bahans = Bahan::where('tipe', 'bahan')->get();
        $alats  = Bahan::where('tipe', 'alat')->get();

        return view('bahan.index', compact('bahans', 'alats'));
    }

    public function create()
    {
        return view('bahan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|unique:bahans,kode',
            'nama_bahan' => 'required',
            'tipe' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp'
        ]);

        $gambar = null;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $gambar = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $gambar);
        }

        Bahan::create([
            'kode' => $request->kode,
            'nama_bahan' => $request->nama_bahan,
            'tipe' => $request->tipe,
            'gambar' => $gambar
        ]);

        return redirect('/admin/bahan')
            ->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = Bahan::findOrFail($id);

        return view('bahan.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $bahan = Bahan::findOrFail($id);

        $request->validate([
            'kode' => 'required|unique:bahans,kode,' . $bahan->id,
            'nama_bahan' => 'required',
            'tipe' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp'
        ]);

        $gambar = $bahan->gambar;

        if ($request->hasFile('gambar')) {
            if ($bahan->gambar && file_exists(public_path('images/' . $bahan->gambar))) {
                unlink(public_path('images/' . $bahan->gambar));
            }

            $file = $request->file('gambar');
            $gambar = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $gambar);
        }

        $bahan->update([
            'kode' => $request->kode,
            'nama_bahan' => $request->nama_bahan,
            'tipe' => $request->tipe,
            'gambar' => $gambar
        ]);

        return redirect('/admin/bahan')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $bahan = Bahan::findOrFail($id);

        if ($bahan->gambar && file_exists(public_path('images/' . $bahan->gambar))) {
            unlink(public_path('images/' . $bahan->gambar));
        }

        $bahan->delete();

        return redirect('/admin/bahan')
            ->with('success', 'Data berhasil dihapus');
    }
}