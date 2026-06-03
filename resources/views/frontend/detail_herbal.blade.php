@extends('layouts.guest')

@section('content')

@php
    use Illuminate\Support\Str;
@endphp

<div class="min-h-screen bg-[#fafaf7] py-28 px-6 font-sans text-slate-900">

    <div class="max-w-6xl mx-auto">

        <!-- KEMBALI -->
        <a href="{{ url('/herbal') }}"
           class="inline-flex items-center gap-2 text-slate-500 hover:text-emerald-700 mb-12 transition">
            ←
            <span class="text-xs font-bold uppercase tracking-[0.2em]">
                Kembali ke Herbal
            </span>
        </a>

        <!-- HERO DETAIL HERBAL -->
        <div class="bg-white rounded-[2rem] shadow-xl overflow-hidden border border-slate-100">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 p-8 md:p-12">

                <!-- GAMBAR -->
                <div>
                    <img src="{{ asset('images/'.$herbal->gambar) }}"
                         class="w-full h-[420px] object-cover rounded-[1.5rem]"
                         onerror="this.src='https://via.placeholder.com/600x400'">
                </div>

                <!-- DESKRIPSI -->
                <div class="flex flex-col justify-center">

                    <div class="inline-flex w-fit px-4 py-2 bg-emerald-50 text-emerald-700 rounded-full text-xs font-bold uppercase tracking-widest mb-6">
                        Herbal Alami
                    </div>

                    <h1 class="text-4xl md:text-6xl font-serif font-semibold text-slate-950 mb-6">
                        {{ $herbal->nama_herbal }}
                    </h1>

                    @if(!empty($herbal->nama_latin))
                        <p class="italic text-slate-500 mb-6">
                            {{ $herbal->nama_latin }}
                        </p>
                    @endif

                    <p class="text-lg leading-relaxed text-slate-700 mb-8">
                        {{ Str::limit($herbal->khasiat, 200) }}
                    </p>

                    <!-- BADGE PENYAKIT -->
                    @if($herbal->penyakit && $herbal->penyakit->count() > 0)
                        <div class="flex flex-wrap gap-2 mb-8">
                            @foreach($herbal->penyakit as $p)
                                <span class="px-4 py-2 bg-emerald-100 text-emerald-700 rounded-full text-sm font-bold">
                                    {{ $p->nama_penyakit }}
                                </span>
                            @endforeach
                        </div>
                    @endif

                    <!-- FITUR -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">

                        <div class="bg-emerald-50 rounded-2xl p-5">
                            <div class="text-2xl mb-2">🌿</div>
                            <p class="font-bold text-slate-800">Herbal Alami</p>
                            <p class="text-sm text-slate-500">Bahan tradisional</p>
                        </div>

                        <div class="bg-emerald-50 rounded-2xl p-5">
                            <div class="text-2xl mb-2">✅</div>
                            <p class="font-bold text-slate-800">Mudah Ditemukan</p>
                            <p class="text-sm text-slate-500">Sering digunakan</p>
                        </div>

                        <div class="bg-emerald-50 rounded-2xl p-5">
                            <div class="text-2xl mb-2">🍵</div>
                            <p class="font-bold text-slate-800">Ramuan Sehat</p>
                            <p class="text-sm text-slate-500">Pendamping alami</p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- BAGIAN 01 -->
        <section class="mt-16">

            <div class="flex items-center gap-6 mb-8">
                <span class="text-sm font-bold text-emerald-600 border-b-2 border-emerald-600 pb-1">
                    01
                </span>

                <h2 class="text-sm font-bold uppercase tracking-[0.25em] text-slate-700">
                    Khasiat Herbal
                </h2>

                <div class="h-px bg-slate-200 flex-1"></div>
            </div>

            <div class="bg-white rounded-[2rem] p-8 shadow-md border border-slate-100">
                <p class="text-lg leading-9 text-slate-700">
                    {!! nl2br(e($herbal->khasiat)) !!}
                </p>
            </div>

        </section>

        <!-- BAGIAN 02 -->
        <section class="mt-16">

            <div class="flex items-center gap-6 mb-8">
                <span class="text-sm font-bold text-emerald-600 border-b-2 border-emerald-600 pb-1">
                    02
                </span>

                <h2 class="text-sm font-bold uppercase tracking-[0.25em] text-slate-700">
                    Resep Terkait
                </h2>

                <div class="h-px bg-slate-200 flex-1"></div>
            </div>

            @if(isset($reseps) && $reseps->count() > 0)

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    @foreach($reseps as $resep)

                        <div class="bg-white rounded-[2rem] p-7 shadow-md border border-slate-100 hover:shadow-xl transition">

                            <h3 class="text-xl font-bold text-slate-900 mb-3">
                                {{ $resep->nama_resep }}
                            </h3>

                            <p class="text-slate-500 mb-5">
                                {{ Str::limit($resep->alat_bahan, 100) }}
                            </p>

                            <a href="{{ url('/resep-detail/'.$resep->id) }}"
                               class="text-emerald-700 font-bold text-sm uppercase tracking-widest">
                                Lihat Resep →
                            </a>

                        </div>

                    @endforeach

                </div>

            @else

                <div class="bg-white rounded-[2rem] p-8 text-slate-500 shadow-md border border-slate-100">
                    Belum ada resep terkait untuk herbal ini.
                </div>

            @endif

        </section>

    </div>

</div>

@endsection