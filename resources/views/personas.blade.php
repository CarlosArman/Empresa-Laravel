@extends('layout')

@section('title','Empresa')

@section('content')
<section class="ftco-section">
    <div class="container">
 
      <div class="col-md-12 mb-4">
        <h2 class="h4">Listado de Persona 
          @auth
          - <a href="{{ route('personas.create') }}">Nueva Persona</a>
          @endauth

        </h2>
      </div>
      <table class="table">
  <thead>
<tr>
  <td>Nombre Completo</td>
  <td>Direccion</td>
  <td>Fecha de Nacimiento</td>
  <td></td>
</tr>
  </thead>
<tbody>
  @if($personas)
  @foreach ($personas as $persona)
  <tr>
  <td><a href="{{ route('personas.show',$persona) }}">{{ $persona->cPerNombre }} {{$persona->cPerApellido}}</a>
  <td>{{$persona->cPerDireccion}}</td>
  <td>{{$persona->dPerFecNac}}</td>
  <td>  <a href="{{ route('personas.show',$persona) }}"> <button class="btn btn-primary icon-pencil">  </button> </a></td>
 </tr>
  @endforeach
  @else
  <tr>
      <td colspan="4">No hay servicios que mostrar</td>
  </tr>    
@endif
</tbody>
<tfoot>
  <tr>
    <td colspan="3">{{ $personas->links() }}</td>
</tr>
</tfoot>
</table>
    </div>
</section>
@endsection