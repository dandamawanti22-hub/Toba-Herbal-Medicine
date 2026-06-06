@extends('layouts.app')

@section('content')

<div class="card p-4 shadow-sm">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Data Resep</h4>

        <a href="/admin/resep/create" class="btn btn-primary">
            + Tambah Resep
        </a>
    </div>


    {{-- FILTER --}}
    <div class="d-flex justify-content-between mb-3">

        <div>
            Tampilkan
            <select class="form-select d-inline-block" style="width:80px;">
                <option>10</option>
                <option>25</option>
            </select>
        </div>


        <div class="d-flex">
            <input 
                type="text" 
                class="form-control me-2" 
                placeholder="Cari resep...">

            <button class="btn btn-outline-secondary">
                🔍
            </button>
        </div>

    </div>


    {{-- TABLE --}}
    <table class="table table-bordered table-hover text-center align-middle">

        <thead class="table-dark">
            <tr>
                <th>Kode</th>
                <th>Nama Resep</th>
                <th>Herbal</th>
                <th width="220">Aksi</th>
            </tr>
        </thead>


        <tbody>

            @forelse($data as $r)

            <tr>

                {{-- KODE RESEP --}}
                <td>
                    <strong>
                        {{ $r->kode_resep }}
                    </strong>
                </td>


                {{-- NAMA --}}
                <td class="text-start">
                    {{ $r->nama_resep }}
                </td>


                {{-- HERBAL --}}
                <td>
                    @forelse($r->herbal as $h)
                        <span class="badge bg-success mb-1">
                            {{ $h->kode_herbal }} - {{ $h->nama_herbal }}
                        </span>
                        <br>
                    @empty
                        -
                    @endforelse
                </td>

                {{-- AKSI --}}
                <td>

                    <a 
                    href="/admin/resep/{{ $r->id }}" 
                    class="btn btn-info btn-sm me-1">
                        Detail
                    </a>


                    <a 
                    href="/admin/resep/{{ $r->id }}/edit" 
                    class="btn btn-warning btn-sm me-1">
                        Edit
                    </a>


                    <form 
                    action="/admin/resep/{{ $r->id }}" 
                    method="POST" 
                    style="display:inline;">

                        @csrf
                        @method('DELETE')


                        <button 
                        class="btn btn-danger btn-sm"
                        onclick="return confirm('Yakin hapus data ini?')">
                            Hapus
                        </button>

                    </form>

                </td>


            </tr>


            @empty


            <tr>
                <td colspan="4">
                    Belum ada data resep
                </td>
            </tr>


            @endforelse

        </tbody>

    </table>


</div>

@endsection