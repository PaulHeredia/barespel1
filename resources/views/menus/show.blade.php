@extends('layouts.app')
@section('content')
<div class="container">

    <div class="card mb-4">

        <div class="card-header">
            <h1> Menu Show </h1>
        </div>

    <div class="card-body">
                                                        <div class="form-group">
            <label class="col-form-label" for="value">Nombre</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$menu->nombre}}">
        </div>
                                <div class="form-group">
            <label class="col-form-label" for="value">Precio</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$menu->precio}}">
        </div>
                                <div class="form-group">
            <label class="col-form-label" for="value">Disponible</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$menu->disponible}}">
        </div>
                                <div class="form-group">
            <label class="col-form-label" for="value">Descripcion</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$menu->descripcion}}">
        </div>
                                                                    </div>

    </div>

    <div class="card mb-4">

                                        <div class="card-header">
        <h2>Preferencia</h2>
        </div>
        <div class="card-body">
            <div>
                <a href="{{route('preferencias.create')}}">New</a>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th>&nbsp;</th>
                                                                                                                                                                                                                        <th> Observacion</th>
                                                                                                                                                                                                                    </tr>
                </thead>
                <tbody>
                    @foreach($menu->preferencia as $preferencium)
                    <tr>
                        <td>
                        <a href="{{route('preferencias.show',['preferencia'=>$preferencia] )}}">Show</a>
                        <a href="{{route('preferencias.edit',['preferencia'=>$preferencia] )}}">Edit</a>
                        <a href="javascript:void(0)" onclick="event.preventDefault();
                        document.getElementById('delete-preferencia-{{$preferencia->id}}').submit();">
                            Delete
                        </a>
                        <form id="delete-preferencia-{{$preferencia->id}}" action="{{route('preferencias.destroy',['preferencia'=>$preferencia])}}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                        </td>
                                                                                                                                                                                                                        <td> {{ $preferencia->observacion}}</td>
                                                                                                                                                                                                                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
                
    </div>



    <a href="{{ url()->previous() }}">Back</a>
</div>
@endsection