@extends('base')
@section('title', 'Inicio')
@section('content')
<div class="card">
    <h2 class="card-header">
        Crear Reporte de Parametros Ambientales
    </h2>
    <div class="card-body">
            <form method="POST" action="{{ route('parametros.store') }}">
                @csrf

                <div class=" card-body form-group col-md-6 table-primary">
                    <h6>Unidades Funcionales </h6>
                    <label for="PROD">Produccion</label>
                    <input class="form-control" type="number" name="PROD" value=0 />
                    <label for="MTTO">Mantenimiento Mecanico</label>
                    <input class="form-control" type="number" name="MTTO" value=0 />
                    <label for="SSGG">SSG</label>
                    <input class="form-control" type="number" name="SSGG" value=0 />
                    <label for="SC">SC</label>
                    <input class="form-control" type="number" name="SC" value=0 />
                    <label for="CC">CC</label>
                    <input class="form-control" type="number" name="CC" value=0 />
                    <label for="SSII">SSII</label>
                    <input class="form-control" type="number" name="SSII" value=0 />

                </div>

                <div class="form-group">
                    <label for="date">Fecha</label>
                    <input class="form-control" id="date" type="date" name="date" value="" />
                </div>

                <div class="form-group">
                    <label for="observacion">Observacion</label>
                    <textarea name="observacion" id="observacion" class="form-control" rows="1" required></textarea>
                </div>


                <div class="form-grou col-md-12 text-center">

                    <button type="submit" class="btn btn-primary">Crear Registro</button>

                    <a href="{{ route('parametros.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
        </div>
        </form>
    </div>
@endsection
