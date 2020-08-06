@extends('layouts.app')
@section('content')
<div class="container">

    <div class="card mb-4">

        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h4>Ver Bar</h4>
                </div>
                <div class="col-4" style="text-align:right;padding-right:15px"> 
                    <a href="{{route('bars.index')}}" class="btn btn-primary">Regresar</a>
                </div>
            </div>
        </div>

    <div class="card-body">
                                                        <div class="form-group">
            <label class="col-form-label" for="value">Nombre</label>
            <input type="text" readonly class="form-control" id="staticEmail" value="{{$bar->nombre}}">
        </div>
                                <div class="form-group">
            <label class="col-form-label" for="value">Abierto</label>
            <input type="text" readonly class="form-control" id="staticEmail" value="{{$bar->abierto}}">
        </div>
                                                                    </div>

    </div>
</div>
@endsection