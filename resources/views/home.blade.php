
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="/lib/jquery-1.12.2.min.js"></script>
         <script src="/lib/bootstrap.min.js"></script>
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
   
</head>
<body>


@extends('layouts.app')
@section('content')
<div class="container">

    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif


 



  <div class="container">
  
  <nav class="navbar navbar-light bg-light">
  <form class="form-inline">
    <a class="btn btn-outline-success text-cen" href=" http://localhost/barespel1/public" type="button">Pagina Principal </a>
    <a class="btn btn-sm btn-outline-secondary" href="http://localhost/barespel1/public/reportes" type="button">Reportes </a>
    <div class="spinner-border text-primary" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-border text-secondary" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-border text-success" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-border text-danger" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-border text-warning" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-border text-info" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-border text-light" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-border text-dark" role="status">
  <span class="sr-only">Loading...</span>
</div>
  </form>
</nav>


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

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
<table class="table table-borderless">
    <thead>
      <tr>
        <tr>
          <td class="table-light" colspan="3"><p style="color: black; text-align: center;margin-left: auto;">Copyright ©2020 All rights reserved | This template is made with  by IgniaDragneel</p></td>
        </tr>
      </tr>
    </thead>
  </table>  
@endsection