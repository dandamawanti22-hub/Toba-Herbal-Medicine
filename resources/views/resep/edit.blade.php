@extends('layouts.app')

@section('content')

<div class="card p-4 shadow-sm">

    <h3 class="mb-4">Edit Resep</h3>

    <form action="/resep/{{ $data->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Resep</label>
            <input type="text" name="nama_resep" class="form-control"
                   value="{{ $data->nama_resep }}">
        </div>

        <div class="mb-3">
            <label>Pilih Herbal</label>
            <select name="herbal_id" class="form-control">
                @foreach($herbal as $h)
                    <option value="{{ $h->id }}"
                        {{ $data->herbal_id == $h->id ? 'selected' : '' }}>
                        {{ $h->nama_herbal }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Alat & Bahan</label>
            <textarea name="alat_bahan" class="form-control">{{ $data->alat_bahan }}</textarea>
        </div>

        <div class="mb-3">
            <label>Cara Pembuatan</label>
            <textarea name="cara_pembuatan" class="form-control">{{ $data->cara_pembuatan }}</textarea>
        </div>

        <div class="mb-3">
            <label>Cara Penggunaan</label>
            <textarea name="cara_penggunaan" class="form-control">{{ $data->cara_penggunaan }}</textarea>
        </div>

        <button class="btn btn-success">Update</button>
        <a href="/resep" class="btn btn-secondary">Kembali</a>

    </form>

</div>

@endsection