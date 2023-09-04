@extends('base')
@section('content')

<div class="container">
<h1>Crear Registro de Visita Gerencial</h1>

   
<div class="card-body">
                    <form method="POST" action="{{ route('ambiente.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Lugar de la visita</label>
                            <textarea type="text" name="name" id="name" class="form-control" rows="1" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea type="text "name="description" id="description" class="form-control" rows="4" required></textarea>
                        </div>

                        <input type="number"name="cantidad" id="cantidad" class="form-control">
                            <label for="acompanantes">Cantidad de Personas</label>
                        </input>

                        <div class="form-group">
                            <label for="acompanantes">Nombre de Acompañantes</label>
                            <textarea name="acompanantes" id="acompanante" class="form-control" rows="1" required></textarea>
                        </div>

                        <div class="container px-1 px-sm-5 mx-auto">
  <form autocomplete="off">
    <div class="flex-row d-flex justify-content-center">
      <div class="col-lg-6 col-11 px-1">
        <div class="input-group input-daterange">
          <input type="date" id="start" class="form-control text-left mr-2" name="date">
        </div>
      </div>
    </div>
  </form>

  <div class="form-group">
                            
                            <button type="submit" class="btn btn-primary">Crear Registro</button>
                        
                            <a href="{{ route('indicators.index') }}" class="btn btn-secondary">Cancelar</a>
                        </div>
</div>
</div>

  
@endsection
