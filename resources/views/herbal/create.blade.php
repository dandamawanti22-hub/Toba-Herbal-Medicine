@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card shadow p-4">

        <h3 class="mb-4">Tambah Data Herbal</h3>


        <form action="/admin/herbal" method="POST" enctype="multipart/form-data">
            @csrf


            {{-- KODE HERBAL --}}
            <div class="mb-3">
                <label>Kode Herbal</label>
                <input 
                    type="text" 
                    name="kode_herbal" 
                    class="form-control"
                    placeholder="Contoh: H001"
                    required>
            </div>


            {{-- NAMA HERBAL --}}
            <div class="mb-3">
                <label>Nama Herbal</label>
                <input 
                    type="text" 
                    name="nama_herbal" 
                    class="form-control" 
                    required>
            </div>


            {{-- NAMA LATIN --}}
            <div class="mb-3">
                <label>Nama Latin</label>
                <input 
                    type="text" 
                    name="nama_latin" 
                    class="form-control">
            </div>


            {{-- DESKRIPSI --}}
            <div class="mb-3">
                <label>Deskripsi</label>
                <textarea 
                    name="deskripsi" 
                    class="form-control" 
                    rows="3"></textarea>
            </div>


            {{-- KHASIAT --}}
            <div class="mb-3">
                <label>Khasiat</label>
                <textarea 
                    name="khasiat" 
                    class="form-control" 
                    rows="3"></textarea>
            </div>


            {{-- GAMBAR --}}
            <div class="mb-3">
                <label>Gambar</label>
                <input 
                    type="file" 
                    name="gambar" 
                    class="form-control">
            </div>


            {{-- PENYAKIT --}}
            <div class="mb-3">

                <label>Pilih Penyakit</label>

                <select 
                    name="penyakit[]" 
                    class="form-control" 
                    multiple 
                    size="5">

                    @foreach($penyakit as $p)

                    <option value="{{ $p->id }}">
                        {{ $p->kode_penyakit }} - {{ $p->nama_penyakit }}
                    </option>

                    @endforeach

                </select>

                <small class="text-muted">
                    Tekan CTRL untuk memilih lebih dari satu
                </small>

            </div>



            <button class="btn btn-success">
                Simpan
            </button>


            <a href="/admin/herbal" 
               class="btn btn-secondary">
                Kembali
            </a>


        </form>


    </div>

</div>

@endsection