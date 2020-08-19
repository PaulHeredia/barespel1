@extends('layouts.app')
@section('content')
<div class="container">

    <div class="card mb-4">

        <div class="card-header">
            <h1> Preferencia Show </h1>
        </div>

    <div class="card-body">
                                                        <div class="form-group">
            <label class="col-form-label" for="value">Fecha</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$preferencia->fecha}}">
        </div>
                                <div class="form-group">
            <label class="col-form-label" for="value">Observacion</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$preferencia->observacion}}">
        </div>
                                                                    </div>

    </div>

    <div class="card mb-4">

                        
    </div>



    <a href="{{ url()->previous() }}">Back</a>
</div>
@endsection