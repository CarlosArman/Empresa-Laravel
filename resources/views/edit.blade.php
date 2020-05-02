@extends('layout')

@section('title','Editar Persona')

@section('content')
<section class="ftco-section">
    <div class="container">
<table cellpadding="3" cellspaceing="5">
    <div class="col-md-12 mb-4">
        @auth
        <h2 class="h4">Información de Persona</h2>
        @endauth
      </div>
@include('partials.validation-errors')
<form action="{{route('personas.update', $persona)}}" method="post">
 @method('PATCH')
 @include('partials.form',['btnText'=>'Actualizar'])
</form>
</table>
</div>
</section>
@endsection
