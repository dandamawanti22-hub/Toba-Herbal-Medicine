<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyakit;

class PenyakitController extends Controller
{
    public function index()
    {
        $data = Penyakit::all();
        return view('penyakit.index', compact('data'));
    }

    public function create()
    {
        return view('penyakit.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_penyakit' => 'required|unique:penyakit,kode_penyakit',
            'nama_penyakit' => 'required',
            'deskripsi' => 'required',
            'gejala' => 'nullable',
            'penyebab' => 'nullable',
            'pengobatan' => 'nullable',
            'pencegahan' => 'nullable',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $namaFile);
        } else {
            $namaFile = null;
        }

        Penyakit::create([
            'kode_penyakit' => $request->kode_penyakit,
            'nama_penyakit' => $request->nama_penyakit,
            'deskripsi' => $request->deskripsi,
            'gejala' => $request->gejala,
            'penyebab' => $request->penyebab,
            'pengobatan' => $request->pengobatan,
            'pencegahan' => $request->pencegahan,
            'gambar' => $namaFile,
        ]);

        return redirect('/admin/penyakit')->with('success', 'Data berhasil ditambah');
    }

    public function edit($id)
    {
        $data = Penyakit::findOrFail($id);
        return view('penyakit.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Penyakit::findOrFail($id);

        $request->validate([
            'kode_penyakit' => 'required|unique:penyakit,kode_penyakit,' . $data->id,
            'nama_penyakit' => 'required',
            'deskripsi' => 'required',
            'gejala' => 'nullable',
            'penyebab' => 'nullable',
            'pengobatan' => 'nullable',
            'pencegahan' => 'nullable',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $namaFile);
            $data->gambar = $namaFile;
        }

        $data->kode_penyakit = $request->kode_penyakit;
        $data->nama_penyakit = $request->nama_penyakit;
        $data->deskripsi = $request->deskripsi;
        $data->gejala = $request->gejala;
        $data->penyebab = $request->penyebab;
        $data->pengobatan = $request->pengobatan;
        $data->pencegahan = $request->pencegahan;
        $data->save();

        return redirect('/admin/penyakit')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $data = Penyakit::findOrFail($id);

        if ($data->gambar && file_exists(public_path('images/' . $data->gambar))) {
            unlink(public_path('images/' . $data->gambar));
        }

        $data->delete();

        return redirect('/admin/penyakit')->with('success', 'Data berhasil dihapus');
    }

    public function show($id)
    {
        $data = Penyakit::with('resep.bahan')->findOrFail($id);
        return view('penyakit.detail', compact('data'));
    }
}