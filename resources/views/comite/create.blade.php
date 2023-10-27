@extends('base')
@section('title', 'Inicio')
@section('content')
<?php $t = 0;
foreach ($comite as $clave => $valor) {
    if (substr($valor['date'], 0, 4) == date('Y')) {
        $t = $t + 1;
    }
} ?>
<div class="card">
    <h2 class="card-header">Crear Reporte de Comite Seguridad Salud Laborales
        <small class="float-right">Total: {{$t}}</small>
    </h2>
    <div class="card-body">
        <form method="POST" action="{{ route('comite.store') }}">
            @csrf
            <div class="card col-md-12">
                <div class="card-body">
                    <div class="row">

                        <div class="form-group col-md-6 ">
                            <label for="date_reunion">Fecha de Reunión</label>
                            <input class="form-control" id="date_reunion" type="date" name="date_reunion" value="" />
                        </div>

                        <div class="form-group col-md-6 ">
                            <label for="date_insasel">Fecha de Entrega a Inpsasel</label>
                            <input class="form-control" id="date_insasel" type="date" name="date_insasel" value="" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group col-md-8">
                <label for="observacion">Observacion</label>
                <textarea name="observacion" id="observacion" class="form-control" rows="1" required></textarea>
            </div>

            <div class="form-group col-md-12 text-center">
                <br>
                <button type="submit" class="btn btn-primary">Crear Registro</button>

                <a href="{{ route('comite.create') }}" class="btn btn-secondary">Cancelar</a>
            </div>
    </div>

    </form>
</div>



@endsection