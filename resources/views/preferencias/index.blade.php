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
            <h1> Preferencias </h1>
        </div>
    <div class="card-body">

    <div>
        <a href="{{route('preferencias.create')}}">New</a>
    </div>
    <table class="table table-striped">
        @if(count($preferencias))
        <thead>
            <tr>
                <th>&nbsp;</th>
                                
                                
                                                <td>Fecha</td>
                
                                                <td>Observacion</td>
                
                                
                                
                                
                            </tr>

        </thead>
        @endif
        <tbody>
            @forelse($preferencias as $preferencia)
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
                                                                                                                <td>{{$preferencia->fecha}}</td>
                                                                <td>{{$preferencia->observacion}}</td>
                                                                                                                                
            </tr>
            @empty
            <p>No Preferencias</p>
            @endforelse
        </tbody>
    </table>
    </div>
    </div>

</div>

@endsection