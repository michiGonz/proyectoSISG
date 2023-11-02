@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        Crear Reporte de Eficiencia Operativa

    </h2>
    <div class="card-body">
        <form method="POST" action="{{ route('operativa.store') }}">

            <div class="table table-striped-columns">
                @csrf

                <div class="form-group ">
                    <label for="acciones_pendientes">Acciones Pendientes</label>
                    <input type="number" name="acciones_pendientes" id="acciones_pendientes" class="form-control" value=0 />
                </div>

                <div class="form-group ">
                    <label for="acciones_ejecutadas">Acciones Ejecutados</label>
                    <input type="number" name="acciones_ejecutadas" id="acciones_ejecutadas" class="form-control" value=0 />
                </div>

                <div class="form-group">
                    <label for="observacion">Observacion</label>
                    <input type="text " name="observacion" id="observacion" class="form-control" />
                </div>

                <div class="row" id="date"></div>

                <div class="form-group col-md-12 text-center">
                    <br>
                    <button type="submit" class="btn btn-primary">Crear Registro</button>

                    <a href="{{ route('operativa.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
        </form>
    </div>
    
</div>

@endsection