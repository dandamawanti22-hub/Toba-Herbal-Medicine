@extends('layouts.guest')

@section('content')
<!-- Import Font Sophisticated & Icons -->
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;1,500&family=Outfit:wght@300;400;600;700;900&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>

<style>
    body { 
        font-family: 'Outfit', sans-serif; 
        background-color: #fdfbf9; 
        color: #1c3d1c; 
    }
    .font-serif { 
        font-family: 'Cormorant Garamond', serif; 
    }
    
    /* Modern Glassmorphism Navbar */
    .nav-glass {
        background: rgba(255, 255, 255, 0.75);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }
    
    /* Smooth Scroll Behavior */
    html { 
        scroll-behavior: smooth; 
    }

    /* Custom Animation */
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in { 
        animation: fadeInUp 1s cubic-bezier(0.16, 1, 0.3, 1) forwards; 
    }
</style>

<div class="relative min-h-screen flex flex-col justify-between">
    <!-- Navbar Melayang -->
    <nav id="navbar" class="fixed top-6 left-0 right-0 z-50 transition-all duration-500 px-4 md:px-10">
        <div class="max-w-7xl mx-auto nav-glass rounded-[2rem] px-8 py-4 flex items-center justify-between shadow-xl shadow-green-900/5">
            <!-- Logo -->
            <div class="flex items-center gap-3 group cursor-pointer">
                <div class="w-10 h-10 bg-[#2d722d] rounded-xl flex items-center justify-center text-white shadow-lg transition-transform group-hover:rotate-12">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <span class="text-xl font-black tracking-tighter text-gray-900 uppercase">
                    Toba<span class="text-[#2d722d]">Herbal</span>
                </span>
            </div>

            <!-- Menu (Desktop) -->
            <div class="hidden lg:flex items-center gap-10">
                <a href="/" class="text-[11px] font-black uppercase tracking-[0.2em] text-[#2d722d] transition-colors relative group">
                    Home
                    <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-[#2d722d] scale-x-100 transition-transform origin-left"></span>
                </a>
                <a href="#" class="text-[11px] font-black uppercase tracking-[0.2em] text-gray-500 hover:text-[#2d722d] transition-colors relative group">
                    Herbal
                    <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-[#2d722d] scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                </a>
                <a href="#" class="text-[11px] font-black uppercase tracking-[0.2em] text-gray-500 hover:text-[#2d722d] transition-colors relative group">
                    Penyakit
                    <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-[#2d722d] scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                </a>
                <a href="#" class="text-[11px] font-black uppercase tracking-[0.2em] text-gray-500 hover:text-[#2d722d] transition-colors relative group">
                    Resep
                    <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-[#2d722d] scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Background Image & Gradient overlay -->
    <div class="absolute inset-0 -z-10 overflow-hidden">
        <img src="{{ asset('images/bg_home.png') }}"
            class="w-full h-full object-cover scale-105"
            alt="Background Herbal Danau Toba">
        <!-- Sinematik Gelap Overlay: Memberikan kontras tinggi untuk teks putih -->
        <div class="absolute inset-0 bg-gradient-to-b from-black/35 via-black/15 to-black/50"></div>
    </div>

    <!-- HERO SECTION -->
    <section class="flex-1 flex items-center pt-48 pb-24 px-6 container mx-auto">
        <div class="max-w-4xl mx-auto text-center animate-fade-in w-full">
    
            <!-- Judul Utama (Menggunakan Text White agar pop out sempurna) -->
            <h1 class="text-5xl md:text-7.5xl font-serif font-medium leading-[1.1] text-white mb-8 tracking-tighter">
                Temukan Warisan Herbal Toba Untuk 
                <span class="italic text-emerald-300 block md:inline underline decoration-emerald-500/50 decoration-4 underline-offset-8">Kesehatan</span> Anda
            </h1>
            
            <!-- Deskripsi (Krem Lembut bernapas tinggi) -->
            <p class="text-lg md:text-2xl text-[#F5F7F2] max-w-3xl mx-auto mb-12 leading-[1.8] font-light [text-shadow:0_2px_15px_rgba(0,0,0,0.95)]">
                Jelajahi kekayaan tanaman obat tradisional masyarakat Toba yang diwariskan turun-temurun sebagai solusi alami untuk menjaga kesehatan tubuh.
            </p>
        </div>
    </section>
</div>

<script>
    // Navbar Scroll Smooth Shadow transition
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('px-2', 'py-1');
        } else {
            navbar.classList.remove('px-2', 'py-1');
        }
    });
</script>
@endsection