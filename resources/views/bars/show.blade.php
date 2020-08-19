@extends('layouts.app')
@section('content')
<div class="container">

    <div class="card mb-4">

        <div class="card-header">
            <h1> Bar Show </h1>
        </div>

    <div class="card-body">
                                                        <div class="form-group">
            <label class="col-form-label" for="value">Nombre</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$bar->nombre}}">
        </div>
                                <div class="form-group">
            <label class="col-form-label" for="value">Abierto</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$bar->abierto}}">
        </div>
                                                                    </div>

    </div>

    <div class="card mb-4">

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
                    @foreach($bar->menu as $menu)
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
                                <div class="card-header">
        <h2>Snack</h2>
        </div>
        <div class="card-body">
            <div>
                <a href="{{route('snacks.create')}}">New</a>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th>&nbsp;</th>
                                                                                                                                                                        <th> Nombre</th>
                                                                                                                                                                                                                                                                                                                    </tr>
                </thead>
                <tbody>
                    @foreach($bar->snack as $snack)
                    <tr>
                        <td>
                        <a href="{{route('snacks.show',['snack'=>$snack] )}}">Show</a>
                        <a href="{{route('snacks.edit',['snack'=>$snack] )}}">Edit</a>
                        <a href="javascript:void(0)" onclick="event.preventDefault();
                        document.getElementById('delete-snack-{{$snack->id}}').submit();">
                            Delete
                        </a>
                        <form id="delete-snack-{{$snack->id}}" action="{{route('snacks.destroy',['snack'=>$snack])}}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                        </td>
                                                                                                                                                                        <td> {{ $snack->nombre}}</td>
                                                                                                                                                                                                                                                                                                                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
                
    </div>



    <a href="{{ url()->previous() }}">Back</a>
</div>
@endsection