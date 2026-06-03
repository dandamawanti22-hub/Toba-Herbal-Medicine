<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Herbal;
use App\Models\Penyakit;
use App\Models\Resep;

class HerbalController extends Controller
{
    // =========================
    // TAMPIL DATA
    // =========================

    public function index(Request $request)
    {
        $penyakit_id = $request->penyakit;

        if ($penyakit_id) {
            $data = \App\Models\Herbal::join('herbal_penyakit', 'herbal.id', '=', 'herbal_penyakit.herbal_id')
                ->where('herbal_penyakit.penyakit_id', $penyakit_id)
                ->select('herbal.*')
                ->get();
        } else {
            $data = \App\Models\Herbal::all();
        }

        return view('herbal.index', compact('data')); 
    }

    // =========================
    // FORM TAMBAH
    // =========================
    public function create()
    {
        $penyakit = Penyakit::all();
        return view('herbal.create', compact('penyakit'));
    }

    // =========================
    // SIMPAN DATA
    // =========================
    public function store(Request $request)
    {
        $request->validate([
            'nama_herbal' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        // upload gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('images'), $namaFile);
        } else {
            $namaFile = null;
        }

        // simpan herbal
        $herbal = Herbal::create([
            'nama_herbal' => $request->nama_herbal,
            'nama_latin' => $request->nama_latin,
            'khasiat' => $request->khasiat,
            'cara_pembuatan' => $request->cara_pembuatan,
            'cara_penggunaan' => $request->cara_penggunaan,
            'gambar' => $namaFile,
        ]);

        // simpan relasi penyakit
        if ($request->penyakit) {
            $herbal->penyakit()->attach($request->penyakit);
        }

        return redirect('/herbal')->with('success', 'Data herbal berhasil ditambah');
    }

    // =========================
    // FORM EDIT
    // =========================
    public function edit($id)
    {
        $herbal = Herbal::with('penyakit')->findOrFail($id);
        $penyakit = Penyakit::all();

        return view('herbal.edit', compact('herbal', 'penyakit'));
    }

    // =========================
    // UPDATE DATA (FINAL FIX)
    // =========================
    public function update(Request $request, $id)
    {
        $herbal = Herbal::findOrFail($id);

        // upload gambar baru (kalau ada)
        if ($request->hasFile('gambar')) {

            // hapus gambar lama
            if ($herbal->gambar && file_exists(public_path('images/'.$herbal->gambar))) {
                unlink(public_path('images/'.$herbal->gambar));
            }

            $file = $request->file('gambar');
            $namaFile = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('images'), $namaFile);

            $herbal->gambar = $namaFile;
        }

        // update data utama
        $herbal->update([
            'nama_herbal' => $request->nama_herbal,
            'nama_latin' => $request->nama_latin,
            'khasiat' => $request->khasiat,
            'cara_pembuatan' => $request->cara_pembuatan,
            'cara_penggunaan' => $request->cara_penggunaan,
        ]);

        // 🔥 UPDATE RELASI (INI YANG PENTING)
        $herbal->penyakit()->sync($request->penyakit ?? []);

        return redirect('/herbal')->with('success', 'Data herbal berhasil diupdate');
    }

    // =========================
    // HAPUS DATA
    // =========================
    public function destroy($id)
    {
        $herbal = Herbal::findOrFail($id);

        // hapus gambar
        if ($herbal->gambar && file_exists(public_path('images/'.$herbal->gambar))) {
            unlink(public_path('images/'.$herbal->gambar));
        }

        $herbal->delete();

        return redirect('/herbal')->with('success', 'Data berhasil dihapus');
    }

    public function show($id)
    {
        $herbal = Herbal::with('penyakit')->findOrFail($id);

        $reseps = Resep::whereHas('herbal', function($q) use ($id) {
            $q->where('herbal_id', $id);
        })->get();

        return view('frontend.detail_herbal', compact('herbal', 'reseps'));
    }
}