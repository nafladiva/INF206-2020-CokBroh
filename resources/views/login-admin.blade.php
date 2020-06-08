@extends('layouts.first')

@section('title', 'login')
<link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">
<link rel="stylesheet" href ="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
@section('content')
<div class="login"> 
    <div class="avatar">
        <i class="fa fa-user"></i>
    </div>

    <h2>Login Admin</h2>
    <div class="box-login mt-5">
        <i class="fa fa-envelope"></i>
        <input type="text" placeholder="Email">
    </div>

    <div class="box-login mt-2">
        <i class="fa fa-lock"></i>
        <input type="text" placeholder="Password">
	</div>
	<button type = "submit" class="btn-login mt-5">Login</button>
</div>

@endsection
