@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card p-4 shadow">

        <h3>Edit Alat & Bahan</h3>


        <form 
            action="/admin/bahan/{{ $data->id }}" 
            method="POST"
            enctype="multipart/form-data">

            @csrf
            @method('PUT')


            {{-- KODE --}}
            <div class="mb-3">

                <label>Kode</label>

                <input 
                    type="text" 
                    name="kode" 
                    class="form-control"
                    value="{{ $data->kode }}"
                    required>

            </div>




            {{-- NAMA --}}
            <div class="mb-3">

                <label>Nama</label>

                <input 
                    type="text" 
                    name="nama_bahan" 
                    class="form-control" 
                    value="{{ $data->nama_bahan }}"
                    required>

            </div>




            {{-- TIPE --}}
            <div class="mb-3">

                <label>Tipe</label>


                <select 
                    name="tipe" 
                    class="form-control"
                    required>


                    <option 
                    value="bahan"
                    {{ $data->tipe == 'bahan' ? 'selected' : '' }}>

                        Bahan

                    </option>



                    <option 
                    value="alat"
                    {{ $data->tipe == 'alat' ? 'selected' : '' }}>

                        Alat

                    </option>


                </select>

            </div>





            {{-- GAMBAR LAMA --}}
            <div class="mb-3">

                <label>Gambar Sekarang</label>
                <br>


                @if($data->gambar)

                    <img 
                    src="{{ asset('storage/'.$data->gambar) }}"
                    width="120"
                    style="border-radius:10px;">

                @else

                    <p>Tidak ada gambar</p>

                @endif

            </div>





            {{-- UPDATE GAMBAR --}}
            <div class="mb-3">

                <label>Ganti Gambar</label>

                <input 
                    type="file" 
                    name="gambar" 
                    class="form-control">

            </div>




            <button class="btn btn-success">
                Update
            </button>



            <a href="/admin/bahan" class="btn btn-secondary">
                Kembali
            </a>



        </form>

    </div>

</div>

@endsection