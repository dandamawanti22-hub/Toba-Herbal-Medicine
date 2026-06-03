@extends('layouts.guest')

@section('content')

<div style="max-width:1000px; margin:40px auto; padding:20px;">

    <div style="
        background:white;
        padding:30px;
        border-radius:14px;
        box-shadow:0 10px 30px rgba(0,0,0,0.08);
    ">

        <h2>{{ $data->nama_resep }}</h2>

        <hr>

        <!-- BAHAN -->
        <h4>🌿 Bahan</h4>

        <div style="display:flex; flex-wrap:wrap; gap:15px;">
            @foreach($data->bahan as $b)
                @if($b->tipe == 'bahan')
                <div style="text-align:center; width:120px;">
                    <img src="{{ asset('storage/'.$b->gambar) }}"
                         style="width:80px; height:80px; object-fit:cover; border-radius:10px;">
                    
                    <p>{{ $b->nama_bahan }}</p>

                    <small style="color:#555;">
                        {{ $b->pivot->jumlah ?? '-' }}
                    </small>
                </div>
                @endif
            @endforeach
        </div>

        <hr>

        <!-- ALAT -->
        <h4>🍳 Alat</h4>

        <div style="display:flex; flex-wrap:wrap; gap:15px;">
            @foreach($data->bahan as $b)
                @if($b->tipe == 'alat')
                <div style="text-align:center; width:120px;">
                    <img src="{{ asset('storage/'.$b->gambar) }}"
                         style="width:80px; height:80px; object-fit:cover; border-radius:10px;">
                    
                    <p>{{ $b->nama_bahan }}</p>
                </div>
                @endif
            @endforeach
        </div>

        <hr>

        <a href="/resep-detail/{{ $data->id }}"
           style="background:#2e7d32; color:white; padding:10px 15px; border-radius:6px; text-decoration:none;">
           ➡ Lihat Cara Membuat
        </a>

    </div>

</div>

@endsection