@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">Data Alat & Bahan</h3>

        <a href="/admin/bahan/create" class="btn btn-primary">
            + Tambah Data
        </a>
    </div>

    <div class="row">

        {{-- DATA BAHAN --}}
        <div class="col-md-6">
            <div class="card p-4 shadow">

                <h4 class="mb-3">Data Bahan</h4>

                <table class="table table-bordered align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Kode</th>
                            <th>Gambar</th>
                            <th>Nama Bahan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($bahans as $bahan)
                        <tr>
                            <td>
                                <strong>{{ $bahan->kode }}</strong>
                            </td>

                            <td>
                                @if($bahan->gambar)
                                    <img 
                                    src="{{ asset('images/'.$bahan->gambar) }}"
                                    width="70"
                                    height="55"
                                    style="object-fit:cover; border-radius:8px;">
                                @else
                                    -
                                @endif
                            </td>

                            <td>{{ $bahan->nama_bahan }}</td>

                            <td>
                                <a href="/admin/bahan/{{ $bahan->id }}/edit"
                                   class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <form action="/admin/bahan/{{ $bahan->id }}"
                                      method="POST"
                                      style="display:inline">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin hapus data ini?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4">Belum ada data bahan</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>

        {{-- DATA ALAT --}}
        <div class="col-md-6">
            <div class="card p-4 shadow">

                <h4 class="mb-3">Data Alat</h4>

                <table class="table table-bordered align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Kode</th>
                            <th>Gambar</th>
                            <th>Nama Alat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($alats as $alat)
                        <tr>
                            <td>
                                <strong>{{ $alat->kode }}</strong>
                            </td>

                            <td>
                                @if($alat->gambar)
                                    <img 
                                    src="{{ asset('images/'.$alat->gambar) }}"
                                    width="70"
                                    height="55"
                                    style="object-fit:cover; border-radius:8px;">
                                @else
                                    -
                                @endif
                            </td>

                            <td>{{ $alat->nama_bahan }}</td>

                            <td>
                                <a href="/admin/bahan/{{ $alat->id }}/edit"
                                   class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <form action="/admin/bahan/{{ $alat->id }}"
                                      method="POST"
                                      style="display:inline">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin hapus data ini?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4">Belum ada data alat</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>

    </div>

</div>

@endsection