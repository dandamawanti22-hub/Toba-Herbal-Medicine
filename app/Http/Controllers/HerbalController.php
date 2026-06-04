<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Herbal;
use App\Models\Penyakit;
use App\Models\Resep;

class HerbalController extends Controller
{
    // =========================
    // TAMPIL DATA ADMIN HERBAL
    // =========================
    public function index(Request $request)
    {
        $penyakit_id = $request->penyakit;

        if ($penyakit_id) {
            $data = Herbal::join('herbal_penyakit', 'herbal.id', '=', 'herbal_penyakit.herbal_id')
                ->where('herbal_penyakit.penyakit_id', $penyakit_id)
                ->select('herbal.*')
                ->get();
        } else {
            $data = Herbal::all();
        }

        return view('herbal.index', compact('data'));
    }

    // =========================
    // FORM TAMBAH HERBAL
    // =========================
    public function create()
    {
        $penyakit = Penyakit::all();
        return view('herbal.create', compact('penyakit'));
    }

    // =========================
    // SIMPAN DATA HERBAL
    // =========================
    public function store(Request $request)
    {
        $request->validate([
            'nama_herbal' => 'required',
            'nama_latin' => 'nullable',
            'khasiat' => 'nullable',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'penyakit' => 'nullable|array',
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $namaFile);
        } else {
            $namaFile = null;
        }

        $herbal = Herbal::create([
            'nama_herbal' => $request->nama_herbal,
            'nama_latin' => $request->nama_latin,
            'khasiat' => $request->khasiat,
            'gambar' => $namaFile,
        ]);

        if ($request->penyakit) {
            $herbal->penyakit()->attach($request->penyakit);
        }

        return redirect('/admin/herbal')->with('success', 'Data herbal berhasil ditambah');
    }

    // =========================
    // FORM EDIT HERBAL
    // =========================
    public function edit($id)
    {
        $herbal = Herbal::with('penyakit')->findOrFail($id);
        $penyakit = Penyakit::all();

        return view('herbal.edit', compact('herbal', 'penyakit'));
    }

    // =========================
    // UPDATE DATA HERBAL
    // =========================
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_herbal' => 'required',
            'nama_latin' => 'nullable',
            'khasiat' => 'nullable',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'penyakit' => 'nullable|array',
        ]);

        $herbal = Herbal::findOrFail($id);

        if ($request->hasFile('gambar')) {
            if ($herbal->gambar && file_exists(public_path('images/' . $herbal->gambar))) {
                unlink(public_path('images/' . $herbal->gambar));
            }

            $file = $request->file('gambar');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $namaFile);

            $herbal->gambar = $namaFile;
        }

        $herbal->nama_herbal = $request->nama_herbal;
        $herbal->nama_latin = $request->nama_latin;
        $herbal->khasiat = $request->khasiat;
        $herbal->save();

        $herbal->penyakit()->sync($request->penyakit ?? []);

        return redirect('/admin/herbal')->with('success', 'Data herbal berhasil diupdate');
    }

    // =========================
    // HAPUS DATA HERBAL
    // =========================
    public function destroy($id)
    {
        $herbal = Herbal::findOrFail($id);

        if ($herbal->gambar && file_exists(public_path('images/' . $herbal->gambar))) {
            unlink(public_path('images/' . $herbal->gambar));
        }

        $herbal->penyakit()->detach();

        $herbal->delete();

        return redirect('/admin/herbal')->with('success', 'Data herbal berhasil dihapus');
    }

    // =========================
    // DETAIL HERBAL USER
    // =========================
    public function show($id)
    {
        $herbal = Herbal::with('penyakit')->findOrFail($id);

        $reseps = Resep::where('herbal_id', $id)->get();

        return view('frontend.detail_herbal', compact('herbal', 'reseps'));
    }
}