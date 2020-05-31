@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-3 card-register">
                <div class="card-body">
                    <div class="text-center m-4">
                        <h1 class="h1-register">{{ __('Register') }}</h1>
                    </div>

                    <form method="POST" action="{{ route('register') }}" id="register">
                        @csrf

                        <div class="form-group row justify-content-center">
                            <label for="nama_depan" class="col-10 col-md-4 col-lg-10 col-form-label text-md-left">{{ __('Nama Depan') }}</label>

                            <div class="col-10 col-md-10">
                                <input id="nama_depan" type="text" class="form-control @error('nama_depan') is-invalid @enderror input-nd-register" name="nama_depan" value="{{ old('nama_depan') }}" required autocomplete="nama_depan" autofocus>

                                @error('nama_depan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <label for="nama_belakang" class="col-10 col-md-4 col-lg-10 col-form-label text-md-left">{{ __('Nama Belakang') }}</label>

                            <div class="col-10 col-md-10">
                                <input id="nama_belakang" type="text" class="form-control @error('nama_belakang') is-invalid @enderror input-nb-register" name="nama_belakang" value="{{ old('nama_belakang') }}" required autocomplete="nama_belakang" autofocus>

                                @error('nama_belakang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <label for="alamat" class="col-10 col-md-4 col-lg-10 col-form-label text-md-left">{{ __('Alamat') }}</label>

                            <div class="col-10 col-md-10">
                                <textarea class="form-control input-register input-alamat-register" name="alamat" form="register" cols="44" rows="3"></textarea>
                                <!-- <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus> -->

                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <label for="no_hp" class="col-10 col-md-4 col-lg-10 col-form-label text-md-left">{{ __('No. HP') }}</label>

                            <div class="col-10 col-md-10">
                                <input id="no_hp" type="text" class="form-control @error('no_hp') is-invalid @enderror input-hp-register" name="no_hp" value="{{ old('no_hp') }}" required autocomplete="no_hp" autofocus>

                                @error('no_hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <label for="email" class="col-10 col-md-4 col-lg-10 col-form-label text-md-left">{{ __('E-Mail') }}</label>

                            <div class="col-10 col-md-10">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror input-email-register" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <label for="password" class="col-10 col-md-4 col-lg-10 col-form-label text-md-left">{{ __('Password') }}</label>

                            <div class="col-10 col-md-10">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror input-pass-register" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <label for="password-confirm" class="col-10 col-md-4 col-lg-10 col-form-label text-md-left">{{ __('Confirm Password') }}</label>

                            <div class="col-10 col-md-10">
                                <input id="password-confirm" type="password" class="form-control input-cp-register" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-5 justify-content-center">
                            <div class="col-md-10 mt-4">
                                <button type="submit" class="btn btn-primary btn-register">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection