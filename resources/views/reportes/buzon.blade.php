@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h4> Buzon</h4>
                </div>
                <div class="col-4" style="text-align:right;padding-right:35px">
                    <a href="http://localhost/barespel1/public/reportes" class="btn btn-success">Regresar</a>
                  
                </div>
            </div>
            </>
            <div class="card-body">
                @foreach($bares as $bar)
                <p>{{$bar->nombre}} </p>

                <table class="table table-striped">

                    <thead class="table-dark">
                        <tr>

                            <td>Fecha / Hora</td>

                            <td>Comentario</td> 
                        </tr>

                    </thead>

                    <tbody>
                        @foreach($buzons as $buzon)
                        @if(strcmp($bar->id,$buzon->id)===0)


                        <tr>

                           
                            <td>{{$buzon->created_at}}</td>
                            <td>{{$buzon->descripcion}}</td>
                           
                        </tr>
                        @endif
                        @endforeach


                    </tbody>
                </table>
                @endforeach

            </div>

            @endsection