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

<form action="/penyakit" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label>Nama Penyakit</label>
        <input type="text" name="nama_penyakit" class="form-control">
    </div>

    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label>Gambar</label>
        <input type="file" name="gambar" class="form-control">
    </div>

    <button class="btn btn-success">Simpan</button>
</form>

@endsection