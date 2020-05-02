@extends('layout')

@section('title','Empresa | Persona - ' . $persona->nPerCodigo )

@section('content')
<section class="ftco-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
              <h2 class="h2">Información de Persona Nº {{$persona->nPerCodigo}}</h2>
            </div>
        </div>


   <table class="mb-4">
  <thead>
    <tr>
        <td>Nombre Completo:</td>
        <td>{{ $persona->cPerNombre }} {{ $persona->cPerApellido }}</td>
        <td >
            @auth

            <button  class="btn btn-primary icon-pencil"> <a href="{{route('personas.edit',$persona)}}"> Editar</a></button>
        </td>
        <td>
            <form action="{{route('personas.destroy',$persona)}}" method="POST">
                @csrf @method('DELETE')
                <button class="btn btn-primary icon-trash" > Eliminar</button>
            </form>
            @endauth

        </td>
    </tr>

    <tr>
        <td>Direccion: </td>
        <td>{{ $persona->cPerDireccion }}</td>
        <td></td>

    </tr>
    <tr>
        <td>Fecha de Nacimiento:</td>
        <td> {{ $persona->dPerFecNac }}</td>
        <td></td>
    </tr>
    <tr>
        <td>Edad: </td>
        <td>{{ $persona->nPerEdad }}</td>
        <td></td>
    </tr>
    <tr>
        <td>Sueldo: </td>
        <td>{{ $persona->nPerSueldo }}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3">{{ $persona->created_at->diffForHumans() }}</td>

    </tr>
  </thead>
 
<tbody>
 
</tbody>
<tfoot>

</tfoot>
</table>
    </div>
</section>
@endsection