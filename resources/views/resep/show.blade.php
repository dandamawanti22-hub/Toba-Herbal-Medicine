@extends('layouts.app')

@section('content')

<div class="card p-4 shadow-sm">

    <h3 class="mb-4">Detail Resep</h3>


    {{-- KODE RESEP --}}
    <div class="mb-3">
        <strong>Kode Resep:</strong><br>
        {{ $data->kode_resep }}
    </div>


    {{-- NAMA --}}
    <div class="mb-3">
        <strong>Nama Resep:</strong><br>
        {{ $data->nama_resep }}
    </div>


{{-- HERBAL --}}
<div class="mb-3">
    <strong>Herbal:</strong><br>

    @forelse($data->herbal as $h)
        <span class="badge bg-success mb-1">
            {{ $h->kode_herbal }} - {{ $h->nama_herbal }}
        </span>
        <br>
    @empty
        -
    @endforelse
</div>



    {{-- BAHAN --}}
    <div class="mb-3">

        <strong>Bahan:</strong>

        <ul>
            @foreach($data->bahan as $b)

                @if($b->tipe == 'bahan')

                <li>
                    {{ $b->nama_bahan }}
                    -
                    {{ $b->pivot->jumlah }}
                </li>

                @endif

            @endforeach
        </ul>

    </div>



    {{-- ALAT --}}
    <div class="mb-3">

        <strong>Alat:</strong>

        <ul>
            @foreach($data->bahan as $b)

                @if($b->tipe == 'alat')

                <li>
                    {{ $b->nama_bahan }}
                    -
                    {{ $b->pivot->jumlah }}
                </li>

                @endif

            @endforeach
        </ul>

    </div>




    {{-- CARA PEMBUATAN --}}
    <div class="mb-3">

        <strong>Cara Pembuatan:</strong><br>

        {!! nl2br(e($data->cara_pembuatan)) !!}

    </div>



    {{-- CARA PENGGUNAAN --}}
    <div class="mb-3">

        <strong>Cara Penggunaan:</strong><br>

        {!! nl2br(e($data->cara_penggunaan)) !!}

    </div>




    <a href="/admin/resep" class="btn btn-secondary">
        Kembali
    </a>


</div>

@endsection