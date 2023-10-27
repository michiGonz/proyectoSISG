@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        Editar Registro de Parametros Ambientales
    </h2>

    <div class="card-body">
        <form method="POST" class="row" action="{{ route('parametros.update', $parametros->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card col-md-12">
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md 4">
                            <label for="PROD">Producción</label>
                            <input class="form-control" type="number" value="{{ $parametros->PROD }}" name="PROD" value=0 />
                        </div>
                        <div class="col-md-6" >
                            <label for="personal">Aspecto Ambiental</label>
                            <select style="width: 100%;" class="col-md-5 form-control" value="{{ $parametros->personal }}" name="personal[]" id="personal" multiple aria-label="Default select example">
                                <option>Proceso del Gas</option>
                                <option>Agua</option>
                                <option>Químicos consumidos en operación</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card col-md-12">
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md 4">
                            <label for="MTTO">Mantenimiento </label>
                            <input class="form-control" type="number" name="MTTO" value="{{ $parametros->MTTO }}" value=0 />
                        </div>
                        <div class="col-md-6">
                            <label for="personal2">Aspecto Ambiental</label>
                            <select style="width: 100%;" class="col-md-5 form-control" name="personal2[]" id="personal2" multiple aria-label="Default select example">
                                <option>Residuos Sólidos</option>

                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card col-md-12">
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md 4">
                            <label for="SC">Seguridad Corporativa</label>
                            <input class="form-control" type="number" name="SC" value="{{ $parametros->SC}}" value=0 />
                        </div>
                        <div class="col-md-6">
                            <label for="personal3">Aspecto Ambiental</label>
                            <select style="width: 100%;" class="col-md-5 form-control" name="personal3[]" id="personal3" multiple aria-label="Default select example">
                                <option>Residuos Sólidos</option>

                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card col-md-12">
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md 4">
                            <label for="SSGG">Servicios Generales</label>
                            <input class="form-control" type="number" name="SSGG" value="{{ $parametros->SSGG}}" value=0 />
                        </div>
                        <div class="col-md-6">
                            <label for="personal4">Aspecto Ambiental</label>
                            <select style="width: 100%;" class="col-md-5 form-control" name="personal4[]" id="personal4" multiple aria-label="Default select example">
                                <option>Residuos Sólidos</option>

                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card col-md 12">
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md 4">
                            <label for="CC">Compra y Contratos</label>
                            <input class="form-control" type="number" name="CC" value=0 />
                        </div>
                        <div class="col-md-6">
                            <label for="personal5">Aspecto Ambiental</label>
                            <select style="width: 100%;" class="col-md-5 form-control" name="personal5[]" id="personal5" multiple aria-label="Default select example">
                                <option>Residuos Sólidos</option>

                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card col-md 12">
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md 4">
                            <label for="SSII">Sistema de Información</label>
                            <input class="form-control" type="number" name="SSII" value=0 />
                        </div>
                        <div class="col-md-6">
                            <label for="personal6">Aspecto Ambiental</label>
                            <select style="width: 100%;" class="col-md-5 form-control" name="personal6[]" id="personal6" multiple aria-label="Default select example">
                                <option>Residuos Sólidos</option>

                            </select>
                        </div>
                    </div>
                </div>
            </div>


        </form>
        <div class="form-group">
            <label for="date">Fecha</label>
            <input value="{{ $parametros->date }}" class="form-control" id="date" type="date" name="date" value="" />
        </div>

        <div class="form-group">
            <label for="observacion">Observacion</label>
            <textarea value="{{ $parametros->observacion }}" name="observacion" id="observacion" class="form-control" rows="1" required></textarea>
        </div>


        <div class="form-group col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Actualizar Registro</button>
            <a href="{{ route('parametros.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>

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