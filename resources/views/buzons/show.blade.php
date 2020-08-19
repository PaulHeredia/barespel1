@extends('layouts.app')
@section('content')
<div class="container">

    <div class="card mb-4">

        <div class="card-header">
            <h1> Buzon Show </h1>
        </div>

    <div class="card-body">
                                                        <div class="form-group">
            <label class="col-form-label" for="value">Descripcion</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$buzon->descripcion}}">
        </div>
                                                                    </div>

    </div>

    <div class="card mb-4">

                        
    </div>



    <a href="{{ url()->previous() }}">Back</a>
</div>
@endsection