@csrf 
<div class="form-group">
    <input type="text" class="form-control" id="cPerNombre" name="cPerNombre" placeholder="Ingrese su Nombre" value="{{ old('cPerNombre',$persona->cPerNombre) }}">
    {{ $errors->first('cPerNombre') }}
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="cPerApellido" name="cPerApellido" placeholder="Ingrese su Apellido" value="{{ old('cPerApellido',$persona->cPerApellido) }}">
    {{ $errors->first('cPerApellido') }}

  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="cPerDireccion" name="cPerDireccion" placeholder="Ingrese su Direccion" value="{{ old('cPerDireccion',$persona->cPerDireccion) }}">
    {{ $errors->first('cPerApellido') }}

  </div>
  <div class="form-group">
    <input type="date" class="form-control" id="dPerFecNac" name="dPerFecNac" placeholder="Ingrese su Fecha" value="{{ old('dPerFecNac',$persona->dPerFecNac) }}">
    {{ $errors->first('dPerFecNac') }}

  </div>
  <div class="form-group">
    <input type="number" class="form-control" id="nPerEdad" name="nPerEdad" placeholder="Ingrese su Edad" min="0" value="{{ old('nPerEdad',$persona->nPerEdad) }}">
    {{ $errors->first('nPerEdad') }}

  </div>
  <div class="form-group">
    <input type="number" class="form-control" id="nPerSueldo" name="nPerSueldo" placeholder="Ingrese su Sueldo" step="0.01" min="0.01"value="{{ old('nPerSueldo',$persona->nPerSueldo) }}">
    {{ $errors->first('nPerSueldo') }}

  </div>
  <div class="form-group">
    <select class="form-control"  id="nPerEstado" name="nPerEstado">
        <option value=" ">Seleccionar...</option>
        <option {{old('nPerEstado',$persona->nPerEstado)=="1"? 'selected':''}}  value="1">1</option>
        <option {{old('nPerEstado',$persona->nPerEstado)=="0"? 'selected':''}} value="0">0</option>
      </select>
    {{ $errors->first('nPerEstado') }}

  </div>

  <div class="form-group">
    {{-- <input type="submit" value="Enviar" class="btn btn-primary py-3 px-5"> --}}
    <button type="submit"  class="btn btn-primary py-3 px-5">{{$btnText}}</button>
  </div>