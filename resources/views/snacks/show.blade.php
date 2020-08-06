@extends('layouts.app')
@section('content')
<div class="container">

    <div class="card mb-4">

        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h4>Ver Snack</h4>
                </div>
                <div class="col-4" style="text-align:right;padding-right:15px"> 
                    <a href="{{route('snacks.index')}}" class="btn btn-primary">Regresar</a>
                </div>
            </div>
        </div>

    <div class="card-body">
                                                        <div class="form-group">
            <label class="col-form-label" for="value">Nombre</label>
            <input type="text" readonly class="form-control" id="staticEmail" value="{{$snack->nombre}}">
        </div>
                                <div class="form-group">
            <label class="col-form-label" for="value">Precio</label>
            <input type="text" readonly class="form-control" id="staticEmail" value="{{$snack->precio}}">
        </div>
                                <div class="form-group">
            <label class="col-form-label" for="value">Disponible</label>
            <input type="text" readonly class="form-control" id="staticEmail" value="{{$snack->disponible}}">
        </div>
                                                                    </div>

    </div>
</div>
@endsection