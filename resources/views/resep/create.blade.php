@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card shadow p-4">
        <h3 class="mb-4">Tambah Resep</h3>

        <form action="/admin/resep" method="POST">
            @csrf

            <div class="mb-3">
                <label>Kode Resep</label>
                <input 
                    type="text" 
                    name="kode_resep" 
                    class="form-control" 
                    placeholder="Contoh: R001"
                    required>
            </div>

            <div class="mb-3">
                <label>Nama Resep</label>
                <input 
                    type="text" 
                    name="nama_resep" 
                    class="form-control" 
                    required>
            </div>

            <div class="mb-3">
                <label>Pilih Herbal</label>

                <select name="herbal[]" class="form-control" multiple size="6" required>
                    @foreach($herbal as $h)
                        <option value="{{ $h->id }}">
                            {{ $h->kode_herbal }} - {{ $h->nama_herbal }}
                        </option>
                    @endforeach
                </select>

                <small class="text-muted">
                    Tekan CTRL untuk memilih lebih dari satu herbal
                </small>
            </div>

            <h5 class="mt-3">Bahan</h5>

            <div class="row">
                @foreach($bahan as $b)
                    @if($b->tipe == 'bahan')
                    <div class="col-md-3 text-center mb-3">
                        <label style="cursor:pointer; width:100%;">

                            <input 
                                type="checkbox" 
                                name="bahan[{{ $b->id }}][id]" 
                                value="{{ $b->id }}">

                            <div class="card-bahan p-2" style="border:1px solid #ddd; border-radius:10px;">
                                <img 
                                src="{{ asset('images/'.$b->gambar) }}"
                                style="width:80px;height:80px;object-fit:cover;">

                                <p class="mt-2">{{ $b->nama_bahan }}</p>

                                <input 
                                    type="text"
                                    name="bahan[{{ $b->id }}][jumlah]"
                                    class="form-control mt-2"
                                    placeholder="Contoh: 2 ruas / 1 gelas">
                            </div>
                        </label>
                    </div>
                    @endif
                @endforeach
            </div>

            <h5 class="mt-4">Alat</h5>

            <div class="row">
                @foreach($bahan as $b)
                    @if($b->tipe == 'alat')
                    <div class="col-md-3 text-center mb-3">
                        <label style="cursor:pointer; width:100%;">

                            <input 
                                type="checkbox" 
                                name="bahan[{{ $b->id }}][id]" 
                                value="{{ $b->id }}">

                            <div class="card-bahan p-2" style="border:1px solid #ddd; border-radius:10px;">
                                <img 
                                src="{{ asset('images/'.$b->gambar) }}"
                                style="width:80px;height:80px;object-fit:cover;">

                                <p class="mt-2">{{ $b->nama_bahan }}</p>

                                <input 
                                    type="text"
                                    name="bahan[{{ $b->id }}][jumlah]"
                                    class="form-control mt-2"
                                    placeholder="Contoh: 1 buah / 1 set">
                            </div>
                        </label>
                    </div>
                    @endif
                @endforeach
            </div>

            <div class="mb-3">
                <label>Cara Pembuatan</label>
                <textarea 
                    name="cara_pembuatan" 
                    class="form-control" 
                    rows="4"></textarea>
            </div>

            <div class="mb-3">
                <label>Cara Penggunaan</label>
                <textarea 
                    name="cara_penggunaan" 
                    class="form-control" 
                    rows="3"></textarea>
            </div>

            <button class="btn btn-success">Simpan</button>
            <a href="/admin/resep" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>

@endsection