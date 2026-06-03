@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card shadow p-4">
        <h3 class="mb-4">Tambah Resep</h3>

        <form action="/resep" method="POST">
            @csrf

            <!-- NAMA RESEP -->
            <div class="mb-3">
                <label>Nama Resep</label>
                <input type="text" name="nama_resep" class="form-control" required>
            </div>

            <!-- HERBAL -->
            <div class="mb-3">
                <label>Pilih Herbal</label>
                <select name="herbal_id" class="form-control" required>
                    <option value="">-- Pilih Herbal --</option>
                    @foreach($herbal as $h)
                        <option value="{{ $h->id }}">
                            {{ $h->nama_herbal }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- 🧪 BAHAN -->
            <h5 class="mt-3">Bahan</h5>
            <div class="row">
            @foreach($bahan as $b)
                @if($b->tipe == 'bahan')
                <div class="col-md-3 text-center mb-3">
                    <label style="cursor:pointer; width:100%;">
                        
                        <input type="checkbox" name="bahan_id[]" value="{{ $b->id }}" class="check-bahan">

                        <div class="card-bahan p-2" style="
                            border:1px solid #ddd;
                            border-radius:10px;
                            transition:0.3s;
                        ">

                            <img src="{{ asset('storage/'.$b->gambar) }}" 
                                style="width:80px; height:80px; object-fit:cover;">

                            <p class="mt-2">{{ $b->nama_bahan }}</p>

                            <!-- INPUT JUMLAH -->
                            <input type="text" 
                                name="jumlah[{{ $b->id }}]" 
                                class="form-control mt-2"
                                placeholder="Contoh: 2 ruas / 1 gelas">

                        </div>
                    </label>
                </div>
                @endif
            @endforeach
            </div>


            <!-- 🍳 ALAT -->
            <h5 class="mt-4">Alat</h5>
            <div class="row">
            @foreach($bahan as $b)
                @if($b->tipe == 'alat')
                <div class="col-md-3 text-center mb-3">
                    <label style="cursor:pointer; width:100%;">
                        
                        <input type="checkbox" name="bahan_id[]" value="{{ $b->id }}" class="check-bahan">

                        <div class="card-bahan p-2" style="
                            border:1px solid #ddd;
                            border-radius:10px;
                            transition:0.3s;
                        ">

                            <img src="{{ asset('storage/'.$b->gambar) }}" 
                                style="width:80px; height:80px; object-fit:cover;">

                            <p class="mt-2">{{ $b->nama_bahan }}</p>

                            <!-- INPUT JUMLAH -->
                            <input type="text" 
                                name="jumlah[{{ $b->id }}]" 
                                class="form-control mt-2"
                                placeholder="Contoh: 1 buah / 1 set">

                        </div>
                    </label>
                </div>
                @endif
            @endforeach
            </div>

            <!-- CARA PEMBUATAN -->
            <div class="mb-3">
                <label>Cara Pembuatan</label>
                <textarea name="cara_pembuatan" class="form-control" rows="4"></textarea>
            </div>

            <!-- CARA PENGGUNAAN -->
            <div class="mb-3">
                <label>Cara Penggunaan</label>
                <textarea name="cara_penggunaan" class="form-control" rows="3"></textarea>
            </div>

            <!-- BUTTON -->
            <button class="btn btn-success">Simpan</button>
            <a href="/resep" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>

@endsection