<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resep;
use App\Models\Herbal;
use App\Models\Bahan;

class ResepController extends Controller
{
    public function index()
    {
        $data = Resep::with('herbal', 'bahan')->get();
        return view('resep.index', compact('data'));
    }

    public function create()
    {
        $herbal = Herbal::all();
        $bahan = Bahan::all();

        return view('resep.create', compact('herbal', 'bahan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_resep' => 'required|unique:resep,kode_resep',
            'herbal' => 'required|array',
            'nama_resep' => 'required',
            'cara_pembuatan' => 'nullable',
            'cara_penggunaan' => 'nullable',
            'bahan' => 'nullable|array',
        ]);

        $resep = Resep::create([
            'kode_resep' => $request->kode_resep,
            'nama_resep' => $request->nama_resep,
            'cara_pembuatan' => $request->cara_pembuatan,
            'cara_penggunaan' => $request->cara_penggunaan,
        ]);

        $resep->herbal()->attach($request->herbal);

        $dataBahan = [];

        if ($request->bahan) {
            foreach ($request->bahan as $b) {
                if (isset($b['id'])) {
                    $dataBahan[$b['id']] = [
                        'jumlah' => $b['jumlah'] ?? null
                    ];
                }
            }
        }

        $resep->bahan()->attach($dataBahan);

        return redirect('/admin/resep')->with('success', 'Resep berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = Resep::with('bahan', 'herbal')->findOrFail($id);
        $herbal = Herbal::all();
        $bahan = Bahan::all();

        return view('resep.edit', compact('data', 'herbal', 'bahan'));
    }

    public function update(Request $request, $id)
    {
        $resep = Resep::findOrFail($id);

        $request->validate([
            'kode_resep' => 'required|unique:resep,kode_resep,' . $resep->id,
            'herbal' => 'required|array',
            'nama_resep' => 'required',
            'cara_pembuatan' => 'nullable',
            'cara_penggunaan' => 'nullable',
            'bahan' => 'nullable|array',
        ]);

        $resep->update([
            'kode_resep' => $request->kode_resep,
            'nama_resep' => $request->nama_resep,
            'cara_pembuatan' => $request->cara_pembuatan,
            'cara_penggunaan' => $request->cara_penggunaan,
        ]);

        $resep->herbal()->sync($request->herbal);

        $resep->bahan()->detach();

        $dataBahan = [];

        if ($request->bahan) {
            foreach ($request->bahan as $b) {
                if (isset($b['id'])) {
                    $dataBahan[$b['id']] = [
                        'jumlah' => $b['jumlah'] ?? null
                    ];
                }
            }
        }

        $resep->bahan()->attach($dataBahan);

        return redirect('/admin/resep')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $resep = Resep::findOrFail($id);

        $resep->herbal()->detach();
        $resep->bahan()->detach();

        $resep->delete();

        return redirect('/admin/resep')->with('success', 'Data berhasil dihapus');
    }

    public function show($id)
    {
        $data = Resep::with('herbal', 'bahan')->findOrFail($id);
        return view('resep.show', compact('data'));
    }
}