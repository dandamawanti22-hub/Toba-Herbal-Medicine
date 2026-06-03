@extends('layouts.guest')

@section('content')
<div class="min-h-screen bg-[#FCFBF8] py-24 px-6 font-sans text-gray-900">
    <div class="max-w-4xl mx-auto">
        
        <!-- Tombol Kembali -->
       <a href="{{ url('/') }}" class="inline-flex items-center gap-4 text-gray-950 mb-16 group">
            <div class="w-10 h-10 rounded-full border border-gray-200 flex items-center justify-center group-hover:bg-gray-950 group-hover:text-white transition-all duration-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
            </div>
            <span class="text-[10px] font-black uppercase tracking-[0.4em] opacity-60">kembali</span>
        </a>

        <!-- Header: Judul & Media -->
        <div class="grid lg:grid-cols-2 gap-16 items-start mb-24">
            <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl aspect-[4/5] bg-white group">
                <img src="{{ asset('images/'.$penyakit->gambar) }}" 
                     class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" 
                     alt="{{ $penyakit->nama_penyakit }}"
                     onerror="this.src='https://via.placeholder.com/600x800'">
                <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent"></div>
            </div>
            <div class="pt-4">
                <span class="text-[10px] font-black text-green-600 uppercase tracking-[0.5em] mb-6 block">Diagnosa Tradisional</span>
                <h1 class="text-6xl md:text-8xl font-serif font-medium leading-none tracking-tight mb-10">
                    {{ $penyakit->nama_penyakit }}
                </h1>
                <p class="text-xl text-gray-900/50 mb-12 leading-relaxed font-light italic">
                    "{{ $penyakit->deskripsi }}"
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#resep" class="px-10 py-5 bg-gray-950 text-white text-[10px] font-black uppercase tracking-[0.3em] rounded-2xl hover:bg-gray-800 transition-all shadow-xl active:scale-95">
                        Lihat Ramuan
                    </a>
                </div>
            </div>
        </div>

        <!-- Section Informasi Vertikal (Tanpa Warna Blok) -->
        <div class="flex flex-col gap-12 mb-24 border-t border-gray-100 pt-16">
            
            <!-- 1. Gejala -->
            <div class="group flex flex-col md:flex-row gap-8 md:gap-16 pb-12 border-b border-gray-100 last:border-0">
                <div class="md:w-1 tracking-tighter shrink-0 flex items-center md:items-start pt-1">
                    <div class="w-12 h-12 rounded-full border border-gray-200 flex items-center justify-center text-gray-300 group-hover:bg-gray-950 group-hover:text-white group-hover:border-gray-950 transition-all duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.48 12H2"/></svg>
                    </div>
                </div>
                <div class="flex-1">
                    <h4 class="text-[10px] font-black uppercase tracking-[0.5em] text-gray-400 mb-4 group-hover:text-gray-950 transition-colors">Gejala Klinis</h4>
                    <div class="text-xl text-gray-950/80 font-light leading-relaxed max-w-3xl">
                        {!! nl2br(e($penyakit->gejala)) !!}
                    </div>
                </div>
            </div>

            <!-- 2. Penyebab -->
            <div class="group flex flex-col md:flex-row gap-8 md:gap-16 pb-12 border-b border-gray-100 last:border-0">
                <div class="md:w-1 tracking-tighter shrink-0 flex items-center md:items-start pt-1">
                    <div class="w-12 h-12 rounded-full border border-gray-200 flex items-center justify-center text-gray-300 group-hover:bg-gray-950 group-hover:text-white group-hover:border-gray-950 transition-all duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
                    </div>
                </div>
                <div class="flex-1">
                    <h4 class="text-[10px] font-black uppercase tracking-[0.5em] text-gray-400 mb-4 group-hover:text-gray-950 transition-colors">Akar Penyebab</h4>
                    <div class="text-xl text-gray-950/80 font-light leading-relaxed max-w-3xl">
                        {!! nl2br(e($penyakit->penyebab)) !!}
                    </div>
                </div>
            </div>

            <!-- 3. Pengobatan -->
            <div class="group flex flex-col md:flex-row gap-8 md:gap-16 pb-12 border-b border-gray-100 last:border-0">
                <div class="md:w-1 tracking-tighter shrink-0 flex items-center md:items-start pt-1">
                    <div class="w-12 h-12 rounded-full border border-gray-200 flex items-center justify-center text-gray-300 group-hover:bg-gray-950 group-hover:text-white group-hover:border-gray-950 transition-all duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>
                    </div>
                </div>
                <div class="flex-1">
                    <h4 class="text-[10px] font-black uppercase tracking-[0.5em] text-gray-400 mb-4 group-hover:text-gray-950 transition-colors">Prosedur Pemulihan</h4>
                    <div class="text-xl text-gray-950/80 font-light leading-relaxed max-w-3xl">
                        {!! nl2br(e($penyakit->pengobatan)) !!}
                    </div>
                </div>
            </div>

            <!-- 4. Pencegahan -->
            <div class="group flex flex-col md:flex-row gap-8 md:gap-16 pb-12 border-b border-gray-100 last:border-0">
                <div class="md:w-1 tracking-tighter shrink-0 flex items-center md:items-start pt-1">
                    <div class="w-12 h-12 rounded-full border border-gray-200 flex items-center justify-center text-gray-300 group-hover:bg-gray-950 group-hover:text-white group-hover:border-gray-950 transition-all duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
                    </div>
                </div>
                <div class="flex-1">
                    <h4 class="text-[10px] font-black uppercase tracking-[0.5em] text-gray-400 mb-4 group-hover:text-gray-950 transition-colors">Proteksi Berkelanjutan</h4>
                    <div class="text-xl text-gray-950/80 font-light leading-relaxed max-w-3xl">
                        {!! nl2br(e($penyakit->pencegahan)) !!}
                    </div>
                </div>
            </div>
        </div>

        <!-- Resep Herbal (Elegant White Card) -->
        @if(isset($reseps) && $reseps->count() > 0)
        <div id="resep" class="bg-white rounded-[2.5rem] p-12 shadow-2xl shadow-gray-200/40 border border-gray-100 mb-20 text-center md:text-left">
            <div class="flex flex-wrap gap-4 justify-center md:justify-start">
                @foreach($reseps as $resep)
                <a href="/resep-detail/{{ $resep->id }}" class="px-8 py-5 bg-gray-950 text-white rounded-2xl text-[12px] font-bold tracking-wide hover:shadow-2xl hover:-translate-y-1 transition-all flex items-center gap-3">
                    {{ $resep->nama_resep }}
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h10v10"/><path d="M7 17 17 7"/></svg>
                </a>
                @endforeach
            </div>
        </div>
        @endif

    </div>
</div>
@endsection