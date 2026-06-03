<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyakit;

class PenyakitController extends Controller
{
    // =======================
    // TAMPIL DATA
    // =======================
    public function index()
    {
        $data = Penyakit::all();
        return view('penyakit.index', compact('data'));
    }

    // =======================
    // FORM TAMBAH
    // =======================
    public function create()
    {
        return view('penyakit.create');
    }

    // =======================
    // SIMPAN DATA
    // =======================
    public function store(Request $request)
    {
        $request->validate([
            'nama_penyakit' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        // upload gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $namaFile);
        } else {
            $namaFile = null;
        }

        // simpan data
        Penyakit::create([
            'nama_penyakit' => $request->nama_penyakit,
            'deskripsi' => $request->deskripsi,
            'gambar' => $namaFile,
        ]);

        return redirect('/admin/penyakit')->with('success', 'Data berhasil ditambah');
    }

    // =======================
    // FORM EDIT
    // =======================
    public function edit($id)
    {
        $data = Penyakit::findOrFail($id);
        return view('penyakit.edit', compact('data'));
    }

    // =======================
    // UPDATE DATA
    // =======================
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_penyakit' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $data = Penyakit::findOrFail($id);

        // cek jika upload gambar baru
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $namaFile);

            $data->gambar = $namaFile;
        }

        $data->nama_penyakit = $request->nama_penyakit;
        $data->deskripsi = $request->deskripsi;
        $data->save();

        return redirect('/admin/penyakit')->with('success', 'Data berhasil diupdate');
    }

    // =======================
    // HAPUS DATA
    // =======================
    public function destroy($id)
    {
        $data = Penyakit::findOrFail($id);

        // hapus gambar jika ada
        if ($data->gambar && file_exists(public_path('images/' . $data->gambar))) {
            unlink(public_path('images/' . $data->gambar));
        }

        $data->delete();

        return redirect('/admin/penyakit')->with('success', 'Data berhasil dihapus');
    }

    // =======================
    // DETAIL PENYAKIT (FIX UTAMA)
    // =======================
    public function show($id)
    {
        $data = Penyakit::with('resep.bahan')->findOrFail($id);
        return view('penyakit.detail', compact('data'));
    }
}