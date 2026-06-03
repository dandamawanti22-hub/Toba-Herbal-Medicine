@extends('layouts.app')

@section('content')

<div class="card p-4 shadow-sm">

    <h3 class="mb-3">Detail Resep</h3>

    <div class="mb-3">
        <strong>Nama Resep:</strong><br>
        {{ $data->nama_resep }}
    </div>

    <div class="mb-3">
        <strong>Herbal:</strong><br>
        {{ $data->herbal->nama_herbal ?? '-' }}
    </div>

    <div class="mb-3">
        <strong>Alat & Bahan:</strong><br>
        {{ $data->alat_bahan }}
    </div>

    <div class="mb-3">
        <strong>Cara Pembuatan:</strong><br>
        {!! nl2br(e($data->cara_pembuatan)) !!}
    </div>

    <div class="mb-3">
        <strong>Cara Penggunaan:</strong><br>
        {{ $data->cara_penggunaan }}
    </div>

    <a href="/resep" class="btn btn-secondary">Kembali</a>

</div>

@endsection