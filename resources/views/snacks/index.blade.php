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
            <h1> Snacks </h1>
        </div>
    <div class="card-body">

    <div>
        <a href="{{route('snacks.create')}}">New</a>
    </div>
    <table class="table table-striped">
        @if(count($snacks))
        <thead>
            <tr>
                <th>&nbsp;</th>
                                
                                
                                                <td>Nombre</td>
                
                                                <td>Precio</td>
                
                                                <td>Disponible</td>
                
                                
                                
                                
                            </tr>

        </thead>
        @endif
        <tbody>
            @forelse($snacks as $snack)
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
                                                                                                                <td>{{$snack->nombre}}</td>
                                                                <td>{{$snack->precio}}</td>
                                                                <td>{{$snack->disponible}}</td>
                                                                                                                                
            </tr>
            @empty
            <p>No Snacks</p>
            @endforelse
        </tbody>
    </table>
    </div>
    </div>

</div>

@endsection