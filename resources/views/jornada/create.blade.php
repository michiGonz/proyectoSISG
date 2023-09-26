@extends('base')
@section('title', 'Inicio')
@section('content')
<div class="container">
    <h2>Crear Registro de Jornada Ambiental </h2>
    <tbody>
        <tr>
            <div class="card-body">
                <form method="POST" action="{{ route('jornada.store') }}">


                    <div class="table table-striped-columns">
                        @csrf
                        <div class="form-group ">
                            <label for="jornadas_ejecutadas">Jornadas Ejecutadas</label>
                            <input type="number" name="jornadas_ejecutadas" id="jornadas_ejecutadas" class="form-control" value=0 />
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <input type="text " name="descripcion" id="descripcion" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="ubicacion">Ubicacion de la Jornada Ambiental</label>
                            <input type="text " name="ubicacion" id="ubicacion" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="date">Fecha</label>
                            <input class="form-control" id="date" type="date" name="date" value="" />
                        </div>

                        <div class="form-group">
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
