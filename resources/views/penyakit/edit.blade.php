@extends('layouts.app')

@section('content')

<h2>Edit Penyakit</h2>


@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<form action="{{ route('penyakit.update', $data->id) }}" 
      method="POST" 
      enctype="multipart/form-data">

    @csrf
    @method('PUT')


    {{-- KODE PENYAKIT --}}
    <div class="mb-3">
        <label>Kode Penyakit</label>
        <input 
            type="text" 
            name="kode_penyakit" 
            class="form-control"
            value="{{ $data->kode_penyakit }}">
    </div>


    {{-- NAMA PENYAKIT --}}
    <div class="mb-3">
        <label>Nama Penyakit</label>
        <input 
            type="text" 
            name="nama_penyakit" 
            class="form-control" 
            value="{{ $data->nama_penyakit }}">
    </div>


    {{-- DESKRIPSI --}}
    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea 
            name="deskripsi" 
            rows="4"
            class="form-control">{{ $data->deskripsi }}</textarea>
    </div>


    {{-- GEJALA --}}
    <div class="mb-3">
        <label>Gejala</label>
        <textarea 
            name="gejala" 
            rows="4"
            class="form-control">{{ $data->gejala }}</textarea>
    </div>


    {{-- PENYEBAB --}}
    <div class="mb-3">
        <label>Penyebab</label>
        <textarea 
            name="penyebab" 
            rows="4"
            class="form-control">{{ $data->penyebab }}</textarea>
    </div>


    {{-- PENGOBATAN --}}
    <div class="mb-3">
        <label>Pengobatan</label>
        <textarea 
            name="pengobatan" 
            rows="4"
            class="form-control">{{ $data->pengobatan }}</textarea>
    </div>


    {{-- PENCEGAHAN --}}
    <div class="mb-3">
        <label>Pencegahan</label>
        <textarea 
            name="pencegahan" 
            rows="4"
            class="form-control">{{ $data->pencegahan }}</textarea>
    </div>


    {{-- GAMBAR LAMA --}}
    <div class="mb-3">
        <label>Gambar Saat Ini</label><br>

        @if($data->gambar)
            <img 
            src="{{ asset('images/'.$data->gambar) }}" 
            width="120">
        @else
            <p>Tidak ada gambar</p>
        @endif
    </div>


    {{-- GANTI GAMBAR --}}
    <div class="mb-3">
        <label>Ganti Gambar</label>
        <input 
            type="file" 
            name="gambar" 
            class="form-control">
    </div>



    <button class="btn btn-primary">
        Update
    </button>


    <a href="/admin/penyakit" 
       class="btn btn-secondary">
       Kembali
    </a>


</form>

@endsection