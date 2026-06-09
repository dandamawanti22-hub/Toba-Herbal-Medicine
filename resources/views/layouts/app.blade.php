<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toba Herbal Admin</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS ADMIN -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">

    <div class="logo">🌿 TOBA HERBAL</div>

    <a href="/admin/dashboard" 
       class="menu {{ request()->is('admin/dashboard') ? 'active' : '' }}">
        Dashboard
    </a>

    <!-- PENYAKIT -->
    <div onclick="toggleMenu('penyakit')" class="menu">
        Data Penyakit
    </div>
    <div id="penyakit" class="submenu {{ request()->is('admin/penyakit*') ? 'show' : '' }}">
        <a href="/admin/penyakit">Lihat Data</a>
        <a href="/admin/penyakit/create">Tambah Data</a>
    </div>

    <!-- HERBAL -->
    <div onclick="toggleMenu('herbal')" class="menu">
        Data Herbal
    </div>
    <div id="herbal" class="submenu {{ request()->is('admin/herbal*') ? 'show' : '' }}">
        <a href="/admin/herbal">Lihat Data</a>
        <a href="/admin/herbal/create">Tambah Data</a>
    </div>

    <!-- BAHAN -->
    <div onclick="toggleMenu('bahan')" class="menu">
        Data Bahan
    </div>
    <div id="bahan" class="submenu {{ request()->is('admin/bahan*') ? 'show' : '' }}">
        <a href="/admin/bahan">Lihat Data</a>
        <a href="/admin/bahan/create">Tambah Data</a>
    </div>

    <!-- RESEP -->
    <div onclick="toggleMenu('resep')" class="menu">
        Data Resep
    </div>
    <div id="resep" class="submenu {{ request()->is('admin/resep*') ? 'show' : '' }}">
        <a href="/admin/resep">Lihat Data</a>
        <a href="/admin/resep/create">Tambah Data</a>
    </div>

    <hr>

    <form action="/admin/logout" method="POST">
        @csrf
        <button type="submit" class="logout">
            Logout
        </button>
    </form>

</div>

<!-- CONTENT -->
<div class="content">
    @yield('content')
</div>

<!-- SCRIPT -->
<script>
function toggleMenu(id) {
    const menu = document.getElementById(id);

    if (menu.style.display === "block") {
        menu.style.display = "none";
    } else {
        menu.style.display = "block";
    }
}
</script>

<!-- JQUERY -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- SELECT2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
$(document).ready(function() {
    $('.select2').select2({
        placeholder: "Pilih penyakit",
        allowClear: true
    });
});
</script>

</body>
</html>