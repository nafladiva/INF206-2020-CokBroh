@extends('layouts.first')

@section('title', 'Beranda - CokBroh')

@section('content')
@if(\Session::has('alert'))
    <div class="alert alert-danger mt-3">
        <div>{{Session::get('alert')}}</div>
    </div>
@endif
@if(\Session::has('alert-success'))
    <div class="alert alert-success mt-3">
        <div>{{Session::get('alert-success')}}</div>
    </div>
@endif
  <div class="container landing">
    <img src="{{asset('img/logo.png')}}" alt="logo" class="img-fluid logo">
  <p class="lead mb-0 mt-2">SELAMAT DATANG DI</p>
  <p class="nama">CokBroh</p>
  <hr class="my-4">
  <p>Kumpulkan sampahnya, dapatkan hadiahnya !!!</p>
  <p class="lead">
    <a class="btn btn-warning btn-lg m-1" href="/login-admin" role="button"><i class="fas fa-user-cog mr-2"></i>ADMIN</a>
    <a class="btn btn-warning btn-lg m-1" href="{{ url('/login') }}" role="button"><i class="fas fa-trash mr-2"></i>PEDAGANG</a>
  </p>
</div>
@endsection