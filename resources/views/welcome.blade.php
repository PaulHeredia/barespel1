
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script>
       function startTime() {
    var today = new Date();
    var hr = today.getHours();
    var min = today.getMinutes();
    var sec = today.getSeconds();
    ap = (hr < 12) ? "<span>AM</span>" : "<span>PM</span>";
    hr = (hr == 0) ? 12 : hr;
    hr = (hr > 12) ? hr - 12 : hr;
    //Add a zero in front of numbers<10
    hr = checkTime(hr);
    min = checkTime(min);
    sec = checkTime(sec);
    document.getElementById("clock").innerHTML = hr + ":" + min + ":" + sec + " " + ap;
    
    var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    var days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
    var curWeekDay = days[today.getDay()];
    var curDay = today.getDate();
    var curMonth = months[today.getMonth()];
    var curYear = today.getFullYear();
    var date = curWeekDay+", "+curDay+" "+curMonth+" "+curYear;
    document.getElementById("date").innerHTML = date;
    
    var time = setTimeout(function(){ startTime() }, 500);
}
function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}
        </script>
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
            .dropdown .dropdown-menu{
opacity: 0;
transition:         all 400ms ease;
-moz-transition:    all 400ms ease;
-webkit-transition: all 400ms ease;
-o-transition:      all 400ms ease;
-ms-transition:     all 400ms ease;
}
.dropdown:hover .dropdown-menu {
       display: block;
       opacity: 1;
}
  
.clockdate-wrapper {
    background-color: #009846;
    padding:25px;
    max-width:350px;
    width:100%;
    text-align:center;
    border-radius:5px;
    margin:0 auto;
    margin-top:15%;
}
#clock{
    background-color:#009846;
    font-family: sans-serif;
    font-size:60px;
    text-shadow:0px 0px 1px #fff;
    color:#fff;
}
#clock span {
    color:#fff;
    text-shadow:0px 0px 1px #333;
    font-size:30px;
    position:relative;
    top:-27px;
    left:-10px;
}
#date {
    letter-spacing:10px;
    font-size:14px;
    font-family:arial,sans-serif;
    color:#fff;
}
        </style>
  
<div>
 
</div>
<br>
 
</head>

@extends('layouts.app')
@section('content')
<body onload="startTime()">
<div class="container">

    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    <div class="container">
  
  <nav class="navbar navbar-light bg-light">
  <form class="form-inline">
  <a class="btn btn-sm btn-outline-secondary" href="http://localhost/barespel1/public/home"  type="button">Administracion  </a>
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


<div class="container">


  <div class="row">
     
    <div class="col-sm  card">
    <h2 class="text-center font-weight-bold">MENU</h2>
    <table class="table table-bordered table-active "> 
    <thead>
                        <tr class="table-warning">                           
                            <td class="text-center font-weight-bold">CAMPUS</td>
                            <td class="text-center font-weight-bold">BAR</td>
                            <td class="text-center font-weight-bold">NOMBRE</td>                            
                            <td class="text-center font-weight-bold">PRECIO</td>
                            <td class="text-center font-weight-bold">DESCRIPCION</td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($menus as $menu)
                    <tr>                          
                         <td><p class="card-text">{{$menu->bar->site->nombre}} </p></td>  
                         <td><p class="card-text">{{$menu->bar->nombre}} </p></td>  
                         <td><p class="card-text">{{$menu->nombre}}</p></td>  
                         <td><p class="card-text">{{$menu->precio}}$</p></td>
                         <td><p class="card-text">{{$menu->descripcion}}</p></td> 
                         <br>
                            
                     </tr>
                     @endforeach
                     </tbody>
  </table>
    </div>
    </div>

    
    </div>
    <div class="col-sm ">
    <div class="card">
    <div class="card-body">
    <div class="container">
  <div class="row">
   
    <h2 class="text-center font-weight-bold">Snacks</h2>
    <table class="table table-bordered table-active  "> 
    <thead>
                        <tr class="table-warning">                           
                            <td class="text-center font-weight-bold">CAMPUS</td>
                            <td class="text-center font-weight-bold">BAR</td>
                            <td class="text-center font-weight-bold">NOMBRE</td>                            
                            <td class="text-center font-weight-bold">PRECIO</td>
                            <td class="text-center font-weight-bold">DESCRIPCION</td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($menus as $menu)
                    <tr>                          
                         <td><p class="card-text">{{$menu->bar->site->nombre}} </p></td>  
                         <td><p class="card-text">{{$menu->bar->nombre}} </p></td>  
                         <td><p class="card-text">{{$menu->nombre}}</p></td>  
                         <td><p class="card-text">{{$menu->precio}}$</p></td>
                         <td><p class="card-text">{{$menu->descripcion}}</p></td> 
                         <br>
                            
                     </tr>
                     @endforeach
                     </tbody>
  </table>
    </div>
  </div>
</div>
</div>
</div>
    <div class="col-sm ">
     
    </div>
  </div>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm ">
     <div class="card">
    <img src="https://image.flaticon.com/icons/png/512/15/15006.png" class="card-img-top" width="5" height="170">
    <div class="card-body">
        <div class="card text-center">
            <p>Click aqui para dejar un Mensaje</p>
            <a href="http://localhost/barespel1/public/buzons/create" class="btn btn-success"> Ir</a>
        </div>
  </div>
</div>
    </div>
   
<br>
  
    <div class="col-sm ">
    <div class="card">
    <img src="https://image.flaticon.com/icons/svg/1642/1642121.svg" class="card-img-top" width="10" height="160">
    <div class="card-body">
    <div class="card text-center">
            <p>Click aqui pra dejar un Preferencia </p>
            <a href="http://localhost/barespel1/public/preferencias/create" class="btn btn-success"> Ir</a>
        </div>
  </div>
</div>
    </div>
  </div>
</div> 
<div id="clockdate">
  <div class="clockdate-wrapper">
    <div id="clock"></div>
    <div id="date"></div>
  </div>
</div>
 
<br>

 
 
<table class="table table-borderless">
    <thead>
      <tr>
        <tr>
          <td class="table-light" colspan="3"><p style="color: black; text-align: center;margin-left: auto;">Copyright ©2020 All rights reserved | This template is made with  by IgniaDragneel</p></td>
        </tr>
      </tr>
    </thead>
 
 
  </table>  

</div>
 l
 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 

 
</body>
</html>
@endsection