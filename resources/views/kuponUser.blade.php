@extends('layouts.app')

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
        <div class="card col-10 col-sm-8 col-md-6 col-lg-4 col-xl-3 m-2" style="width: 18rem;">
            <img class="card-img-top" src="/store_image/fetch_image/{{$d->id_kupon}}" alt="Gambar kupon">
            <div class="card-body">
                <h5 class="card-title text-center" style="font-weight: bold;">{{$d->nama}}</h5>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection
