@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">Crear Reporte de Monitoreos Ambientales</h2>
    <div class="card-body">
                <form method="POST" action="{{ route('monitoreos.store') }}">

                    <div class="table table-striped-columns">
                        @csrf
                        <div class="form-group ">
                            <label for="cantidad_actividad">Acciones Ejecutados</label>
                            <input type="number" name="cantidad_actividad" id="cantidad_actividad" class="form-control" value=0 />
                        </div>

                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text " name="nombre" id="nombre" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="observacion">Observacion</label>
                            <input type="text " name="observacion" id="observacion" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="date">Fecha</label>
                            <input class="form-control" id="date" type="date" name="date" value="" />
                        </div>

                        <div class="form-group">
                            <br>
                            <button type="submit" class="btn btn-primary">Crear Registro</button>

                            <a href="{{ route('monitoreos.index') }}" class="btn btn-secondary">Cancelar</a>
                        </div>
                </form>
            </div>
        </tr>
        </tr>
    </tbody>
</div>

@endsection