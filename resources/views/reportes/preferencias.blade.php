@extends('layouts.app')
@section('content')

<div class="container">
 
     <button type="button" class="btn btn-primary">Regresar</button>
        <div class="row">
            <div class="col">
                
            <form method="GET"  action="{{route('reportes.preferencias')}}" >
                    <div class="form-group">
                        <label for="">Seleccione una Carrera</label>
                        <select class="custom-select" id="bar" name="bar" required>
                        @foreach($bares as $bar  )                                  
                               <option value="{{ $bar ->id}}">{{ $bar ->nombre}}</option>
                         @endforeach
                        </select>
                    </div>
                    <button type="submit"    class="btn btn-primary">Procesar  Reporte</button>
            </form>
            </div>
        </div>
     </div>
@endsection