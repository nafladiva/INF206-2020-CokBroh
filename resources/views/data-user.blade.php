@extends('layouts.admin')

@section('title','Data User')

@section('style')
<link href="{{url('css/admin-dash.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="container" style="width: 82%;"><br>
<div class="row ml-0 mt-5 mr-5 shadow">
    <div class="col-md-12 p-5 mr-5 grid-margin stretch-card">
    <h3 class="text-right">Halo, {{ Auth::user()->nama_depan }}</h3>
        <div class="col">
            <div class="">
            <h4 class=""> <i class="fas fa-users mr-2"></i> Data User
                <a href="" class="btn btn-warning btn-icon-only rounded-circle mb-1" data-toggle="modal" data-target="#exampleModal">
                    <span class="btn-inner--icon text-white"><i class="fas fa-plus"></i></span>
                </a>
                
                <div class="row mt-0 mr-1">
        <form class="form-inline my-2 my-lg-0 ml-auto" action="/cariuser" method="GET">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    
</h4> 
<hr class="bg-warning mt-0">
            <div class="row">
            <div class="col-md">
                <table class="table table-striped table-dark" id="tabel">
                    <tr class="bg-gradient-dark">
                        <th scope="col" style="width: 10%;">No</th>
                        <th scope="col" style="width: 20%;">Nama Depan</th>
                        <th scope="col" style="width: 20%;">Nama Belakang</th>
                        <th scope="col" style="width: 15%;">Jumlah Poin</th>
                        <th scope="col" style="width: 15%;">Jumlah Kupon</th>
                        <th scope="col" style="width: 20%;">Aksi</th>
                    </tr>

                    @foreach ($data as $d)
                    <tr>
                        <td>{{$d -> id}}</td>
                        <td>{{$d -> nama_depan}}</td>
                        <td>{{$d -> nama_belakang}}</td>
                        <td>{{$d -> poin}}</td>
                        <td>{{$d -> kupon}}</td>
                        <td>
                            <a href="/inputpoin/{{$d->id}}" class="btn btn-primary m-1">Tambah poin</a>
                            <a href="" class="btn btn-primary m-1">Delete</a>
                        </td>
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