@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header"> Crear Reporte Manejo del Cambio
    </h2>
        <tr>
            <div class="card-body">
                <form method="POST" action="{{ route('manejo.store') }}">

                    <div class="table table-striped-columns">
                        @csrf
                  
                        <div class="form-group">
                            <label for="name" >Nombre del Manejo del Cambio</label>
                            <input class="form-control" id="name" type="text" name="name" />
                        </div>

                        <div class="form-group">
                            <label for="observacion">Observacion</label>
                            <input type="text" name="observacion" id="observacion" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="date">Fecha</label>
                            <input class="form-control" id="date" type="date" name="date" value="" />
                        </div>

                        <div class="form-group col-md-12 text-center">
                            <br>
                            <button type="submit" class="btn btn-primary">Crear Registro</button>

                            <a href="{{ route('manejo.index') }}" class="btn btn-secondary">Cancelar</a>
                        </div>
                </form>
            </div>
        </tr>
        </tr>
    </tbody>
</div>

@endsection