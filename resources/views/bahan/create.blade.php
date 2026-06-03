@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card p-4 shadow">
        <h3>Tambah Bahan</h3>

        <!-- WAJIB tambahin enctype untuk upload gambar -->
        <form action="/admin/bahan" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- NAMA -->
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama_bahan" class="form-control" required>
            </div>

            <!-- TIPE -->
            <div class="mb-3">
                <label>Tipe</label>
                <select name="tipe" class="form-control" required>
                    <option value="">-- Pilih Tipe --</option>
                    <option value="bahan">Bahan</option>
                    <option value="alat">Alat</option>
                </select>
            </div>

            <!-- GAMBAR -->
            <div class="mb-3">
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control">
            </div>

            <!-- BUTTON -->
            <button class="btn btn-success">Simpan</button>
            <a href="/admin/bahan" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>

@endsection