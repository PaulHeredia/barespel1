<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <title>BAR ESPE-L</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #000000;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background-image: url("https://i.pinimg.com/originals/1d/da/26/1dda26bbc0424889bd543d49d6e6af1c.jpg");
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
                align-items: center;
                height: 100%;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    
<div>
<nav class="navbar navbar-expand-lg navbar-success bg-success">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
    <img src="http://moodleltga.espe.edu.ec/moodle/pluginfile.php/1/theme_eguru/logo/1593567274/logo-espe-blanco.png" class="rounded mx-auto d-block" alt="...">
    </li>
    <form class="form-inline my-2 my-lg-0">
    @if (Route::has('login'))
            <div class="top-right links bg-success">
                @auth
                    <a href="{{ url('/home') }}"class="btn btn-success btn-sm"style="color:white;">Home</a>
                @else
                    <a href="{{ route('login') }}"class="btn btn-success btn-sm"style="color:white;">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"class="btn btn-success btn-sm"style="color:white;">Register</a>
                    @endif
                @endauth
                @endif
    </form>
    </ul>
  </div>
</nav>
</div>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <div></div>

                <div>
                    @if (session('status'))
                        <div role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <br>
    <br>
    <br>
<div class="container">
    <div class="row">
        <div class="col-sm">
        <a href="http://localhost/barespel1/public" class="btn btn-primary btn-sm">Salir</a>
        </div>
    </div>
</div>
    <div class="container">
    <div class="row">
    <div class="col-md">
    <div class="card-deck">
        <div class="card">
            <img src="https://www.flaticon.es/premium-icon/icons/svg/763/763126.svg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title text-center">BAR </h5>
            <a href="http://localhost/barespel1/public/bars" class="btn btn-primary">Entrar</a>
        </div>
    </div>
    
    <div class="card">
        <img src="https://image.flaticon.com/icons/png/512/641/641149.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title text-center">MENU</h5>
            <a href="http://localhost/barespel1/public/menus" class="btn btn-primary btn-sm">Entrar</a>
        </div>
    </div>
    <div class="card">
        <img src="https://image.flaticon.com/icons/png/512/1323/1323764.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title text-center">BUZON</h5>
            <a href="http://localhost/barespel1/public/buzons" class="btn btn-primary btn-sm">Entrar</a>
        </div>
    </div>

</div>
</div>
</div>
</div>
</div>
<br>
    <div class="container">
    <div class="row">
    <div class="col-md">
    <div class="card-deck">
<div class="card">
        <img src="https://image.flaticon.com/icons/png/512/859/859415.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title text-center">SNACK</h5>
            <a href="http://localhost/barespel1/public/snacks" class="btn btn-primary btn-sm">Entrar</a>
        </div>
    </div>
    <div class="card">
        <img src="https://image.flaticon.com/icons/svg/1642/1642121.svg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title text-center">SUGERENCIA</h5>
            <a href="http://localhost/barespel1/public/preferencias" class="btn btn-primary btn-sm">Entrar</a>
        </div>
    </div>
    <div class="card">
        <img src="https://image.flaticon.com/icons/png/512/1115/1115573.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title text-center">CAMPUS</h5>
            <a href="http://localhost/barespel1/public/sites" class="btn btn-primary btn-sm">Entrar</a>
        </div>
    </div>
    </div>
</div>
</div>
</div>
</div>
<br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>

