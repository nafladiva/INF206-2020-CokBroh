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
    @if (session('alert'))
        <div class="alert alert-success">
            {{ session('alert') }}
        </div>
    @endif
    <div class="text-center m-4">
        <h1 class="h1-kupon">{{ __('Kupon Anda') }}</h1>
    </div>
    <div class="row justify-content-center">
    @foreach($data as $d)
        @if(Auth::user()->kupon == 0)
        <div class="text-center">
            <h4>Anda belum memiliki kupon, ayo kumpulkan poinmu dan dapatkan kupon hadiahnya!</h4>
        </div>
        @else
        <div class="card col-10 col-sm-8 col-md-6 col-lg-4 col-xl-3 m-2" style="width: 18rem;">
            <img class="card-img-top" src="/store_image/fetch_image/{{$d->id_kupon}}" alt="Gambar kupon">
            <div class="card-body">
                <h5 class="card-title text-center" style="font-weight: bold;">{{$d->nama}}</h5>
            </div>
        </div>
        @endif
    @endforeach
    </div>
</div>
@endsection
