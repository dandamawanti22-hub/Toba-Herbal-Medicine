@extends('layouts.app')

@section('content')

<style>
.dashboard-wrapper {
    width: 100%;
}

/* CARD */
.card-dashboard {
    border-radius: 15px;
    background: white;
    padding: 25px;
    transition: 0.3s;
    position: relative;
    overflow: hidden;
}

/* HOVER */
.card-dashboard:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 15px 35px rgba(0,0,0,0.15);
}

/* ICON */
.icon {
    font-size: 30px;
    opacity: 0.2;
    position: absolute;
    right: 15px;
    bottom: 10px;
}

/* ANIMATION MASUK */
.fade-up {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeUp 0.6s ease forwards;
}

.fade-up:nth-child(1) { animation-delay: 0.1s; }
.fade-up:nth-child(2) { animation-delay: 0.3s; }
.fade-up:nth-child(3) { animation-delay: 0.5s; }
.fade-up:nth-child(4) { animation-delay: 0.7s; }

@keyframes fadeUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

<div class="dashboard-wrapper">

    <h3 class="mb-4">Dashboard</h3>

    <div class="row g-4">

        <!-- Penyakit -->
        <div class="col-md-3 fade-up">
            <div class="card-dashboard shadow">
                <h6>Data Penyakit</h6>
                <h2 class="counter" data-target="{{ $penyakit }}">0</h2>
                <div class="icon">🦠</div>
            </div>
        </div>

        <!-- Herbal -->
        <div class="col-md-3 fade-up">
            <div class="card-dashboard shadow">
                <h6>Data Herbal</h6>
                <h2 class="counter" data-target="{{ $herbal }}">0</h2>
                <div class="icon">🌿</div>
            </div>
        </div>

        <!-- Resep -->
        <div class="col-md-3 fade-up">
            <div class="card-dashboard shadow">
                <h6>Data Resep</h6>
                <h2 class="counter" data-target="{{ $resep }}">0</h2>
                <div class="icon">📄</div>
            </div>
        </div>

        <!-- Bahan -->
        <div class="col-md-3 fade-up">
            <div class="card-dashboard shadow">
                <h6>Data Bahan</h6>
                <h2 class="counter" data-target="{{ \App\Models\Bahan::count() }}">0</h2>
                <div class="icon">🧪</div>
            </div>
        </div>

    </div>

</div>

<!-- SCRIPT ANIMASI ANGKA -->
<script>
document.querySelectorAll('.counter').forEach(counter => {
    let target = +counter.getAttribute('data-target');
    let count = 0;
    let speed = target / 50;

    function updateCount() {
        if (count < target) {
            count += speed;
            counter.innerText = Math.ceil(count);
            setTimeout(updateCount, 20);
        } else {
            counter.innerText = target;
        }
    }

    updateCount();
});
</script>

@endsection