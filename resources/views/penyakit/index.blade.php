@extends('layouts.app')

@section('content')

<div class="container-fluid mt-4">

    <div class="card p-3">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="mb-0">Data Penyakit</h4>

            <a href="/admin/penyakit/create" class="btn btn-primary">
                + Tambah Penyakit
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered align-middle text-center">

                <thead class="table-dark">
                    <tr>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Gejala</th>
                        <th>Penyebab</th>
                        <th>Pengobatan</th>
                        <th>Pencegahan</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($data as $item)

                    <tr>
                        <td>
                            <strong>{{ $item->kode_penyakit }}</strong>
                        </td>

                        <td>{{ $item->nama_penyakit }}</td>

                        <td style="text-align:left;">
                            {{ Str::limit($item->deskripsi, 80) }}
                        </td>

                        <td style="text-align:left;">
                            {{ Str::limit($item->gejala, 80) }}
                        </td>

                        <td style="text-align:left;">
                            {{ Str::limit($item->penyebab, 80) }}
                        </td>

                        <td style="text-align:left;">
                            {{ Str::limit($item->pengobatan, 80) }}
                        </td>

                        <td style="text-align:left;">
                            {{ Str::limit($item->pencegahan, 80) }}
                        </td>

                        <td>
                            @if($item->gambar)
                                <img 
                                    src="{{ asset('images/' . $item->gambar) }}" 
                                    width="80">
                            @else
                                Tidak ada gambar
                            @endif
                        </td>

                        <td>
                            <a href="/admin/penyakit/{{ $item->id }}/edit"
                               class="btn btn-warning btn-sm mb-1">
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
                        <td colspan="9">Belum ada data</td>
                    </tr>

                    @endforelse
                </tbody>

            </table>
        </div>

    </div>

</div>

@endsection