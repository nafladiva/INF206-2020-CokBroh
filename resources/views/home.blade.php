@extends('layouts.admin')

@section('title','Home')

@section('style')
<link rel="stylesheet" href="{{url('css/style_admin.css')}}">
@endsection

@section('content')
<div class="col-md-10 p-5 mt-5 pt-3">
  <h3><i class="fas fa-tachometer-alt mr-2"></i> DASHBOARD</h3><hr>
  <div class="row text-white">
   <div class="card bg-info ml-3" style="width: 18rem;">
     <div class="card-body">
       <div class="card-body-icon">
         <i class="far fa-address-card mr-2"></i>
       </div>
       <h5 class="card-title">JUMLAH KUPON</h5>
       <div class="display-4">120</div>
         <a href=""><p class="card-text"><font color="white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></font></p></a>
     </div>
   </div>
   <div class="card bg-primary ml-5" style="width: 18rem;">
     <div class="card-body">
       <div class="card-body-icon">
         <i class="fas fa-users mr-2"></i>
       </div>
       <h5 class="card-title">JUMLAH USER</h5>
       <div class="display-4">120</div>
       <a href=""><p class="card-text"><font color="white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></font></p></a>

     </div>
   </div> <hr>
  </div>

<div class="row ml-0 mt-5 mr-5 shadow">
  <div class="col-md-12 p-5 mr-5 grid-margin stretch-card">
    <div class="card mr-5 ">
      <div class="card-body">
   <h4 class="card-title"> <i class="fas fa-users mr-2"></i> Data User
     <a href="" class="btn btn-warning btn-icon-only rounded-circle mb-1" data-toggle="modal" data-target="#exampleModal">
       <span class="btn-inner--icon text-white"><i class="fas fa-plus"></i></span>
     </a>
     <div class="row mt-0 mr-1">
       <form class="form-inline my-2 my-lg-0 ml-auto">
         <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
         <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
       </form>
      </div>
   </h4>
   
     <hr class="bg-warning mt-0">
     
   <div class="row">
   
     <div class="col-md">
         <table class="table table-striped table-dark " id="tabel">
         <thead>
           <tr class="bg-gradient-dark">
             <th scope="col" style="width: 10%;">No</th>
             <th scope="col" style="width: 20%;"> Nama User</th>
             <th scope="col" style="width: 35%;">Jumlah Kupon</th>
             <th scope="col" style="width: 20%;"> Jumlah Poin</th>
             <th scope="col" style="width: 15%;">Aksi</th>
           </tr>
         </thead>
       </table>
       
     </div>
   </div>
 </div>
</div>
</div>
</div>
</div>
@endsection