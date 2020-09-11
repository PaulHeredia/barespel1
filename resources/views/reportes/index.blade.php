<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            </style>
</head>
<body  >
    

@extends('layouts.app')
@section('content')


    

<div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center font-weight-bold  "> Reportes </h1>
            </div>
        </div>
    <div class="card-group">
        <div class="card">
                        <a href="http://localhost/barespel1/public/reportes/listpreferencias?bar=3 " > <img  src="https://blog.ida.cl/wp-content/uploads/sites/5/2015/01/iStock_000019046733Small2.jpg" class="card-img-top" alt="..."> </a>
                    <div class="card-body">
                    <h5 class="card-title text-center font-weight-bold ">Reportes Preferencias</h5>
                    <p class="card-text text-justify"> Aqui encontraras el reporte de las preferencias de usuarios para los tres bares</p>
                     
                    </div>
        </div>
        
        <div class="card">
            <a href="http://localhost/barespel1/public/reportes/buzon"> <img src="https://www.ida.cl/wp-content/uploads/sites/5/2016/12/Reportes-de-metricas-para-guiar-las-decisiones-de-un-proyecto-digital.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
            <h5 class="card-title text-center font-weight-bold">Reportes de Buzon</h5>
            <p class="card-text text-justify">Aqui encontaras el reporte de los mensaje que dejan los usuarios sobre los bares, menu etc</p>
            
            </div>
        </div>
                <div class="card">
       
       <a href=http://localhost/bar1/public/reportes/guias > <img src=" https://escueladelvendedor.info/wp-content/uploads/2018/01/reportes_1516904773-1024x767.png" class="card-img-top" alt="..."></a> 
         <div class="card-body">
         <h5 class="card-title text-center font-weight-bold"> Reporte de Snacks</h5>
         <p class="card-text text-justify">   </p>
         
         </div>
  
  </div>
         
         
         

</body>

@endsection
</body>
</html>