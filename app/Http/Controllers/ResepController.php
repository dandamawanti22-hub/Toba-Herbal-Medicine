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
        $bahan = Bahan::all(); // ✅ ambil semua bahan

        return view('resep.create', compact('herbal', 'bahan'));
    }

    public function store(Request $request)
    {
        $resep = Resep::create([
            'herbal_id' => $request->herbal_id,
            'nama_resep' => $request->nama_resep,
            'cara_pembuatan' => $request->cara_pembuatan,
            'cara_penggunaan' => $request->cara_penggunaan,
        ]);

        // ✅ SIMPAN BAHAN + JUMLAH (VERSI BARU)
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
        $data = Resep::with('bahan')->findOrFail($id);
        $herbal = Herbal::all();
        $bahan = Bahan::all();

        return view('resep.edit', compact('data', 'herbal', 'bahan'));
    }

    public function update(Request $request, $id)
    {
        $resep = Resep::findOrFail($id);

        $resep->update([
            'herbal_id' => $request->herbal_id,
            'nama_resep' => $request->nama_resep,
            'cara_pembuatan' => $request->cara_pembuatan,
            'cara_penggunaan' => $request->cara_penggunaan,
        ]);

        // 🔥 reset relasi
        $resep->bahan()->detach();

        // 🔥 simpan ulang
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
        $resep->delete();

        return redirect('/admin/resep')->with('success', 'Data berhasil dihapus');
    }

    public function show($id)
    {
        $data = Resep::with('herbal', 'bahan')->findOrFail($id);
        return view('resep.show', compact('data'));
    }
}