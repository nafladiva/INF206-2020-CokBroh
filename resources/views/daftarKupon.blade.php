@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('alert'))
        <div class="alert alert-danger">
            {{ session('alert') }}
        </div>
    @endif
    <a href="/inputkupon" class="btn btn-primary">Input kupon</a>
    <div class="row justify-content-center">
    @foreach($data as $d)
        <div class="card col-10 col-sm-8 col-md-6 col-lg-4 col-xl-3 m-2" style="width: 18rem;">
            <img class="card-img-top" src="/store_image/fetch_image/{{$d->id}}" alt="Gambar kupon">
            <div class="card-body">
                <h5 class="card-title text-center">{{$d->nama}}</h5>
                <div class="row justify-content-between">
                    <p>Jumlah poin : {{$d->jumlah_poin}}</p>
                    <form method="POST" action="/ambilkupon/{{Auth::user()->id}}/{{$d->id}}">
                    @csrf
                        <button type="submit" class="btn btn-primary">Ambil</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection
