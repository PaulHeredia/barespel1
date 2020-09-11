@extends('layouts.app')
@section('content')
<div class="container">

    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h4> MENU </h4>
                </div>
                <div class="col-4" style="text-align:right;padding-right:35px"> 
                    <a href="{{route('menus.create')}}" class="btn btn-success">Nuevo</a>
                    <a href="http://localhost/barespel1/public" class="btn btn-danger">Salir</a>
                </div>
            </div>
        </>
    <div class="card-body">

    <table class="table table-striped table table-dark">
        @if(count($menus))
        <thead>
            <tr>
                <th>&nbsp;</th>
                                
                                
                                                <td>Nombre</td>
                
                                                <td>Precio</td>
                
                                                <td>Disponible</td>
                
                                                <td>Descripcion</td>
                
                                
                                
                                
                            </tr>

        </thead>
        @endif
        <tbody>
            @forelse($menus as $menu)
            <tr>
                <td>
                    <a href="{{route('menus.show',['menu'=>$menu] )}}" class="btn btn-info">Ver</a>
                    <a href="{{route('menus.edit',['menu'=>$menu] )}}" class="btn btn-primary">Editar</a>
                    <a href="javascript:void(0)" onclick="event.preventDefault();
                    document.getElementById('delete-menu-{{$menu->id}}').submit();" class="btn btn-danger">
                        Borrar
                    </a>
                    <form id="delete-menu-{{$menu->id}}" action="{{route('menus.destroy',['menu'=>$menu])}}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
                                                                                                                <td>{{$menu->nombre}}</td>
                                                                <td>{{$menu->precio}}</td>
                                                                <td>{{$menu->disponible}}</td>
                                                                <td> @if($menu->disponible== ('1'))
                                    SI
                                    @else NO
                                    @endif
                                </td>
                                                                                                                                
            </tr>
            @empty
            <p>No Existen Datos que Mostrar...</p>
            @endforelse
        </tbody>
    </table>
    </div>
    </div>

</div>

@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-----Fondo de Pantalla-->
<style>
    body 
     {
         background-image: url("https://images.squarespace-cdn.com/content/v1/50305c7684ae7fae2e65756a/1393362846273-SX1EASUOPU5H5DXUCOCZ/ke17ZwdGBToddI8pDm48kF5xMYsyz3tCcBsPeCTtxyQUqsxRUqqbr1mOJYKfIPR7LoDQ9mXPOjoJoqy81S2I8N_N4V1vUb5AoIIIbLZhVYxCRW4BPu10St3TBAUQYVKcpXxo4C9Dj1duSBRqdUdFyYHIzbzQwJBejsp293be3aPANGJ5roVV3fjoZTG7W305/Dublin-Ireland-Bison-Bar-HDR.jpg");
         background-position: center center;
         background-repeat: no-repeat;
         background-attachment: fixed;
         background-size: cover;
         align-items: center;
         height: 100%;
    }
  </style>
</head>
<body>
<div class="bg-success">
<img src="http://moodleltga.espe.edu.ec/moodle/pluginfile.php/1/theme_eguru/logo/1593567274/logo-espe-blanco.png" class="rounded mx-auto d-block" alt="...">
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>   
 
</body>
</html>