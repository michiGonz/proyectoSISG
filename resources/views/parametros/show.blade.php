@extends('base')
@section('title', 'Inicio')
@section('content')


<div class="card">
    <h2 class="card-header">
        Registro de Parametros Ambientales
    </h2>
    <div class="card-body">
        <form method="POST" action="{{ route('parametros.store') }}">
            @csrf
            <div class="card col-md-6">
                <div class="card-body">
                    <label for="PROD">Producción</label>
                    <select style="width: 100%;" class="col-md-5 form-control" name="personal[]" value="{{ $parametros->PROD}}" id="personal" multiple aria-label="Default select example">
                        <option>Proceso del Gas</option>
                        <option>Agua</option>
                        <option>Químicos consumidos en operación</option>
                    </select>
                </div>
            </div>
            <div class="card col-md-6">
                <div class="card-body">
                    <label for="personal2">Mantenimiento</label>
                    <select style="width: 100%;" class="col-md-5 form-control" name="personal2[]" id="personal2" multiple aria-label="Default select example">
                        <option>Residuos Sólidos</option>

                    </select>
                </div>
            </div>

            <div class="card col-md-6">
                <div class="card-body">
                    <label for="personal3">Servicios Generales</label>
                    <select style="width: 100%;" class="col-md-5 form-control" name="personal3[]" id="personal3" multiple aria-label="Default select example">
                        <option>Residuos Sólidos</option>

                    </select>
                </div>
            </div>

            <div class="card col-md-6">
                <div class="card-body">
                    <label for="personal4">Compras y Contrato</label>
                    <select style="width: 100%;" class="col-md-5 form-control" name="personal4[]" id="personal4" multiple aria-label="Default select example">
                        <option>Residuos Sólidos</option>
                    </select>
                </div>
            </div>

            <div class="card col-md-6">
                <div class="card-body">
                    <label for="personal5">Sistemas de Información</label>
                    <select style="width: 100%;" class="col-md-5 form-control" name="personal5[]" id="personal5" multiple aria-label="Default select example">
                        <option>Residuos Sólidos</option>

                    </select>
                </div>
            </div>

            <div class="card col-md-6">
                <div class="card-body">
                    <label for="personal6">Seguridad Corporativa</label>
                    <select style="width: 100%;" class="col-md-5 form-control" name="personal6[]" id="personal6" multiple aria-label="Default select example">
                        <option>Residuos Sólidos</option>

                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="date">Fecha</label>
                <input value="{{ $parametros->date}}" class="form-control" disabled="true" id="date" type="date" name="date" value="" />
            </div>

            <div class="form-group">
                <label for="observacion">Observacion</label>
                <input value="{{ $parametros->observacion}}" disabled="true" name="observacion" id="observacion" class="form-control" rows="1" />
            </div>

            <div class="form-group col-md-12 text-center">

                <a href="{{ route('parametros.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</div>

<script>
    $("#personal").select2();
    $("#personal2").select2();
    $("#personal3").select2();
    $("#personal4").select2();
    $("#personal5").select2();
    $("#personal6").select2();
</script>
@endsection