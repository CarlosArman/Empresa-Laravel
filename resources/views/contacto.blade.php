@extends('layout')

@section('title','Contacto')

@section('content')

        <section class="ftco-section contact-section ftco-degree-bg">
            <div class="container bg-light">
              <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                  <h2 class="h4">Información de Contacto</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3">
                  <p><span>Dirección:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                </div>
                <div class="col-md-3">
                  <p><span>Teléfono:</span> <a href="tel://949173599">+ 51 949 173 599</a></p>
                </div>
                <div class="col-md-3">
                  <p><span>Email:</span> <a href="mailto:info@company.com">info@company.com</a></p>
                </div>
                <div class="col-md-3">
                  <p><span>Website</span> <a href="#">company.com</a></p>
                </div>
              </div>
              <div class="row block-9">
                <div class="col-md-6 pr-md-5">
                    <form action="{{ route('contacto') }}" method="post">
                        @csrf {{-- Toquen para verificar que el formulario es seguro --}}                 
                           <div class="form-group">
                      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su Nombre" value="{{ old('nombre') }}">
                      {{ $errors->first('nombre') }}
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="email" name="email" placeholder="Ingrese su Email" value="{{ old('email') }}">
                      {{ $errors->first('email') }}

                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Ingrese el Asunto" value="{{ old('asunto') }}">
                      {{ $errors->first('asunto') }}

                    </div>
                    <div class="form-group">
                      <textarea name="mensaje" id="mensaje" cols="30" rows="7" id="mensaje" name="mensaje" class="form-control" placeholder="Ingrese un Mensaje" >{{ old('mensaje') }}</textarea>
                      {{ $errors->first('mensaje') }}

                    </div>
                    <div class="form-group">
                      <input type="submit" value="Enviar" class="btn btn-primary py-3 px-5">
                    </div>
                  </form>
                
                </div>
      
                <div class="col-md-6" id="map"></div>
              </div>
            </div>
          </section>

@endsection
                       