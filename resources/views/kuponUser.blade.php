@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('alert'))
        <div class="alert alert-success">
            {{ session('alert') }}
        </div>
    @endif
    <div class="row justify-content-center">
    @foreach($data as $d)
        <div class="card col-10 col-sm-8 col-md-6 col-lg-4 col-xl-3 m-2" style="width: 18rem;">
            <img class="card-img-top" src="/store_image/fetch_image/{{$d->id_kupon}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$d->nama}}</h5>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection
