@extends('layouts.guest')

@section('content')

<div class="min-h-screen bg-white py-24 px-6 font-sans antialiased text-slate-900">
    <div class="max-w-4xl mx-auto">

        <a href="{{ url()->previous() }}"
           class="inline-flex items-center gap-2 text-slate-600 hover:text-emerald-700 transition-colors mb-20 group">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="m15 18-6-6 6-6"/>
            </svg>
            <span class="text-xs font-bold uppercase tracking-[0.2em]">Kembali</span>
        </a>

        <header class="mb-24">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-50 text-emerald-700 rounded-full text-xs font-bold uppercase tracking-wider mb-8">
                🌿 Resep Herbal Tradisional
            </div>

            <h1 class="text-4xl md:text-6xl font-serif font-semibold leading-tight text-slate-950 mb-8 tracking-tight">
                {{ $data->nama_resep }}
            </h1>

            <p class="text-lg font-medium italic border-l-4 border-emerald-200 pl-6 text-slate-700">
                Berbasis bahan utama
                <span class="text-slate-900 font-semibold not-italic">
                    @forelse($data->herbal as $h)
                        {{ $h->nama_herbal }}@if(!$loop->last), @endif
                    @empty
                        Alami
                    @endforelse
                </span>
            </p>
        </header>

        <div class="space-y-32">

            <section>
                <div class="flex items-center gap-8 mb-16">
                    <div class="shrink-0 text-sm font-bold text-emerald-600 border-b-2 border-emerald-600 pb-1">01</div>
                    <h3 class="text-sm font-bold uppercase tracking-[0.2em] text-slate-700">Alat & Bahan</h3>
                    <div class="h-px bg-slate-200 flex-1"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-16">

                    <div>
                        <h4 class="text-xs font-bold uppercase tracking-[0.25em] text-emerald-700 mb-8">Bahan</h4>

                        <div class="space-y-4">
                            @foreach($data->bahan->where('tipe', 'bahan') as $b)
                            <div class="flex items-center justify-between gap-4 py-5 border-b border-slate-200 hover:border-emerald-200 transition-colors">

                                <div class="flex items-center gap-5">
                                    <div class="w-16 h-16 rounded-2xl bg-slate-100 overflow-hidden shrink-0 border border-slate-200 shadow-sm">
                                        <img src="{{ asset('images/'.$b->gambar) }}"
                                             onclick="openImageModal(this.src)"
                                             class="w-full h-full object-cover cursor-pointer hover:scale-110 transition duration-300"
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

                                <span class="text-sm font-bold text-emerald-700 bg-emerald-50 px-3 py-2 rounded-lg border border-emerald-100 shrink-0">
                                    {{ $b->pivot->jumlah ?? '-' }}
                                </span>

                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div>
                        <h4 class="text-xs font-bold uppercase tracking-[0.25em] text-emerald-700 mb-8">Alat</h4>

                        <div class="space-y-4">
                            @foreach($data->bahan->where('tipe', 'alat') as $b)
                            <div class="flex items-center justify-between gap-4 py-5 border-b border-slate-200 hover:border-emerald-200 transition-colors">

                                <div class="flex items-center gap-5">
                                    <div class="w-16 h-16 rounded-2xl bg-slate-100 overflow-hidden shrink-0 border border-slate-200 shadow-sm">
                                        <img src="{{ asset('images/'.$b->gambar) }}"
                                             onclick="openImageModal(this.src)"
                                             class="w-full h-full object-cover cursor-pointer hover:scale-110 transition duration-300"
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

                                <span class="text-sm font-bold text-slate-700 bg-slate-100 px-3 py-2 rounded-lg border border-slate-200 shrink-0">
                                    {{ $b->pivot->jumlah ?? '-' }}
                                </span>

                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </section>

            <section>
                <div class="flex items-center gap-8 mb-16">
                    <div class="shrink-0 text-sm font-bold text-emerald-600 border-b-2 border-emerald-600 pb-1">02</div>
                    <h3 class="text-sm font-bold uppercase tracking-[0.2em] text-slate-700">Langkah Pembuatan</h3>
                    <div class="h-px bg-slate-200 flex-1"></div>
                </div>

                <div class="max-w-2xl space-y-16">
                    @php $langkah = explode("\n", $data->cara_pembuatan); @endphp

                    @foreach($langkah as $index => $step)
                        @if(trim($step))
                        <div class="relative pl-16 group">
                            <div class="absolute left-0 top-0 text-5xl font-serif italic text-slate-300 group-hover:text-emerald-200 transition-colors duration-500">
                                {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                            </div>

                            <p class="text-lg md:text-xl text-slate-800 font-medium leading-relaxed pt-3">
                                {{ trim($step) }}
                            </p>
                        </div>
                        @endif
                    @endforeach
                </div>
            </section>

            @if($data->gambar)
            <section>
                <div class="flex items-center gap-8 mb-16">
                    <div class="shrink-0 text-sm font-bold text-emerald-600 border-b-2 border-emerald-600 pb-1">03</div>
                    <h3 class="text-sm font-bold uppercase tracking-[0.2em] text-slate-700">Hasil Ramuan</h3>
                    <div class="h-px bg-slate-200 flex-1"></div>
                </div>

                <div class="flex justify-center">
                    <img src="{{ asset('images/'.$data->gambar) }}"
                         onclick="openImageModal(this.src)"
                         class="w-[500px] h-[330px] object-cover rounded-[35px] shadow-2xl cursor-pointer hover:scale-[1.02] transition duration-300">
                </div>
            </section>
            @endif

            <section>
                <div class="flex items-center gap-8 mb-16">
                    <div class="shrink-0 text-sm font-bold text-emerald-600 border-b-2 border-emerald-600 pb-1">04</div>
                    <h3 class="text-sm font-bold uppercase tracking-[0.2em] text-slate-700">Cara Penggunaan</h3>
                    <div class="h-px bg-slate-200 flex-1"></div>
                </div>

                <div class="max-w-2xl space-y-16">
                    @php $penggunaan = explode("\n", $data->cara_penggunaan); @endphp

                    @foreach($penggunaan as $index => $step)
                        @if(trim($step))
                        <div class="relative pl-16 group">
                            <div class="absolute left-0 top-0 text-5xl font-serif italic text-slate-300 group-hover:text-emerald-200 transition-colors duration-500">
                                {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                            </div>

                            <p class="text-lg md:text-xl text-slate-800 font-medium leading-relaxed pt-3">
                                {{ trim($step) }}
                            </p>
                        </div>
                        @endif
                    @endforeach
                </div>
            </section>

        </div>

        <div class="py-20 text-center">
            <p class="text-sm font-semibold text-slate-500">Warisan Toba</p>
        </div>

    </div>
</div>

<!-- MODAL PREVIEW GAMBAR -->
<div id="imageModal"
     onclick="closeImageModal()"
     class="fixed inset-0 bg-black/80 hidden items-center justify-center z-[9999] opacity-0 transition-opacity duration-300">

    <div id="modalBox"
         onclick="event.stopPropagation()"
         class="relative scale-90 transition-transform duration-300">

        <button type="button"
                onclick="closeImageModal()"
                class="absolute -top-12 right-0 text-white text-4xl font-bold hover:text-emerald-300 transition">
            ×
        </button>

        <img id="modalImage"
             class="max-w-[85vw] max-h-[80vh] object-contain rounded-3xl shadow-2xl border-4 border-white bg-white">
    </div>
</div>

<script>
function openImageModal(src) {
    const modal = document.getElementById('imageModal');
    const modalBox = document.getElementById('modalBox');
    const modalImage = document.getElementById('modalImage');

    modalImage.src = src;

    modal.classList.remove('hidden');
    modal.classList.add('flex');

    setTimeout(() => {
        modal.classList.remove('opacity-0');
        modal.classList.add('opacity-100');
        modalBox.classList.remove('scale-90');
        modalBox.classList.add('scale-100');
    }, 10);
}

function closeImageModal() {
    const modal = document.getElementById('imageModal');
    const modalBox = document.getElementById('modalBox');

    modal.classList.remove('opacity-100');
    modal.classList.add('opacity-0');

    modalBox.classList.remove('scale-100');
    modalBox.classList.add('scale-90');

    setTimeout(() => {
        modal.classList.remove('flex');
        modal.classList.add('hidden');
    }, 300);
}
</script>

@endsection