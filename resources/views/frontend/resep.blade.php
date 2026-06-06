@extends('layouts.guest')

@section('content')

<div class="max-w-7xl mx-auto px-5 py-10">

    <div class="mb-10">
        <h1 class="text-4xl font-bold text-slate-800">
            Resep Herbal
        </h1>

        <p class="text-slate-500 mt-2">
            Kumpulan resep herbal tradisional alami untuk membantu menjaga kesehatan tubuh.
        </p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

        @foreach($data as $item)

        @php
            $herbalPertama = $item->herbal->first();
        @endphp

        <div class="bg-white rounded-[28px] overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 group">

            <div class="relative h-64 overflow-hidden">

                <img 
                    src="{{ asset('images/' . ($herbalPertama->gambar ?? 'noimage.png')) }}"
                    class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                    onerror="this.src='https://via.placeholder.com/600x400'">

                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>

                <div class="absolute bottom-5 left-5 text-white">

                    <h2 class="text-2xl font-bold leading-tight">
                        {{ $item->nama_resep }}
                    </h2>

                    <p class="text-sm opacity-90 mt-1">
                        🌿
                        @forelse($item->herbal as $h)
                            {{ $h->nama_herbal }}{{ !$loop->last ? ', ' : '' }}
                        @empty
                            -
                        @endforelse
                    </p>

                </div>

            </div>

            <div class="p-6">

                <div class="mb-5">
                    <h4 class="text-sm font-semibold uppercase tracking-wider text-green-700 mb-2">
                        Herbal Utama
                    </h4>

                    <p class="text-slate-600 text-sm leading-relaxed">
                        @forelse($item->herbal as $h)
                            {{ $h->nama_herbal }}{{ !$loop->last ? ', ' : '' }}
                        @empty
                            Belum ada herbal
                        @endforelse
                    </p>
                </div>

                <a href="/resep-detail/{{ $item->id }}"
                   class="inline-flex items-center gap-2 bg-green-700 hover:bg-green-800 text-white px-5 py-3 rounded-2xl font-medium transition">

                    Lihat Detail

                    <span>→</span>

                </a>

            </div>

        </div>

        @endforeach

    </div>

</div>

@endsection