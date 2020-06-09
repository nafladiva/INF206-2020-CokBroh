@extends('layouts.admin')

@section('title','Data Kupon')

@section('style')
<link href="{{url('css/admin-dash.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="container" style="width: 82%;"><br>
<div class="row ml-0 mt-5 mr-5 shadow">
    <div class="col-md-12 p-5 mr-5 grid-margin stretch-card">
        <div class="col">
            <div class="">
            <h4 class=""> <i class="far fa-address-card mr-2"></i> Data Kupon
                <a href="/inputkupon" class="btn btn-warning rounded-circle mb-1">
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
                    <tr class="bg-gradient-dark">
                        <th scope="col" style="width: 10%;">No</th>
                        <th scope="col" style="width: 15%;">ID Kupon</th>
                        <th scope="col" style="width: 20%;">Nama</th>
                        <th scope="col" style="width: 20%;">Berlaku Sampai</th>
                        <th scope="col" style="width: 15%;">Jumlah Poin</th>
                        <th scope="col" style="width: 35%;">Deskripsi</th>
                        <th scope="col" style="width: 15%;">Jumlah</th>
                    </tr>

                    @foreach ($data as $d)
                    <tr>
                        <td>{{$d -> id}}</td>
                        <td>{{$d -> id}}</td>
                        <td>{{$d -> nama}}</td>
                        <td>{{$d -> berlaku_sampai}}</td>
                        <td>{{$d -> jumlah_poin}}</td>
                        <td>{{$d -> deskripsi}}</td>
                        <td>{{$d -> jumlah}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>   
</div>
@endsection