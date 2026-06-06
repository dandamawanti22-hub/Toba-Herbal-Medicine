@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card shadow p-4">
        <h3 class="mb-4">Edit Data Herbal</h3>

        <form action="/admin/herbal/{{ $herbal->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Kode Herbal</label>
                <input 
                    type="text" 
                    name="kode_herbal" 
                    class="form-control" 
                    value="{{ $herbal->kode_herbal }}">
            </div>

            <div class="mb-3">
                <label>Nama Herbal</label>
                <input 
                    type="text" 
                    name="nama_herbal" 
                    class="form-control" 
                    value="{{ $herbal->nama_herbal }}">
            </div>

            <div class="mb-3">
                <label>Nama Latin</label>
                <input 
                    type="text" 
                    name="nama_latin" 
                    class="form-control" 
                    value="{{ $herbal->nama_latin }}">
            </div>

            <div class="mb-3">
                <label>Khasiat</label>
                <textarea 
                    name="khasiat" 
                    class="form-control" 
                    rows="4">{{ $herbal->khasiat }}</textarea>
            </div>

            <div class="mb-3">
                <label>Gambar</label><br>

                @if($herbal->gambar)
                    <img src="{{ asset('images/' . $herbal->gambar) }}" width="120"><br><br>
                @else
                    <p>Tidak ada gambar</p>
                @endif

                <input 
                    type="file" 
                    name="gambar" 
                    class="form-control">
            </div>

            <div class="mb-3">
                <label>Pilih Penyakit</label>

                <select name="penyakit[]" class="form-control" multiple size="5">
                    @foreach($penyakit as $p)
                        <option value="{{ $p->id }}"
                            {{ $herbal->penyakit->contains($p->id) ? 'selected' : '' }}>
                            {{ $p->kode_penyakit }} - {{ $p->nama_penyakit }}
                        </option>
                    @endforeach
                </select>

                <small class="text-muted">
                    Tekan CTRL untuk memilih lebih dari satu
                </small>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">
                    Update
                </button>

                <a href="/admin/herbal" class="btn btn-secondary">
                    Kembali
                </a>
            </div>

        </form>
    </div>
</div>

@endsection