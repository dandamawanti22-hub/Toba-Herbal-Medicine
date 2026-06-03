@extends('layouts.guest')

@section('content')

@php
    use Illuminate\Support\Str;
@endphp

<div class="max-w-7xl mx-auto px-5 py-10">

    <!-- TITLE -->
    <div class="mb-10">
        <h1 class="text-4xl font-bold text-slate-800">
            Tanaman Herbal
        </h1>

        <p class="text-slate-500 mt-2">
            Jelajahi berbagai tanaman herbal tradisional untuk kesehatan alami.
        </p>
    </div>

    <!-- GRID -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

        @foreach($data as $item)

        <div class="bg-white rounded-[28px] overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 group">

            <!-- IMAGE -->
            <div class="relative overflow-hidden h-64">

                <img src="{{ asset('images/'.$item->gambar) }}"
                     class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                     onerror="this.src='https://via.placeholder.com/600x400'">

                <!-- OVERLAY -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>

                <!-- TITLE -->
                <div class="absolute bottom-5 left-5 text-white">

                    <h2 class="text-2xl font-bold">
                        {{ $item->nama_herbal }}
                    </h2>

                    <p class="text-sm opacity-90 italic">
                        {{ $item->nama_latin }}
                    </p>

                </div>

            </div>

            <!-- CONTENT -->
            <div class="p-6">

                <p class="text-slate-600 leading-relaxed text-sm min-h-[70px]">
                    {{ Str::limit($item->khasiat, 120) }}
                </p>

                <!-- BUTTON -->
                <div class="mt-6">

                    <a href="/herbal/{{ $item->id }}"
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
