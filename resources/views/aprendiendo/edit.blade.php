@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        Editar Reporte de Aprendiendo en el Trabajo
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('ambiente.create') }}"><span> <i class="fas fa-plus"></i> Crear Reporte</span></a>
    </h2>

    <div class="card-body">
        <form method="POST" class="row" action="{{ route('aprendiendo.update', $aprendiendo->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                    <label for="cantidad_actividad">Cantidad de Aprendiendo en el Trabajo</label>
                    <input type="number" name="cantidad_actividad" id="cantidad_actividad" class="form-control" value=0 />
                </div>
                <div class="row" id="fechas"></div>

                <div class="form-group">
                    <label for="observacion">Observacion</label>
                    <input type="text" name="observacion" id="observacion" class="form-control" />
                </div>

                <div class="form-group col-md-12 text-center">
                    <br>
                    <button type="submit" class="btn btn-primary">Crear Registro</button>
                    <a href="{{ route('aprendiendo.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>

            <div class="form-group col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Actualizar Registro</button>
                <a href="{{ route('aprendiendo.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection