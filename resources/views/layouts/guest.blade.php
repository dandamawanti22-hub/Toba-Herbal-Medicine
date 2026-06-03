<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Toba Herbal Medicine</title>

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;1,500&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- TAILWIND -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: 'Outfit', sans-serif;
            background: #f7f7f5;
            color: #1e293b;
            overflow-x: hidden;
        }

        .font-serif {
            font-family: 'Cormorant Garamond', serif;
        }

        /* NAVBAR */
        .glass-nav {
            background: rgba(255, 255, 255, 0.82);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border: 1px solid rgba(255,255,255,0.35);
        }

        /* LINK */
        .nav-link {
            position: relative;
            transition: all 0.3s ease;
            pointer-events: auto;
            z-index: 99999;
        }

        .nav-link:hover {
            color: #15803d;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -6px;
            width: 0%;
            height: 2px;
            border-radius: 20px;
            background: #15803d;
            transition: 0.3s;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* ACTIVE */
        .nav-link-active {
            color: #15803d !important;
        }

        .nav-link-active::after {
            width: 100%;
        }

        /* FIX CLICK */
        nav {
            z-index: 99999 !important;
            pointer-events: auto !important;
        }

        nav * {
            pointer-events: auto !important;
        }

        main {
            position: relative;
            z-index: 1;
        }
    </style>
</head>

<body class="antialiased">

    <!-- ================= NAVBAR ================= -->
    <nav class="fixed top-5 left-0 right-0 px-4 md:px-6">

        <div class="max-w-7xl mx-auto glass-nav rounded-[30px] py-4 px-6 md:px-10 flex items-center justify-between shadow-2xl">

            <!-- LOGO -->
            <a href="/" class="flex items-center gap-3 shrink-0">

                <div class="w-12 h-12 bg-green-700 rounded-2xl flex items-center justify-center text-white text-lg shadow-lg">
                    🌿
                </div>

                <div class="text-2xl font-black tracking-tight leading-none">
                    <span class="text-slate-900">Toba</span><span class="text-green-600">Herbal</span>
                </div>

            </a>

            <!-- MENU -->
            <div class="hidden md:flex items-center gap-10">

                <a href="/"
                   class="nav-link text-xs font-bold uppercase tracking-[0.25em]
                   {{ request()->is('/') ? 'nav-link-active' : 'text-slate-500' }}">
                    Home
                </a>

                <a href="/herbal"
                   class="nav-link text-xs font-bold uppercase tracking-[0.25em]
                   {{ request()->is('herbal*') ? 'nav-link-active' : 'text-slate-500' }}">
                    Herbal
                </a>

                <a href="/penyakit"
                   class="nav-link text-xs font-bold uppercase tracking-[0.25em]
                   {{ request()->is('penyakit*') ? 'nav-link-active' : 'text-slate-500' }}">
                    Penyakit
                </a>

                <a href="/resep"
                   class="nav-link text-xs font-bold uppercase tracking-[0.25em]
                   {{ request()->is('resep*') || request()->is('resep-detail*') ? 'nav-link-active' : 'text-slate-500' }}">
                    Resep
                </a>

                <!-- LOGIN ADMIN -->
                <a href="/login"
                title="Login Admin"
                class="w-10 h-10 bg-green-700 text-white rounded-full 
                        flex items-center justify-center
                        hover:bg-green-800 transition shadow-md">
                    👤
                </a>

            </div>

            <!-- MOBILE BUTTON -->
            <div class="md:hidden">
                <button class="text-2xl text-slate-700">
                    ☰
                </button>
            </div>

        </div>

    </nav>

    <!-- ================= CONTENT ================= -->
    <main class="pt-32 relative z-0">
        @yield('content')
    </main>

</body>
</html>