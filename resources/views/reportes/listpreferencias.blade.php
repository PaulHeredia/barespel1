@extends('layouts.app')
@section('content')

<div class="container">
 
<a type="button" class="btn btn-primary"  href="http://localhost/barespel1/public/reportes">Regresar</a>
      <div class="row">
            <div class="col">


<table class="table table-striped">

<thead class="table-dark">
    <tr>
                         
                        <td>Fecha</td>
                        <td>Bar</td>
                        <td>Menu</td>
                        <td>Observaciones</td>
                    

</thead>

<tbody>
 <tr>
                    @foreach($preferencias as $preferencia)

                    <td>{{$preferencia->created_at}}</td> 
                    <td>{{$preferencia->menu->bar->nombre}}</td>  
                    <td>{{$preferencia->menu->nombre}}</td>
                    <td>{{$preferencia->observacion}}</td> 
                    
               
                   </tr>
                   @endforeach
                   
</tbody>
</table>
</div>
</div>
</div>
@endsection