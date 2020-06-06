@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card col-10 col-sm-8 col-md-6 col-lg-4 col-xl-3 m-2" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('img/kupon1.jpeg')}}" alt="Gambar kupon">
            <div class="card-body">
                <h5 class="card-title text-center">Kupon Belanja Rp25.000</h5>
                <div class="row justify-content-between">
                    <p>Sisa: 5</p>
                    <a href="#" class="btn btn-primary">Ambil</a>
                </div>
            </div>
        </div>

        <div class="card col-10 col-sm-8 col-md-6 col-lg-4 col-xl-3 m-2" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('img/kupon5.jpeg')}}" alt="Gambar kupon" style="max-height: 200px;">
            <div class="card-body">
                <h5 class="card-title text-center">Voucher Belanja Kusen</h5>
                <div class="row justify-content-between">
                    <p>Sisa: 5</p>
                    <a href="#" class="btn btn-primary">Ambil</a>
                </div>
            </div>
        </div>

        <div class="card col-10 col-sm-8 col-md-6 col-lg-4 col-xl-3 m-2" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('img/kupon3.jpeg')}}" alt="Gambar kupon" style="max-height: 200px;">
            <div class="card-body">
                <h5 class="card-title text-center">Shopback Gratis Rp.45.000</h5>
                <div class="row justify-content-between">
                    <p>Sisa: 5</p>
                    <a href="#" class="btn btn-primary">Ambil</a>
                </div>
            </div>
        </div>

        <div class="card col-10 col-sm-8 col-md-6 col-lg-4 col-xl-3 m-2" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('img/kupon4.jpg')}}" alt="Gambar kupon" style="max-height: 200px;">
            <div class="card-body">
                <h5 class="card-title text-center">Kupon Belanja Rp50.000</h5>
                <div class="row justify-content-between">
                    <p>Sisa: 5</p>
                    <a href="#" class="btn btn-primary">Ambil</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
