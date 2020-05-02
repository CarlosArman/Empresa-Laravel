@extends('layout')

@section('title','Crear Persona')

@section('content')

<section class="ftco-section contact-section ftco-degree-bg">
    <div class="container bg-light">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
              <h2 class="h4">Información de Persona</h2>
            </div>
        </div>

          <div class="row block-9">
            <div class="col-md-6 pr-md-5">
    <table >
        @include('partials.validation-errors')
        <form action="{{ route('personas.store') }}" method="post">
        @include('partials.form',['btnText'=>'Guardar'])
        </form>
        </table>
    </div>
      
    <div class="col-md-6 ftco-animate" >
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('images/work-4.jpg')}});">
              </a>
     
            </div>
    </div>
  </div>
</div>

</section>
@endsection