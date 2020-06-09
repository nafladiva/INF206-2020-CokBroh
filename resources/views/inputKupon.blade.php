@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="/inputkupon/go" id="inputkupon" enctype="multipart/form-data">
        @csrf

        <div class="form-group row justify-content-center">
            <label for="nama" class="col-10 col-md-4 col-lg-10 col-form-label text-md-left text-lg-left">{{ __('Nama Kupon') }}</label>

            <div class="col-10 col-md-10">
                <input id="nama" type="text" class="form-control @error('email') is-invalid @enderror input-email-login" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>

                @error('nama')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row justify-content-center">
            <label for="berlaku_sampai" class="col-10 col-md-4 col-lg-10 col-form-label text-md-left text-lg-left">{{ __('Berlaku Sampai') }}</label>

            <div class="col-10 col-md-10">
                <input id="berlaku_sampai" type="date" class="form-control @error('password') is-invalid @enderror input-pass-login" name="berlaku_sampai" required>

                @error('berlaku_sampai')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row justify-content-center">
            <label for="jumlah_poin" class="col-10 col-md-4 col-lg-10 col-form-label text-md-left text-lg-left">{{ __('Jumlah Poin') }}</label>

            <div class="col-10 col-md-10">
                <input id="jumlah_poin" type="text" class="form-control @error('password') is-invalid @enderror input-pass-login" name="jumlah_poin" required>

                @error('jumlah_poin')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row justify-content-center">
            <label for="deskripsi" class="col-10 col-md-4 col-lg-10 col-form-label text-md-left">{{ __('Deskripsi Kupon') }}</label>

            <div class="col-10 col-md-10">
                <textarea class="form-control input-register input-alamat-register" name="deskripsi" form="inputkupon" cols="44" rows="3"></textarea>
                <!-- <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus> -->

                @error('deskripsi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row justify-content-center">
            <label for="jumlah" class="col-10 col-md-4 col-lg-10 col-form-label text-md-left text-lg-left">{{ __('Jumlah Kupon') }}</label>

            <div class="col-10 col-md-10">
                <input id="jumlah" type="text" class="form-control @error('password') is-invalid @enderror input-pass-login" name="jumlah" required>

                @error('jumlah')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row justify-content-center">
            <label class="col-10 col-md-4 col-lg-10 col-form-label text-md-left text-lg-left">{{ __('Gambar Kupon') }}</label>
            
            <div class="col-10 col-md-10">
                <input type="file" name="gambar" />
            </div>
        </div>

        <div class="form-group row justify-content-center mb-5">
            <div class="col-10 col-md-10 text-right">
                <button type="submit" class="btn btn-primary btn-login">
                    {{ __('Input') }}
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
