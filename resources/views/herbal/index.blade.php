@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <div class="card shadow p-4">
        <div class="d-flex justify-content-between mb-3">
            <h3>Data Herbal</h3>
            <a href="/admin/herbal/create" class="btn btn-primary">+ Tambah Herbal</a>
        </div>

        <table class="table table-bordered table-striped align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>Kode</th>
                    <th>Gambar</th>
                    <th>Nama Herbal</th>
                    <th>Nama Latin</th>
                    <th>Penyakit</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach($data as $item)
                <tr>
                    <td>
                        <strong>{{ $item->kode_herbal }}</strong>
                    </td>

                    <td>
                        @if($item->gambar)
                            <img src="{{ asset('images/'.$item->gambar) }}" width="80">
                        @else
                            -
                        @endif
                    </td>

                    <td>{{ $item->nama_herbal }}</td>

                    <td>{{ $item->nama_latin }}</td>

                    <td>
                        @foreach($item->penyakit as $p)
                            <span class="badge bg-success">
                                {{ $p->nama_penyakit }}
                            </span>
                        @endforeach
                    </td>

                    <td>
                        <a href="/admin/herbal/{{ $item->id }}/edit" 
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="/admin/herbal/{{ $item->id }}" 
                              method="POST" 
                              style="display:inline;">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin hapus?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>

@endsection