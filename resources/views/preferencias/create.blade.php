@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">

        <div class="card-header">
            <h1> Preferencia Create </h1>
        </div>
        <div class="card-body">

        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li class="text-danger">{{ $error }}</li>
            @endforeach
        </ul @endif <form action="{{route('preferencias.store')}}" method="POST" novalidate>
        @csrf
                        <div class="form-group">
            <label for="menu_id">Menu</label>
            <select class="form-control" name="menu_id" id="menu_id">
                @foreach((\App\Menu::all() ?? [] ) as $menu)
                <option value="{{$menu->id}}">
                    {{$menu->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="menu_id">Bar</label>
            <select class="form-control" name="bar_id" id="bar_id">
                @foreach((\App\Bar::all() ?? [] ) as $bar)
                <option value="{{$menu->id}}">
                    {{$bar->nombre}}</option>
                @endforeach
            </select>
        </div>
                
                                                        <div class="form-group">
            <label for="fecha">Fecha</label>
                        <input class="form-control Date"  type="date"  name="fecha" id="fecha" value="{{old('fecha')}}"                         required="required"
                        >
                        @if($errors->has('fecha'))
            <p class="text-danger">{{$errors->first('fecha')}}</p>
            @endif
        </div>
                                <div class="form-group">
            <label for="observacion">Observacion</label>
                        <textarea class="form-control" name="observacion" id="observacion" cols="30" rows="10">{{old('observacion')}}</textarea>
                        @if($errors->has('observacion'))
            <p class="text-danger">{{$errors->first('observacion')}}</p>
            @endif
        </div>
                                                                        <div>
            <button class="btn btn-primary" type="submit">Create</button>
            <a href="{{ url()->previous() }}">Back</a>
        </div>
        </form>
        </div>
    </div>
</div>
@endsection