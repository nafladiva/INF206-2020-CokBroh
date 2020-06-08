<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <title>@yield('title', 'CokBroh')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 <link rel="stylesheet" href="css/style_admin.css">
 <link rel="stylesheet" href="fontawesome-free/css/all.min.css">

 @yield('style')
  </head>
  <nav class="navbar navbar-light fixed-top" style="background-color: #2E8B57;">
    <!-- <div class="container"> --><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN | <b>COKBROH</b> </a>
        
          <div class="icon ml-3">
              <h5>
                <i class="fas fa-sign-out-alt mr-5" data-toggle="tooltip" title="Sign Out"></i>
              </h5>
          </div>
        
</nav>
{{-- Admin Panel --}}
<div class="row no-gutters">
    <div class="col-md-2 mt-5 pr-3 pt-3" style="background-color: #2E8B57;" style="width: 260px">
        <ul class="nav flex-column ml-3 mb-5">
            <li class="nav-item">
              <a class="nav-link active" href="/"><font color="black"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a></font><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/data-user"><font color="black"><i class="fas fa-users mr-2"></i>Data user</a></font><hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/data-kupon"><font color="black"><i class="far fa-address-card mr-2"></i></i>Data Kupon</a></font><hr class="bg-secondary">
              </li>
            </ul>
    </div>


    @yield('content')

    <!--End Admin Panel-->





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="{{url('js/admin.js')}}"></script>
</body>
</html>