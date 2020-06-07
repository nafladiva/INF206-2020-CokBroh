@extends('layouts.app')

@section('content')
<div class="container">
    <div class="m-4 text-center">
        <img src="https://cdn1.iconfinder.com/data/icons/technology-devices-2/100/Profile-512.png" class="rounded-circle" alt="foto" style="max-width: 200px;">
    </div>
    <div class="text-center">
        <h1 style="font-weight: bold;">{{Auth::user()->nama_depan . ' ' . Auth::user()->nama_belakang}}</h1>
    </div>

    <div class="container mt-3">
        <div class="row justify-content-center text-center">
            <div class="col-4 m-2 p-2 col-profile">
                <h1>{{Auth::user()->poin}}</h1>
                <h3>Poin</h3>
            </div>
            <div class="col-4 m-2 p-2 col-profile">
                <h1>{{Auth::user()->kupon}}</h1>
                <h3>Kupon</h3>
            </div>
        </div>

        <div class="text-center mt-3">
            <a href="/kuponku" class="btn btn-primary">Lihat Kupon Anda</a>
        </div>
        <div class="text-center mt-3">
            <a href="/daftarkupon" class="btn btn-primary">Cari Kupon</a>
        </div>
    </div>
</div>
@endsection