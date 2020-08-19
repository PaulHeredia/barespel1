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
            <h1> Menus </h1>
        </div>
    <div class="card-body">

    <div>
        <a href="{{route('menus.create')}}">New</a>
    </div>
    <table class="table table-striped">
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
                    <a href="{{route('menus.show',['menu'=>$menu] )}}">Show</a>
                    <a href="{{route('menus.edit',['menu'=>$menu] )}}">Edit</a>
                    <a href="javascript:void(0)" onclick="event.preventDefault();
                    document.getElementById('delete-menu-{{$menu->id}}').submit();">
                        Delete
                    </a>
                    <form id="delete-menu-{{$menu->id}}" action="{{route('menus.destroy',['menu'=>$menu])}}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
                                                                                                                <td>{{$menu->nombre}}</td>
                                                                <td>{{$menu->precio}}</td>
                                                                <td>{{$menu->disponible}}</td>
                                                                <td>{{$menu->descripcion}}</td>
                                                                                                                                
            </tr>
            @empty
            <p>No Menus</p>
            @endforelse
        </tbody>
    </table>
    </div>
    </div>

</div>

@endsection