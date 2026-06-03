@extends('layouts.guest')

@section('content')

<div class="max-w-7xl mx-auto px-5 py-10">

    <!-- HEADER -->
    <div class="mb-10">

        <h1 class="text-4xl font-bold text-slate-800">
            Jenis Penyakit
        </h1>

        <p class="text-slate-500 mt-2">
            Informasi berbagai penyakit ringan hingga sedang beserta solusi herbal alami.
        </p>

    </div>

    <!-- GRID -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

        @foreach($data as $item)

        <div class="bg-white rounded-[28px] overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 group">

            <!-- IMAGE -->
            <div class="relative h-64 overflow-hidden">

                <img src="{{ asset('images/'.$item->gambar) }}"
                     class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                     onerror="this.src='https://via.placeholder.com/600x400'">

                <!-- OVERLAY -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>

                <!-- TITLE -->
                <div class="absolute bottom-5 left-5 text-white">

                    <h2 class="text-2xl font-bold">
                        {{ $item->nama_penyakit }}
                    </h2>

                </div>

            </div>

            <!-- CONTENT -->
            <div class="p-6">

                <p class="text-slate-600 text-sm leading-relaxed min-h-[90px]">
                    {{ Str::limit($item->deskripsi, 120) }}
                </p>

                <!-- BUTTON -->
                <div class="mt-6">

                    <a href="/penyakit/{{ $item->id }}"
                       class="inline-flex items-center gap-2 bg-green-700 hover:bg-green-800 text-white px-5 py-3 rounded-2xl font-medium transition">

                        Lihat Detail

                        <span>→</span>

                    </a>

                </div>

            </div>

        </div>

        @endforeach

    </div>

</div>

@endsection