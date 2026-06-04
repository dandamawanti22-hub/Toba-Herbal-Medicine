@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card shadow p-4">
        <h3 class="mb-4">Edit Data Herbal</h3>

        <form action="/admin/herbal/{{ $herbal->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

            <!-- Nama Herbal -->
            <div class="mb-3">
                <label>Nama Herbal</label>
                <input type="text" name="nama_herbal" class="form-control" value="{{ $herbal->nama_herbal }}">
            </div>

            <!-- Nama Latin -->
            <div class="mb-3">
                <label>Nama Latin</label>
                <input type="text" name="nama_latin" class="form-control" value="{{ $herbal->nama_latin }}">
            </div>

            <!-- Khasiat -->
            <div class="mb-3">
                <label>Khasiat</label>
                <textarea name="khasiat" class="form-control">{{ $herbal->khasiat }}</textarea>
            </div>

            <!-- Gambar -->
            <div class="mb-3">
                <label>Gambar</label><br>
                <img src="{{ asset('images/' . $herbal->gambar) }}" width="120"><br><br>
                <input type="file" name="gambar" class="form-control">
            </div>

            <!-- Pilih Penyakit -->
            <div class="mb-3">
                <label>Pilih Penyakit</label>

                <select name="penyakit[]" class="form-control" multiple size="5">
                    @foreach($penyakit as $p)
                        <option value="{{ $p->id }}"
                            {{ $herbal->penyakit->contains($p->id) ? 'selected' : '' }}>
                            {{ $p->nama_penyakit }}
                        </option>
                    @endforeach
                </select>

                <small class="text-muted">
                    Tekan CTRL untuk memilih lebih dari satu
                </small>
            </div>

            <!-- TOMBOL (INI YANG KURANG) -->
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="/herbal" class="btn btn-secondary">Kembali</a>
            </div>

        </form>
    </div>
</div>

@endsection