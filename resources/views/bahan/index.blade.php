@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card p-4 shadow">
        <h3>Data Bahan</h3>

        <a href="/admin/bahan/create" class="btn btn-success mb-3">+ Tambah</a>

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama Bahan</th>
                <th>Aksi</th>
            </tr>

            @foreach($data as $d)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $d->nama_bahan }}</td>
                <td>
                    <a href="/admin/bahan/{{ $d->id }}/edit" class="btn btn-warning btn-sm">Edit</a>

                    <form action="/admin/bahan/{{ $d->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </table>
    </div>
</div>

@endsection