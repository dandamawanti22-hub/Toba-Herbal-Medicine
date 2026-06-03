@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="card">

        <!-- HEADER -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="mb-0">Data Penyakit</h4>

            <a href="/admin/penyakit/create" class="btn btn-primary">
                + Tambah Penyakit
            </a>
        </div>

        <!-- TABLE -->
        <div class="table-responsive">
            <table class="table table-bordered align-middle text-center">
                
                <thead class="table-dark">
                    <tr>
                        <th width="5%">No</th>
                        <th width="15%">Nama</th>
                        <th>Deskripsi</th>
                        <th width="15%">Gambar</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $item->nama_penyakit }}</td>

                        <td style="text-align:left;">
                            {{ $item->deskripsi }}
                        </td>

                        <td>
                            @if($item->gambar)
                                <img src="{{ asset('images/' . $item->gambar) }}">
                            @endif
                        </td>

                        <td>
                            <a href="/admin/penyakit/{{ $item->id }}/edit"
                               class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form action="/admin/penyakit/{{ $item->id }}"
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
                    @empty
                    <tr>
                        <td colspan="5">Belum ada data</td>
                    </tr>
                    @endforelse
                </tbody>

            </table>
        </div>

    </div>

</div>

@endsection