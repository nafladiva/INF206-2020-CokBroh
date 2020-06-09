@extends('layouts.first')

@section('title', 'login')
<link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">
<link rel="stylesheet" href ="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
@section('content')
@if(\Session::has('alert'))
    <div class="alert alert-danger">
        <div>{{Session::get('alert')}}</div>
    </div>
@endif
@if(\Session::has('alert-success'))
    <div class="alert alert-success">
        <div>{{Session::get('alert-success')}}</div>
    </div>
@endif
<div class="login"> 
    <div class="avatar">
        <i class="fa fa-user"></i>
    </div>
    
    <form method="POST" action="{{ url('/postadmin') }}">
        @csrf
        <h2>Login Admin</h2>
        <div class="box-login mt-5">
            <i class="fa fa-envelope"></i>
            <input type="email" name="email" placeholder="Email">
        </div>

        <div class="box-login mt-2">
            <i class="fa fa-lock"></i>
            <input type="password" name="password" placeholder="Password">
        </div>
        <button type="submit" class="btn-login mt-5">Login</button>
    </form>
</div>

@endsection
