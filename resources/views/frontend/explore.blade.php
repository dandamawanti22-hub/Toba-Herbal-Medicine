@extends('layouts.guest')

@section('content')

<div class="min-h-screen bg-[#f8f8f5] py-24 px-6">

    <div class="max-w-6xl mx-auto">

        <!-- HEADER -->
        <div class="bg-white rounded-[32px] shadow-lg p-10 mb-16 border border-slate-100">

            <h1 class="text-4xl font-bold text-slate-900 mb-4">
                Hasil Pencarian
            </h1>

            <p class="text-lg text-slate-600">
                Kata kunci:
                <span class="font-bold text-emerald-600">
                    "{{ request('search') }}"
                </span>
            </p>

        </div>

        <!-- ================= PENYAKIT ================= -->
        <section class="mb-20">

            <div class="flex items-center gap-4 mb-10">

                <div class="w-12 h-12 rounded-2xl bg-emerald-100 flex items-center justify-center text-2xl">
                    🩺
                </div>

                <div>
                    <h2 class="text-3xl font-bold text-slate-900">
                        Penyakit
                    </h2>

                    <p class="text-slate-500">
                        Hasil pencarian kategori penyakit
                    </p>
                </div>

            </div>

            @if($penyakit->count())

            <div class="grid md:grid-cols-2 gap-10">

                @foreach($penyakit as $item)

                <div class="bg-white rounded-[32px] overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 group border border-slate-100">

                    <!-- IMAGE -->
                    <div class="relative h-72 overflow-hidden">

                        <img src="{{ asset('images/'.$item->gambar) }}"
                             class="w-full h-full object-cover group-hover:scale-110 transition duration-700"
                             onerror="this.src='https://via.placeholder.com/800x500'">

                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>

                        <!-- TITLE -->
                        <div class="absolute bottom-6 left-6 text-white">

                            <h3 class="text-3xl font-bold mb-2">
                                {{ $item->nama_penyakit }}
                            </h3>

                        </div>

                    </div>

                    <!-- CONTENT -->
                    <div class="p-8">

                        <p class="text-slate-600 leading-relaxed mb-8">
                            {{ Str::limit($item->deskripsi, 140) }}
                        </p>

                        <a href="/penyakit/{{ $item->id }}"
                           class="inline-flex items-center gap-3 text-emerald-700 font-bold hover:gap-5 transition-all">

                            Lihat Detail

                            <span>→</span>

                        </a>

                    </div>

                </div>

                @endforeach

            </div>

            @else

            <div class="bg-white rounded-3xl p-10 text-center shadow">

                <p class="text-slate-500 text-lg">
                    Penyakit tidak ditemukan.
                </p>

            </div>

            @endif

        </section>

        <!-- ================= HERBAL ================= -->
        <section>

            <div class="flex items-center gap-4 mb-10">

                <div class="w-12 h-12 rounded-2xl bg-emerald-100 flex items-center justify-center text-2xl">
                    🌿
                </div>

                <div>
                    <h2 class="text-3xl font-bold text-slate-900">
                        Herbal
                    </h2>

                    <p class="text-slate-500">
                        Hasil pencarian tanaman herbal
                    </p>
                </div>

            </div>

            @if($herbal->count())

            <div class="grid md:grid-cols-2 gap-10">

                @foreach($herbal as $item)

                <div class="bg-white rounded-[32px] overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 group border border-slate-100">

                    <!-- IMAGE -->
                    <div class="relative h-72 overflow-hidden">

                        <img src="{{ asset('images/'.$item->gambar) }}"
                             class="w-full h-full object-cover group-hover:scale-110 transition duration-700"
                             onerror="this.src='https://via.placeholder.com/800x500'">

                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>

                        <!-- TITLE -->
                        <div class="absolute bottom-6 left-6 text-white">

                            <h3 class="text-3xl font-bold mb-2">
                                {{ $item->nama_herbal }}
                            </h3>

                        </div>

                    </div>

                    <!-- CONTENT -->
                    <div class="p-8">

                        <p class="text-slate-600 leading-relaxed mb-8">
                            {{ Str::limit($item->khasiat, 140) }}
                        </p>

                        <a href="/herbal/{{ $item->id }}"
                           class="inline-flex items-center gap-3 text-emerald-700 font-bold hover:gap-5 transition-all">

                            Lihat Detail

                            <span>→</span>

                        </a>

                    </div>

                </div>

                @endforeach

            </div>

            @else

            <div class="bg-white rounded-3xl p-10 text-center shadow">

                <p class="text-slate-500 text-lg">
                    Herbal tidak ditemukan.
                </p>

            </div>

            @endif

        </section>

    </div>

</div>

@endsection