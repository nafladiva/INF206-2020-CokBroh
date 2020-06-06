<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet">

    <!-- My Css -->
    <!-- <link rel="stylesheet" href="{{url('assets/css/mystyle.css')}}"> -->
    <link rel="stylesheet" href="{{url('css/first.css')}}">
    
    <!-- Icons -->
    <link href="{{url('assets/css/nucleo-icons.css')}}" rel="stylesheet">
    <link href="{{url('fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Argon CSS -->
    <link type="text/css" href="{{url('assets/css/argon-design-system.min.css')}}" rel="stylesheet">

@yield('style')
</head>

<body >
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="{{url('/')}}"><i class="btn btn-outline-white">{{ config('app.name', 'CokBroh') }}</a></i>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-default">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="javascript:void(0)">
                            <!-- <img src="../../assets/img/brand/blue.png"> -->
                            <i class="fas fa-mug-hot"></i>   CokBroh
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            
            <ul class="navbar-nav ml-lg-auto">
                <li class="nav-item active">
                        <a class="nav-link" href="{{url('home')}}" >Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('Howto')}}" >How To</a>
                </li>
                <li class="nav-item active">
                        <a class="nav-link" href="{{url('about')}}" >About</a>
                </li>
                    <!-- Authentication Links -->
                        @guest
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->nama_depan }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
            </ul>
        </div>
        </div>
</nav>
<!-- End Navbar -->

<!-- Jumbotron -->
<div class="jumbotron">

@yield('content')

</div>
<!-- End Jumbotron -->


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <!-- Core -->
    <script src="{{url('assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/js/core/bootstrap.min.js')}}"></script>

    <!-- Optional plugins -->
    <script src="{{url('assets/vendor/PLUGIN_FOLDER/PLUGIN_SCRIPT.js')}}"></script>

    <!-- Argon JS -->
    <script src="{{url('assets/js/argon-design-system.js')}}"></script>

    <!-- My Script -->
    <script src="{{url('assets/js/myscript.js')}}"></script>

</body>
</html>