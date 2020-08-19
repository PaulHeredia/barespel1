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
            <h1> Sites </h1>
        </div>
    <div class="card-body">

    <div>
        <a href="{{route('sites.create')}}">New</a>
    </div>
    <table class="table table-striped">
        @if(count($sites))
        <thead>
            <tr>
                <th>&nbsp;</th>
                                
                                                <td>Nombre</td>
                
                                                <td>Direccion</td>
                
                                
                                
                                
                            </tr>

        </thead>
        @endif
        <tbody>
            @forelse($sites as $site)
            <tr>
                <td>
                    <a href="{{route('sites.show',['site'=>$site] )}}">Show</a>
                    <a href="{{route('sites.edit',['site'=>$site] )}}">Edit</a>
                    <a href="javascript:void(0)" onclick="event.preventDefault();
                    document.getElementById('delete-site-{{$site->id}}').submit();">
                        Delete
                    </a>
                    <form id="delete-site-{{$site->id}}" action="{{route('sites.destroy',['site'=>$site])}}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
                                                                                <td>{{$site->nombre}}</td>
                                                                <td>{{$site->direccion}}</td>
                                                                                                                                
            </tr>
            @empty
            <p>No Sites</p>
            @endforelse
        </tbody>
    </table>
    </div>
    </div>

</div>

@endsection