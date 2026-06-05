@extends('layouts.guest')

@section('content')

<!-- Container Utama -->
<div class="min-h-screen bg-white py-24 px-6 font-sans antialiased text-slate-900">
    <div class="max-w-4xl mx-auto">
        
        <!-- Navigasi Kembali -->
        <a href="{{ url()->previous() }}"
             class="inline-flex items-center gap-2 text-slate-600 hover:text-emerald-700 transition-colors mb-20 group">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="m15 18-6-6 6-6"/></svg>

            <span class="text-xs font-bold uppercase tracking-[0.2em]">
                Kembali
            </span>
        </a>

        <!-- ================= HEADER SECTION ================= -->
        <header class="mb-24">

            <div class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-50 text-emerald-700 rounded-full text-xs font-bold uppercase tracking-wider mb-8">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                </span>

                Resep Herbal Tradisional
            </div>
            
            <h1 class="text-4xl md:text-6xl font-serif font-semibold leading-tight text-slate-950 mb-8 tracking-tight">
                {{ $data->nama_resep }}
            </h1>
            
            <div class="flex flex-col md:flex-row md:items-center gap-6 text-slate-600">

                <p class="text-lg font-medium italic border-l-4 border-emerald-200 pl-6 text-slate-700">
                    Berbasis bahan utama
                    <span class="text-slate-900 font-semibold not-italic">
                        {{ $data->herbal->nama_herbal ?? 'Alami' }}
                    </span>
                </p>
                
                <div class="flex gap-4 md:ml-auto">

                    <div class="flex items-center gap-2 px-4 py-2 bg-slate-100 rounded-lg">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="text-emerald-600"
                             width="16"
                             height="16"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="2"
                             viewBox="0 0 24 24">

                            <circle cx="12" cy="12" r="10"/>
                            <path d="M12 6v6l4 2"/>

                        </svg>

                        <span class="text-sm font-semibold text-slate-700">
                            {{ $data->durasi ?? '20 Menit' }}
                        </span>

                    </div>

                </div>

            </div>
        </header>

        <div class="space-y-32">
            
<!-- ================= BAGIAN 01 ================= -->
<section>

    <div class="flex items-center gap-8 mb-16">

        <div class="shrink-0 text-sm font-bold text-emerald-600 border-b-2 border-emerald-600 pb-1">
            01
        </div>

        <h3 class="text-sm font-bold uppercase tracking-[0.2em] text-slate-700">
            Alat & Bahan
        </h3>

        <div class="h-px bg-slate-200 flex-1"></div>

    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-16">

        <!-- BAHAN -->
        <div>
            <h4 class="text-xs font-bold uppercase tracking-[0.25em] text-emerald-700 mb-8">
                Bahan
            </h4>

            <div class="space-y-4">

                @foreach($data->bahan->where('tipe', 'bahan') as $b)

                <div class="flex items-center justify-between py-5 border-b border-slate-200 group hover:border-emerald-200 transition-colors">

                    <div class="flex items-center gap-5">

                        <div class="w-14 h-14 rounded-2xl bg-slate-100 overflow-hidden shrink-0 border border-slate-200">
                            <img src="{{ asset('images/'.$b->gambar) }}"
                                 class="w-full h-full object-cover"
                                 onerror="this.src='https://via.placeholder.com/150'">
                        </div>

                        <div>
                            <span class="block text-base font-semibold text-slate-800 mb-1">
                                {{ $b->nama_bahan }}
                            </span>

                            <span class="text-xs text-slate-500 uppercase tracking-wide">
                                Bahan
                            </span>
                        </div>

                    </div>

                    <span class="text-sm font-bold text-emerald-700 bg-emerald-50 px-3 py-2 rounded-lg border border-emerald-100">
                        {{ $b->pivot->jumlah ?? '-' }}
                    </span>

                </div>

                @endforeach

            </div>
        </div>

        <!-- ALAT -->
        <div>
            <h4 class="text-xs font-bold uppercase tracking-[0.25em] text-emerald-700 mb-8">
                Alat
            </h4>

            <div class="space-y-4">

                @foreach($data->bahan->where('tipe', 'alat') as $b)

                <div class="flex items-center justify-between py-5 border-b border-slate-200 group hover:border-emerald-200 transition-colors">

                    <div class="flex items-center gap-5">

                        <div class="w-14 h-14 rounded-2xl bg-slate-100 overflow-hidden shrink-0 border border-slate-200">
                            <img src="{{ asset('images/'.$b->gambar) }}"
                                 class="w-full h-full object-cover"
                                 onerror="this.src='https://via.placeholder.com/150'">
                        </div>

                        <div>
                            <span class="block text-base font-semibold text-slate-800 mb-1">
                                {{ $b->nama_bahan }}
                            </span>

                            <span class="text-xs text-slate-500 uppercase tracking-wide">
                                Alat
                            </span>
                        </div>

                    </div>

                    <span class="text-sm font-bold text-slate-700 bg-slate-100 px-3 py-2 rounded-lg border border-slate-200">
                        {{ $b->pivot->jumlah ?? '-' }}
                    </span>

                </div>

                @endforeach

            </div>
        </div>

    </div>

