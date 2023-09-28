@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        Mostrar Reporte de Investigacion de Insidentes
    </h2>
    <div class="card-body">
        <form method="POST" action="{{ route('investigacion.store') }}">
            @csrf
            @method('PUT')

            <label for="acomulado">Acomulado del mes</label>
            <input value="{{ $investigacion->acomulado }}" disabled="true" type="number" name="acomulado" id="acomulado" class="form-control" />

            <select class="form-select p-3 m-0 border-0 bd-example m-0 border-0" name="uf" id="uf" aria-label="Default select example" value="{{ $investigacion->uf}}" disabled="true">
                <option selected>Unidad Funcional</option>
                <option value="uf produccion">UF Produccion</option>
                <option value="uf visita gerencial">UF Mantenimiento</option>
                <option value="uf masc">UF MASC</option>
                <option value="uf sistema de inf">UF Sistema de Información</option>
                <option value="uf ing mtto">UF Ing Mantenimiento</option>
                <option value="uf planificacion y finanzas">UF Planificacion y Finanzas</option>
                <option value="uf compras y contrataciones">UF Compras y Contrataciones</option>
                <option value="uf recursos humanos">UF Recursos Humanos</option>
                <option value="uf servicio generales">UF Servicios Generales</option>
                <option value="uf seguridad corporativa">UF Seguridad Corporativa</option>
                <option value="uf ingenieria de proceso">UF Ingenieria de Proceso</option>
                <option value="uf gerencia general">UF Gerencia General</option>
            </select>

            <div class="form-group">
                <label for="nombre_incidente">Nombre del incidente</label>
                <input value="{{ $investigacion->nombre_incidente}}" type="text" disabled="true" name="nombre_incidente" id="nombre_indcidente" class="form-control" />
            </div>

            <div class="form-group">
                <label for="nombre_lugar">Ubicacion</label>
                <input value="{{ $investigacion->nombre_lugar}}" disabled="true" type="ubicacion" name="nombre_lugar" id="nombre_lugar" class="form-control">
            </div>

            <table class="table table-striped table-primary" disabled="true">
                <div class="form-check  table-primary ">
                    <h5>Status</h5>
                    <input class="form-check-input" disabled="true" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Comunicación
                    </label>
                </div>
                <div class="form-check  table-primary" disabled="true">
                    <input class="form-check-input" disabled="true" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Comite
                    </label>
                </div>
                <div class="form-check  table-primary" disabled="true">
                    <input class="form-check-input" disabled="true" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Investigación
                    </label>
                </div>
                <div class="form-check  table-primary" disabled="true">
                    <input class="form-check-input" disabled="true" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Informe
                    </label>
                </div>
                <div class="form-check  table-primary" disabled="true">
                    <input class="form-check-input" disabled="true" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Divulgación
                    </label>
                </div>

                <div class="form-group">
                    <label for="observacion">Observacion</label>
                    <input value="{{ $investigacion->observacion}}" disabled="true" name="observacion" id="observacion" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="date">Fecha</label>
                    <input value="{{ $investigacion->date}}" disabled="true" class="form-control" id="date" type="date" name="date" value="" />
                </div>

                <div class="form-group col-md-12 text-center">

                    <button type="submit" class="btn btn-primary">Descargar Registro</button>

                    <a href="{{ route('investigacion.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
    </div>

    </form>
</div>

</div>

@endsection