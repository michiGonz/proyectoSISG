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
    <small class="float-right">Acomulado {{$t}}</small>
    </h2>
    <div class="card-body">
        <form method="POST" action="{{ route('comite.store') }}">


            <div class="table table-striped-columns">
                @csrf
           

                <div class="form-group">
                    <label for="observacion">Observacion</label>
                    <input type="text " name="observacion" id="observacion" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="date">Fecha</label>
                    <input class="form-control" id="date" type="date" name="date" value="" />
                </div>

                <div class="form-group col-md-12 text-center">
                    <br>
                    <button type="submit" class="btn btn-primary">Crear Registro</button>

                    <a href="{{ route('comite.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
        </form>
    </div>
    </tr>
    </tr>
    </tbody>
</div>

@endsection