<!DOCTYPE html>
<html>
<head>
    <title>Toba Herbal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f8fafc;
        }

        .navbar {
            background: #1e293b;
        }

        .navbar a {
            color: white !important;
        }

        .hero {
            background: linear-gradient(135deg, #22c55e, #16a34a);
            color: white;
            padding: 60px;
            border-radius: 12px;
            text-align: center;
            margin-bottom: 30px;
        }

        .card-custom {
            border-radius: 12px;
            transition: 0.3s;
        }

        .card-custom:hover {
            transform: translateY(-5px);
        }

        .card {
            border-radius: 10px;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .navbar-custom {
            background: #1b5e20;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 999;
        }

        /* link navbar */
        .navbar-custom a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            transition: 0.3s;
        }

        /* hover */
        .navbar-custom a:hover {
            color: #c8e6c9;
        }

        /* active menu */
        .navbar-custom a.active {
            border-bottom: 2px solid #a5d6a7;
            padding-bottom: 2px;
        }

        .navbar-custom {
        background: linear-gradient(90deg, #1b5e20, #2e7d32);
        box-shadow: 0 4px 15px rgba(0,0,0,0.15);
        }

        .navbar-custom {
            background: linear-gradient(90deg, #1b5e20, #2e7d32);
            box-shadow: 0 4px 15px rgba(0,0,0,0.15);
        }

        /* link */
        .navbar-custom a {
            color: white;
            text-decoration: none;
            margin-left: 25px;
            position: relative;
            transition: 0.3s;
        }

        /* hover effect */
        .navbar-custom a:hover {
            color: #c8e6c9;
        }

        /* garis bawah animasi */
        .navbar-custom a::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -5px;
            width: 0%;
            height: 2px;
            background: #c8e6c9;
            transition: 0.3s;
        }

        .navbar-custom a:hover::after {
            width: 100%;
        }

        /* ACTIVE MENU */
        .navbar-custom a.active::after {
            width: 100%;
        }

        @media (max-width: 768px) {
        .navbar-custom {
            flex-direction: column;
            align-items: flex-start;
        }

        .navbar-custom div {
            margin-top: 10px;
        }

        .navbar-custom a {
            display: block;
            margin: 5px 0;
        }
        }

    </style>
</head>

<body style="background: #f5f7fb;">


<nav class="navbar-custom px-4 py-3 d-flex justify-content-between align-items-center">

    <!-- LOGO -->
    <a href="/" class="fw-bold text-white" style="text-decoration:none;">
        🌿 Toba Herbal
    </a>

    <!-- MENU -->
    <div>
        <a href="/herbal"
           class="{{ request()->is('herbal') ? 'active' : '' }}">
           Herbal
        </a>

        <a href="/penyakit"
           class="{{ request()->is('penyakit') ? 'active' : '' }}">
           Penyakit
        </a>

        <a href="/resep"
           class="{{ request()->is('resep') ? 'active' : '' }}">
           Resep
        </a>
    </div>

</nav>

<div class="container-fluid px-4 mt-3">
    @yield('content')
</div>

</body>
</html>