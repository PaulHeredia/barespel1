@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">

        <div class="card-header">
            <h3>Crear Bar </h3>
        </div>
        <div class="card-body">

        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li class="text-danger">{{ $error }}</li>
            @endforeach
        </ul @endif <form action="{{route('bars.store')}}" method="POST" novalidate>
        @csrf
                        <div class="form-group">
            <label for="site_id">Site</label>
            <select class="form-control" name="site_id" id="site_id">
                @foreach((\App\Site::all() ?? [] ) as $site)
                <option value="{{$site->id}}">
                    {{$site->nombre}}</option>
                @endforeach
            </select>
        </div>
                                                
                                                        <div class="form-group">
            <label for="nombre">Nombre</label>
                        <input class="form-control String"  type="text"  name="nombre" id="nombre" value="{{old('nombre')}}"             maxlength="50"
                                    required="required"
                        >
                        @if($errors->has('nombre'))
            <p class="text-danger">{{$errors->first('nombre')}}</p>
            @endif
        </div>
                                <div class="form-group">
            <label for="abierto">Abierto</label>
                        <input class="form-control Boolean"  type="text"  name="abierto" id="abierto" value="{{old('abierto')}}"                         required="required"
                        >
                        @if($errors->has('abierto'))
            <p class="text-danger">{{$errors->first('abierto')}}</p>
            @endif
        </div>
                                                                        <div>
            <button class="btn btn-success" type="submit">Grabar</button>
            <a href="{{route('bars.index')}}" class="btn btn-primary">Regresar</a>
        </div>
        </form>
        </div>
    </div>
</div>
@endsection