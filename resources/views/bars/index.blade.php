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
            <h1> Bars </h1>
        </div>
    <div class="card-body">

    <div>
        <a href="{{route('bars.create')}}">New</a>
    </div>
    <table class="table table-striped">
        @if(count($bars))
        <thead>
            <tr>
                <th>&nbsp;</th>
                                
                                
                                                <td>Nombre</td>
                
                                                <td>Abierto</td>
                
                                
                                
                                
                            </tr>

        </thead>
        @endif
        <tbody>
            @forelse($bars as $bar)
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
                                                                                                                <td>{{$bar->nombre}}</td>
                                                                <td>{{$bar->abierto}}</td>
                                                                                                                                
            </tr>
            @empty
            <p>No Bars</p>
            @endforelse
        </tbody>
    </table>
    </div>
    </div>

</div>

@endsection