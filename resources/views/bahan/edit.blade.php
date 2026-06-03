@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card p-4 shadow">
        <h3>Edit Bahan</h3>

        <form action="/admin/bahan/{{ $data->id }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nama Bahan</label>
                <input type="text" name="nama_bahan" class="form-control" value="{{ $data->nama_bahan }}" required>
            </div>

            <button class="btn btn-success">Update</button>
            <a href="/admin/bahan" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>

@endsection