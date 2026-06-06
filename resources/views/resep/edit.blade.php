@extends('layouts.app')

@section('content')

<div class="card p-4 shadow-sm">

    <h3 class="mb-4">Edit Resep</h3>


    <form action="/admin/resep/{{ $data->id }}" method="POST">

        @csrf
        @method('PUT')


        {{-- KODE RESEP --}}
        <div class="mb-3">
            <label>Kode Resep</label>

            <input 
                type="text" 
                name="kode_resep" 
                class="form-control"
                value="{{ $data->kode_resep }}">
        </div>



        {{-- NAMA RESEP --}}
        <div class="mb-3">
            <label>Nama Resep</label>

            <input 
                type="text" 
                name="nama_resep" 
                class="form-control"
                value="{{ $data->nama_resep }}">
        </div>



        {{-- HERBAL --}}
        <div class="mb-3">

            <label>Pilih Herbal</label>

            <select name="herbal[]" class="form-control" multiple size="6" required>

                @foreach($herbal as $h)

                    <option 
                        value="{{ $h->id }}"
                        {{ $data->herbal->contains($h->id) ? 'selected' : '' }}>

                        {{ $h->kode_herbal }} - {{ $h->nama_herbal }}

                    </option>

                @endforeach

            </select>

            <small class="text-muted">
                Tekan CTRL untuk memilih lebih dari satu herbal
            </small>

        </div>



        {{-- BAHAN --}}
        <h5>Bahan</h5>

        <div class="row">

            @foreach($bahan as $b)

                @if($b->tipe == 'bahan')

                @php
                    $selected = $data->bahan->where('id',$b->id)->first();
                @endphp


                <div class="col-md-3 text-center mb-3">

                    <label style="width:100%; cursor:pointer;">


                        <input 
                            type="checkbox"
                            name="bahan[{{ $b->id }}][id]"
                            value="{{ $b->id }}"
                            {{ $selected ? 'checked' : '' }}>


                        <div class="p-2"
                            style="border:1px solid #ddd;border-radius:10px;">


                            <img 
                            src="{{ asset('storage/'.$b->gambar) }}"
                            style="width:80px;height:80px;object-fit:cover;">


                            <p>
                                {{ $b->nama_bahan }}
                            </p>


                            <input 
                            type="text"
                            name="bahan[{{ $b->id }}][jumlah]"
                            class="form-control"
                            value="{{ $selected->pivot->jumlah ?? '' }}">


                        </div>

                    </label>

                </div>


                @endif

            @endforeach

        </div>




        {{-- ALAT --}}
        <h5>Alat</h5>

        <div class="row">

            @foreach($bahan as $b)

                @if($b->tipe == 'alat')


                @php
                    $selected = $data->bahan->where('id',$b->id)->first();
                @endphp


                <div class="col-md-3 text-center mb-3">

                    <label style="width:100%; cursor:pointer;">


                        <input 
                            type="checkbox"
                            name="bahan[{{ $b->id }}][id]"
                            value="{{ $b->id }}"
                            {{ $selected ? 'checked' : '' }}>


                        <div class="p-2"
                        style="border:1px solid #ddd;border-radius:10px;">


                            <img 
                            src="{{ asset('storage/'.$b->gambar) }}"
                            style="width:80px;height:80px;object-fit:cover;">


                            <p>
                                {{ $b->nama_bahan }}
                            </p>


                            <input 
                            type="text"
                            name="bahan[{{ $b->id }}][jumlah]"
                            class="form-control"
                            value="{{ $selected->pivot->jumlah ?? '' }}">


                        </div>


                    </label>

                </div>


                @endif

            @endforeach


        </div>




        {{-- CARA PEMBUATAN --}}
        <div class="mb-3">

            <label>Cara Pembuatan</label>

            <textarea 
            name="cara_pembuatan" 
            class="form-control"
            rows="4">{{ $data->cara_pembuatan }}</textarea>

        </div>



        {{-- CARA PENGGUNAAN --}}
        <div class="mb-3">

            <label>Cara Penggunaan</label>

            <textarea 
            name="cara_penggunaan" 
            class="form-control"
            rows="3">{{ $data->cara_penggunaan }}</textarea>

        </div>




        <button class="btn btn-success">
            Update
        </button>


        <a href="/admin/resep" class="btn btn-secondary">
            Kembali
        </a>


    </form>

</div>

@endsection