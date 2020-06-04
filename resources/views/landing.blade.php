@extends('layouts.first')

@section('title', 'Beranda - CokBroh')

@section('content')
  <div class="container landing">
    <img src="{{asset('img/logo.png')}}" alt="logo" class="img-fluid logo">
  <p class="lead mb-0 mt-2">SELAMAT DATANG DI</p>
  <p class="nama">CokBroh</p>
  <hr class="my-4">
  <p>Kumpulkan sampahnya, dapatkan hadiahnya !!!</p>
  <p class="lead">
    <a class="btn btn-warning btn-lg m-2" href="{{ route('login') }}" role="button">
      <i class="fa fa-unlock mr-2"></i>
      ADMIN
    </a>
    <a class="btn btn-warning btn-lg m-2" href="{{ url('/pengunjung') }}" role="button"><i class="fa fa-trash mr-2"></i>PENGUNJUNG</a>
  </p>
</div>
@endsection