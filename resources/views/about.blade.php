@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="container">
	<div class="row mt-5 justify-content-center">
		<div class="col mb-5">
            <h1 style="font-size: 3rem; color: black;" class="text-center mb-4"><i class="fa fa-user"></i>TENTANG KAMI</h1>
		</div>
	</div>  
    <div class="row">
		<div class="col-md">
			<h4 style="font-weight: bold;">Tujuan Kami</h4>
			<hr class="bg-warning mb-3 mt-3">
			<p>Tujuan dari web ini adalah untuk mengajak dan mewadahi para pedagang untuk dapat menggunakan limbah dagangannya menjadi hal yang bermanfaat dengan membawa konsep bank sampah menggunakan sistem poin agar memberikan kesadaran dan kepedulian terhadap sampah bagi seluruh pengguna pasar</p>
		</div>
		<div class="col-md mt-5 mt-xl-0">
			<h4 style="font-weight: bold;">Tentang Kami</h4>
			<hr class="bg-warning mb-3 mt-3">
			<p>Kami merupakan Mahasiswa dari Program Studi Informatika Fakultas Matematika dan Ilmu Pengetahuan Alam(FMIPA) Universitas Syiah Kuala.</p>
		</div>
	</div>           
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="major-caousel js-carousel-1 owl-carousel">              
                    <div class="row justify-content-center">
                        <div class="media d-block media-custom text-center m-3">
                            <a href="#"><img src="{{asset('img/Risma.JPG')}}" alt="profil" class="rounded-circle" style="max-width: 200px;"></a>
                            <div class="media-body">
                                <h3 class="mt-0 text-black mt-3">Risma Kurniawaty</h3>
                                <p class="lead">Mahasiswa Informatika</p>
                            </div>       
                        </div>   
                        <div class="media d-block media-custom text-center m-3">
                            <a href="#"><img src="{{asset('img/Faris.JPG')}}" alt="profil" class="rounded-circle" style="max-width: 200px;"></a>
                            <div class="media-body">
                                <h3 class="mt-0 text-black mt-3">Faris Izzatur Rahman</h3>
                                <p class="lead">Mahasiswa Informatika</p>
                            </div>     
                        </div>   
                        <div class="media d-block media-custom text-center m-3">
                            <a href="#"><img src="{{asset('img/Zulfia.JPG')}}" alt="profil" class="rounded-circle" style="max-width: 200px;"></a>
                            <div class="media-body">
                                <h3 class="mt-0 text-black mt-3">Zulfia Rahmi</h3>
                                <p class="lead">Mahasiswa Informatika</p>
                            </div>     
                        </div>   
                    </div>
                    <div class="row justify-content-center">
                        <div class="media d-block media-custom text-center m-3">
                            <a href="#"><img src="{{asset('img/Icut.JPG')}}" alt="profil" class="rounded-circle" style="max-width: 200px;"></a>
                            <div class="media-body">
                                <h3 class="mt-0 text-black mt-3">Cut Meutia Haura</h3>
                                <p class="lead">Mahasiswa Informatika</p>
                            </div>     
                        </div>
                        <div class="media d-block media-custom text-center m-3">
                            <a href="#"><img src="{{asset('img/Desinta.JPG')}}" alt="profil" class="rounded-circle" style="max-width: 200px;"></a>
                            <div class="media-body">
                                <h3 class="mt-0 text-black mt-3">Desintha Zahara Azmi</h3>
                                <p class="lead">Mahasiswa Informatika</p>
                            </div>     
                        </div>
                        <div class="media d-block media-custom text-center m-3">
                            <a href="#"><img src="{{asset('img/Nafla.jpg')}}" alt="profil" class="rounded-circle" style="max-width: 200px;"></a>
                            <div class="media-body">
                                <h3 class="mt-0 text-black mt-3">Nafla Diva Syafia</h3>
                                <p class="lead">Mahasiswa Informatika</p>
                            </div>     
                        </div>
                    </div>
                </div>                                  
            </div>
        </div>    
	<div class="row justify-content-center mt-5">
		<div class="col-md">
			<hr class="bg-warning mb-2 mt-3">
			<p class="text-center">&copy; Copyright CokBroh 2020 - All right reserved</p>
		</div>
	</div>
</div>

@endsection