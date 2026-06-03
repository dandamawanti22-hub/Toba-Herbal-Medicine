@extends('layouts.app')

@section('content')

<h2>Edit Penyakit</h2>

<form action="{{ route('penyakit.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nama Penyakit</label>
        <input type="text" name="nama_penyakit" class="form-control" value="{{ $data->nama_penyakit }}">
    </div>

    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control">{{ $data->deskripsi }}</textarea>
    </div>

    <button class="btn btn-primary">Update</button>
    <a href="{{ route('penyakit.index') }}" class="btn btn-secondary">Kembali</a>
</form>

@endsection