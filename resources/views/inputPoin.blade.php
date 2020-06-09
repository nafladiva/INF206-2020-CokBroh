@extends('layouts.app')

@section('style')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-3 card-login">
                <div class="card-body">
                    <div class="text-center m-4">
                        <h1 class="h1-login">{{ __('Input Poin User') }}</h1>
                    </div>

                    @foreach($data as $d)
                    <div class="text-center m-4">
                        <h4>ID user : {{$d->id}}</h4>
                        <h4>Nama user : {{$d->nama_depan}} {{$d->nama_belakang}}</h4>
                    </div>
                    
                    
                    <form method="POST" action="/prosespoin/{{$d->id}}">
                        @csrf

                        <div class="form-group row justify-content-center">
                            <label for="berat" class="col-10 col-md-4 col-lg-10 col-form-label text-md-left text-lg-left">{{ __('Berat Sampah') }}</label>

                            <div class="col-8 col-md-8">
                                <input id="berat" type="text" class="form-control @error('berat') is-invalid @enderror input-email-login" name="berat" value="{{ old('berat') }}" required autocomplete="berat" autofocus>

                                @error('berat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-2 col-md-2">
                                <h3>/ ons</h3>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center mb-5">
                            <div class="col-10 col-md-10 text-center">
                                <button type="submit" class="btn btn-primary btn-login mt-3">
                                    {{ __('Input') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection