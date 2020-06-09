@extends('layouts.app')

@section('style')
<style>
    html {
        height: 100%;
    }

    body {
        background-image: url("img/vector/bg.jpg");
        height: 100%;
        background-position: center;
        background-size: cover;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-3 card-login">
                <div class="card-body">
                    <div class="text-center m-4">
                        <h1 class="h1-login">{{ __('Login') }}</h1>
                    </div>
                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row justify-content-center">
                            <label for="email" class="col-10 col-md-4 col-lg-10 col-form-label text-md-left text-lg-left">{{ __('E-Mail Address') }}</label>

                            <div class="col-10 col-md-10">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror input-email-login" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <label for="password" class="col-10 col-md-4 col-lg-10 col-form-label text-md-left text-lg-left">{{ __('Password') }}</label>

                            <div class="col-10 col-md-10">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror input-pass-login" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-10 col-md-10">
                                <div class="form-check just">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center mb-5">
                            <div class="col-10 col-md-10 text-right">
                                <button type="submit" class="btn btn-primary btn-login">
                                    {{ __('Login') }}
                                </button>

                                <div class="text-right mt-2">
                                    <p>Belum memiliki akun? <a href="{{ route('register') }}">Daftar disini</a></p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection