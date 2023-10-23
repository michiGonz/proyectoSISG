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
            <div class="card col-md-12">
                <div class="card-body">
                    <div class="row">

                        <div class="form-group col-md 4">
                            <label for="PROD">Produccion</label>
                            <input class="form-control" type="number" name="PROD" value=0 />
                    
                        </div>

                        <div class="form-group col-md 4">
                            <label for="MTTO">Mantenimiento </label>
                            <input class="form-control" type="number" name="MTTO" value=0 />
                        </div>

                        <div class="form-group col-md 4">
                            <label for="SSGG">Servicios Generales</label>
                            <input class="form-control" type="number" name="SSGG" value=0 />

                        </div>

                    </div>
                </div>
            </div>

            <div class="card col-md-12">
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md 4">
                            <label for="SC">Seguridad Corporativa</label>
                            <input class="form-control" type="number" name="SC" value=0 />
                        </div>

                        <div class="form-group col-md 4">
                            <label for="CC">Compra y contratacion</label>
                            <input class="form-control" type="number" name="CC" value=0 />
                        </div>

                        <div class="form-group col-md 4">
                            <label for="SSII">Sistema de informacion</label>
                            <input class="form-control" type="number" name="SSII" value=0 />
                        </div>

                    </div>
                </div>
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