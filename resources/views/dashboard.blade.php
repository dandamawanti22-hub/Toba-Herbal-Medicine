@extends('layouts.app')

@section('content')

<style>
.dashboard-wrapper {
    width: 100%;
}

.dashboard-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 28px;
}

/* WELCOME */
.admin-welcome {
    background: white;
    padding: 12px 22px;
    border-radius: 14px;
    font-size: 15px;
    color: #1e293b;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
}

.admin-welcome strong {
    color: #16a34a;
}


/* LINK CARD */
.card-link {
    text-decoration: none;
    color: inherit;
    display: block;
}

.card-link:hover {
    color: inherit;
}


/* CARD */
.card-dashboard {
    height: 130px;
    border-radius: 15px;
    background: white;
    padding: 25px;
    transition: 0.3s;
    position: relative;
    overflow: hidden;
    cursor: pointer;
}


/* HOVER */
.card-dashboard:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 15px 35px rgba(0,0,0,0.15);
}


/* ICON */
.icon {
    font-size: 32px;
    opacity: 0.18;
    position: absolute;
    right: 20px;
    bottom: 15px;
}


/* ANIMASI */
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


    <!-- HEADER -->
    <div class="dashboard-header">

        <h3 class="mb-0">
            Dashboard
        </h3>


        <div class="admin-welcome">
            Selamat Datang,
            <strong>Admin!</strong>
        </div>

    </div>



    <div class="row g-4">



        <!-- PENYAKIT -->
        <div class="col-md-3 fade-up">

            <a href="/admin/penyakit" class="card-link">

                <div class="card-dashboard shadow">

                    <h6>Data Penyakit</h6>

                    <h2 class="counter" data-target="{{ $penyakit }}">
                        0
                    </h2>

                    <div class="icon">
                        🦠
                    </div>

                </div>

            </a>

        </div>





        <!-- HERBAL -->
        <div class="col-md-3 fade-up">

            <a href="/admin/herbal" class="card-link">

                <div class="card-dashboard shadow">

                    <h6>Data Herbal</h6>

                    <h2 class="counter" data-target="{{ $herbal }}">
                        0
                    </h2>

                    <div class="icon">
                        🌿
                    </div>

                </div>

            </a>

        </div>






        <!-- RESEP -->
        <div class="col-md-3 fade-up">

            <a href="/admin/resep" class="card-link">

                <div class="card-dashboard shadow">

                    <h6>Data Resep</h6>

                    <h2 class="counter" data-target="{{ $resep }}">
                        0
                    </h2>

                    <div class="icon">
                        📄
                    </div>

                </div>

            </a>

        </div>






        <!-- BAHAN -->
        <div class="col-md-3 fade-up">

            <a href="/admin/bahan" class="card-link">

                <div class="card-dashboard shadow">

                    <h6>Data Bahan</h6>

                    <h2 class="counter" data-target="{{ \App\Models\Bahan::count() }}">
                        0
                    </h2>

                    <div class="icon">
                        🧪
                    </div>

                </div>

            </a>

        </div>


    </div>


</div>





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