</section>

            <!-- ================= BAGIAN 02 ================= -->
            <section>

                <div class="flex items-center gap-8 mb-16">

                    <div class="shrink-0 text-sm font-bold text-emerald-600 border-b-2 border-emerald-600 pb-1">
                        02
                    </div>

                    <h3 class="text-sm font-bold uppercase tracking-[0.2em] text-slate-700">
                        Langkah Pembuatan
                    </h3>

                    <div class="h-px bg-slate-200 flex-1"></div>

                </div>

                <div class="max-w-2xl">

                    <div class="space-y-16">

                        @php $langkah = explode("\n", $data->cara_pembuatan); @endphp

                        @foreach($langkah as $index => $step)

                        @if(trim($step))

                        <div class="relative pl-16 group">

                            <!-- NOMOR -->
                            <div class="absolute left-0 top-0 text-5xl font-serif italic text-slate-300 group-hover:text-emerald-200 transition-colors duration-500">

                                {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}

                            </div>
                            
                            <div class="relative pt-3">

                                <p class="text-lg md:text-xl text-slate-800 font-medium leading-relaxed group-hover:text-slate-900 transition-colors duration-500">

                                    {{ trim($step) }}

                                </p>

                            </div>

                        </div>

                        @endif

                        @endforeach

                    </div>

                </div>

            </section>


            <!-- ================= HASIL RAMUAN ================= -->

            @if($data->gambar)

            <section>

                <div class="flex items-center gap-8 mb-16">

                    <div class="shrink-0 text-sm font-bold text-emerald-600 border-b-2 border-emerald-600 pb-1">
                        03
                    </div>

                    <h3 class="text-sm font-bold uppercase tracking-[0.2em] text-slate-700">
                        Hasil Ramuan
                    </h3>

                    <div class="h-px bg-slate-200 flex-1"></div>

                </div>


                <div class="flex justify-center">


                    <img 
                    src="{{ asset('images/'.$data->gambar) }}"

                    class="
                    w-[500px]
                    h-[330px]
                    object-cover
                    rounded-[35px]
                    shadow-2xl
                    ">


                </div>


            </section>

            @endif


           <!-- ================= BAGIAN 04 ================= -->
            <section>

                <div class="flex items-center gap-8 mb-16">

                    <div class="shrink-0 text-sm font-bold text-emerald-600 border-b-2 border-emerald-600 pb-1">
                        04
                    </div>

                    <h3 class="text-sm font-bold uppercase tracking-[0.2em] text-slate-700">
                        Cara Penggunaan
                    </h3>

                    <div class="h-px bg-slate-200 flex-1"></div>

                </div>

                <div class="max-w-2xl">

                    <div class="space-y-16">

                        @php $penggunaan = explode("\n", $data->cara_penggunaan); @endphp

                        @foreach($penggunaan as $index => $step)

                        @if(trim($step))

                        <div class="relative pl-16 group">

                            <!-- NOMOR -->
                            <div class="absolute left-0 top-0 text-5xl font-serif italic text-slate-300 group-hover:text-emerald-200 transition-colors duration-500">

                                {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}

                            </div>

                            <div class="relative pt-3">

                                <p class="text-lg md:text-xl text-slate-800 font-medium leading-relaxed group-hover:text-slate-900 transition-colors duration-500">

                                    {{ trim($step) }}

                                </p>

                            </div>

                        </div>

                        @endif

                        @endforeach

                    </div>

                </div>

            </section>

        </div>

        <!-- FOOTER -->
        <div class="py-20 text-center">

            <p class="text-sm font-semibold text-slate-500">
                Warisan Toba
            </p>

        </div>

    </div>
</div>

@endsection