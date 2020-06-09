@extends('layouts.app')

@section('style')
<style>
    html {
        height: 100%;
    }

    body {
        height: 100%;
        margin: 0;
        background: rgb(158,210,182);
        background: linear-gradient(33deg, rgba(158,210,182,1) 0%, rgba(255,237,253,1) 100%);
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="m-4 text-center">
        <img src="{{asset('img/vector/user-icon.png')}}" class="rounded-circle" alt="foto" style="max-width: 200px;">
    </div>
    <div class="text-center">
        <h1 style="font-weight: bold;">{{Auth::user()->nama_depan . ' ' . Auth::user()->nama_belakang}}</h1>
        <p>{{Auth::user()->alamat}}</p>
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
            <a href="/kuponku" class="btn btn-primary btn-profile">Lihat Kupon Anda</a>
        </div>
        <div class="text-center mt-3">
            <a href="/daftarkupon" class="btn btn-primary btn-profile">Tambah Kupon</a>
        </div>
    </div>
</div>
@endsection