@extends('base')
@section('title', 'Inicio')
@section('content')

<?php $t = 0;
foreach ($ambient as $clave => $valor) {
    if (substr($valor['date'], 0, 4) == date('Y')) {
        $t = $t + 1;
    }
} ?>

<div class="card">
    <h2 class="card-header">
        Crear Registro de Visita Gerencial
        <small class="float-right">Total de registros: {{$t}}</small>
        </a>
    </h2>
    <div class="card-body">
        <div class="row">
            <form method="POST" class="row" action="{{ route('ambiente.store') }}">
                @csrf

                <div class="form-group col-md-6">
                    <label for="name">Lugar de la visita</label>
                    <input type="text" name="name" id="name" class="form-control" rows="1" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="description">Descripción</label>
                    <input type="text" name="description" id="description" class="form-control" rows="4" required>
                </div>

                <div class="col-md-5">
                    <label for="personal">Nombre de Acompañantes</label>
                    <br>
                    <select style="width: 100%;" class="col-md-5 form-control" name="personal[]" id="personal" multiple aria-label="Default select example" required>
                        @foreach ($usuarios as $usuario)
                        <option value="{{$usuario->nombres}}">{{$usuario->nombres}} {{$usuario->apellidos}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-5">
                    <label for="date">Fecha</label>
                    <input class="form-control" id="date" type="date" name="date" value="" required/>
                </div>

                <div class="form-group col-md-12 text-center">
                    <button for="registrar" type="submit" id="alerta" name="alerta" class="btn btn-primary registrar">crear Registro</button>
                    <a href="{{ route('ambiente.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
   
    $("#personal").select2();
</script>
@endsection