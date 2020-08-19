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
            <h1> Buzons </h1>
        </div>
    <div class="card-body">

    <div>
        <a href="{{route('buzons.create')}}">New</a>
    </div>
    <table class="table table-striped">
        @if(count($buzons))
        <thead>
            <tr>
                <th>&nbsp;</th>
                                
                                
                                                <td>Descripcion</td>
                
                                
                                
                                
                            </tr>

        </thead>
        @endif
        <tbody>
            @forelse($buzons as $buzon)
            <tr>
                <td>
                    <a href="{{route('buzons.show',['buzon'=>$buzon] )}}">Show</a>
                    <a href="{{route('buzons.edit',['buzon'=>$buzon] )}}">Edit</a>
                    <a href="javascript:void(0)" onclick="event.preventDefault();
                    document.getElementById('delete-buzon-{{$buzon->id}}').submit();">
                        Delete
                    </a>
                    <form id="delete-buzon-{{$buzon->id}}" action="{{route('buzons.destroy',['buzon'=>$buzon])}}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
                                                                                                                <td>{{$buzon->descripcion}}</td>
                                                                                                                                
            </tr>
            @empty
            <p>No Buzons</p>
            @endforelse
        </tbody>
    </table>
    </div>
    </div>

</div>

@endsection