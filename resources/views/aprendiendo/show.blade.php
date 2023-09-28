@extends('base')
@section('title', 'Inicio')
@section('content')
<div class="container">
    <h2>Crear Registro de Aprendiendo en el Trabajo</h2>
    <tbody>
        <tr>
            <div class="card-body">
                <form method="POST" action="{{ route('aprendiendo.store') }}">


                    <div class="table table-striped-columns table-primary">
                        @csrf
                        <div class="form-group ">
                            <label for="Reuniones">Comites Ejecutados</label>
                            <input value="{{ $aprendiendo->cantidad_actividad}}" type="number" disabled="true" name="ejecutadas" id="ejecutadas" class="form-control" value=0 />
                        </div>

                        <div class="form-group">
                            <label for="nombre">Nombre del Aprendiendo en el Trabajo</label>
                            <input value="{{ $aprendiendo->nombre}}" type="text" disabled="true" name="observacion" id="observacion" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="observacion">Observacion</label>
                            <input value="{{ $aprendiendo->observacion}}" type="text" disabled="true" name="observacion" id="observacion" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="date">Fecha</label>
                            <input value="{{ $aprendiendo->date}}" disabled="true" class="form-control" id="date" type="date" name="date" value="" />
                        </div>

                        <div class="form-group">
                            <br>
                            <button type="submit" class="btn btn-primary">Descargar</button>

                            <a href="{{ route('aprendiendo.index') }}" class="btn btn-secondary">Cancelar</a>
                        </div>
                </form>
            </div>
        </tr>
        </tr>
    </tbody>
</div>

@endsection
