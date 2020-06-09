@extends('layouts.app')

@section('title', 'How to')

@section('style')

@endsection
@section('content')
    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
        <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading" style="color: green; font-size: 18px; font-weight: bold;">How to Operate</span>
            <h2>CokBroh</h2>
        </div>
        </div>
    		<div class="row">
    			<div class="col-md-4 d-flex align-items-stretch ftco-animate">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
    						<div class="number d-flex align-items-center justify-content-center mt-3" style="color: green; font-size: 30px; font-weight: bold;"><span>01</span></div>
	    					<div class="icon d-flex align-items-center justify-content-center">
                <img class="rounded-circle img-fluid" src="{{asset('img/howto/log.png')}}" alt="" /></img>
	    					</div>
    					</div>
    					<h2>Registration & Login</h2>
    					<p>Mendaftarkan keanggotaan dengan mengisi data pribadi kemudian memasuki halaman utama aplikasi.</p>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex align-items-stretch ftco-animate">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
    						<div class="number d-flex align-items-center justify-content-center mt-3" style="color: green; font-size: 30px; font-weight: bold;"><span>02</span></div>
	    					<div class="icon d-flex align-items-center justify-content-center">
	    					<img class="rounded-circle img-fluid" src="{{asset('img/howto/trans.png')}}" alt="" /></img>
	    					</div>
    					</div>
    					<h2>Transaction</h2>
  						<p>melakukan transaksi dengan memberikan limbah kepada petugas kemudian admin akan memberikan point sesuai kesepakatan di lapangan.</p>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex align-items-stretch ftco-animate">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
    						<div class="number d-flex align-items-center justify-content-center mt-3" style="color: green; font-size: 30px; font-weight: bold;"><span>03</span></div>
	    					<div class="icon d-flex align-items-center justify-content-center">
	    					<img class="rounded-circle img-fluid" src="{{asset('img/howto/exch.jpg')}}" alt="" /></img>
	    					</div>
    					</div>
    					<h2>Exchange</h2>
  						<p>melakukan penukaran point menjadi voucher yang tersedia.</p>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
@endsection
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
    