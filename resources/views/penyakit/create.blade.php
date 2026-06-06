@extends('layouts.app')

@section('content')

<h2>Tambah Penyakit</h2>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<form action="/admin/penyakit" method="POST" enctype="multipart/form-data">
    @csrf


    {{-- KODE PENYAKIT --}}
    <div class="mb-3">
        <label>Kode Penyakit</label>
        <input 
            type="text" 
            name="kode_penyakit" 
            class="form-control"
            placeholder="Contoh: P001">
    </div>


    {{-- NAMA --}}
    <div class="mb-3">
        <label>Nama Penyakit</label>
        <input 
            type="text" 
            name="nama_penyakit" 
            class="form-control"
            placeholder="Masukkan nama penyakit">
    </div>


    {{-- DESKRIPSI --}}
    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea 
            name="deskripsi" 
            rows="4"
            class="form-control"
            placeholder="Masukkan deskripsi penyakit"></textarea>
    </div>


    {{-- GEJALA --}}
    <div class="mb-3">
        <label>Gejala</label>
        <textarea 
            name="gejala" 
            rows="4"
            class="form-control"
            placeholder="Masukkan gejala penyakit"></textarea>
    </div>


    {{-- PENYEBAB --}}
    <div class="mb-3">
        <label>Penyebab</label>
        <textarea 
            name="penyebab" 
            rows="4"
            class="form-control"
            placeholder="Masukkan penyebab penyakit"></textarea>
    </div>


    {{-- PENGOBATAN --}}
    <div class="mb-3">
        <label>Pengobatan</label>
        <textarea 
            name="pengobatan" 
            rows="4"
            class="form-control"
            placeholder="Masukkan cara pengobatan"></textarea>
    </div>


    {{-- PENCEGAHAN --}}
    <div class="mb-3">
        <label>Pencegahan</label>
        <textarea 
            name="pencegahan" 
            rows="4"
            class="form-control"
            placeholder="Masukkan cara pencegahan"></textarea>
    </div>


    {{-- GAMBAR --}}
    <div class="mb-3">
        <label>Gambar Penyakit</label>
        <input 
            type="file" 
            name="gambar" 
            class="form-control">
    </div>


    <button class="btn btn-success">
        Simpan
    </button>

    <a href="/admin/penyakit" class="btn btn-secondary">
        Kembali
    </a>


</form>

@endsection