@extends('layouts.admin')

@section('title','Data User')

@section('style')
<link href="{{url('css/admin-dash.css')}}" rel="stylesheet">
@endsection

@section('content')
<div id="page-wrapper">

    <div class="container-fluid">
        <!-- .row -->
        <div class="row ml-10">

        <!-- .col lg 12 -->
            <div class="col-lg-15 mt-10 ">

            <!-- panel . (Pelajari cara membuat panel di bootstrap yah)-->
                <div class="panel panel-default">

                <!-- panel heading -->
                    <div class="panel-heading">
                    <div class="col-lg-6">
                    <a href="input_produk.php" title="Input data"><button name="input" class="btn btn-primary"><i class="fa fa-plus-square-o fa-fw"></i> Input</button></a>
                    </div>
                    <div class="col-lg-6">
                    <!-- form pencarian produk -->
                    <form action="cari_produk.php" method="get" class="form-inline text-right">
                    <input type="text" class="form-control" name="qw" placeholder="Cari Produk" required>
                    <button type="submit" class="btn btn-primary">Cari</button>
                    </form>
                    <!-- form pencarian produk -->
                    </div>
                    <div style="clear:both;"></div>
                    </div>
                <!-- /.panel heading -->

                <!-- panel body -->
                    <div class="panel-body">

                    <!-- /.tabel responsive -->
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
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
                    <!-- /.panel body -->

                </div>
                <!-- /.panel -->

            </div>
            <!-- /.col lg 12-->

        </div>
        <!-- /.row -->


   </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->


  @endsection