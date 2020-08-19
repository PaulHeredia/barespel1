@extends('layouts.app')
@section('content')
<div class="container">

    <div class="card mb-4">

        <div class="card-header">
            <h1> Site Show </h1>
        </div>

    <div class="card-body">
                                        <div class="form-group">
            <label class="col-form-label" for="value">Nombre</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$site->nombre}}">
        </div>
                                <div class="form-group">
            <label class="col-form-label" for="value">Direccion</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$site->direccion}}">
        </div>
                                                                    </div>

    </div>

    <div class="card mb-4">

                        <div class="card-header">
        <h2>Bar</h2>
        </div>
        <div class="card-body">
            <div>
                <a href="{{route('bars.create')}}">New</a>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th>&nbsp;</th>
                                                                                                                                                                        <th> Nombre</th>
                                                                                                                                                                                                                                                                    </tr>
                </thead>
                <tbody>
                    @foreach($site->bar as $bar)
                    <tr>
                        <td>
                        <a href="{{route('bars.show',['bar'=>$bar] )}}">Show</a>
                        <a href="{{route('bars.edit',['bar'=>$bar] )}}">Edit</a>
                        <a href="javascript:void(0)" onclick="event.preventDefault();
                        document.getElementById('delete-bar-{{$bar->id}}').submit();">
                            Delete
                        </a>
                        <form id="delete-bar-{{$bar->id}}" action="{{route('bars.destroy',['bar'=>$bar])}}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                        </td>
                                                                                                                                                                        <td> {{ $bar->nombre}}</td>
                                                                                                                                                                                                                                                                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
                                <div class="card-header">
        <h2>Menu</h2>
        </div>
        <div class="card-body">
            <div>
                <a href="{{route('menus.create')}}">New</a>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th>&nbsp;</th>
                                                                                                                                                                        <th> Nombre</th>
                                                                                                                                                                                                <th> Descripcion</th>
                                                                                                                                                                                                                    </tr>
                </thead>
                <tbody>
                    @foreach($site->menu as $menu)
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
                                                                                                                                                                        <td> {{ $menu->nombre}}</td>
                                                                                                                                                                                                <td> {{ $menu->descripcion}}</td>
                                                                                                                                                                                                                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
                
    </div>



    <a href="{{ url()->previous() }}">Back</a>
</div>
@endsection