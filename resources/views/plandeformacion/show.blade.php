@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        Mostrar Plan de Formacion Seguridad Salud y Ambiente
    </h2>
    <div class="card-body">
        <form method="POST" action="{{ route('plandeformacion.update', $plandeformacion->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group col-md-12">
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-6 table-primary">
                            <div class="card-body">
                                <div class="form-group ">
                                    <label for="ejecutadas_ambiente">Formaciones ejecutadas de Ambiente</label>
                                    <input type="number" value="{{ $plandeformacion->ejecutadas_ambiente }}" disabled="true" name="ejecutadas_ambiente" id="ejecutadas_ambiente" class="form-control" value=0 />
                                </div>
                                <div class="row" id="fecha"></div>
                            </div>
                        </div>

                        <div class=" col-md-6 table-danger">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="ejecutadas_seguridad">Formaciones ejecutadas de Seguridad</label>
                                    <input type="number" value="{{ $plandeformacion->ejecutadas_seguridad}}" disabled name="ejecutadas_seguridad" id="ejecutadas_seguridad" class="form-control" value=0 />
                                </div>
                                <div class="row" id="fecha1"></div>
                            </div>
                        </div>

                        <div class="col-md-6 table-warning">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="ejecutadas_salud">Formaciones ejecutadas de Salud</label>
                                    <input type="number" value="{{ $plandeformacion->ejecutadas_salud }}" disabled name="ejecutadas_salud" id="ejecutadas_salud" class="form-control" value=0 />
                                </div>
                                <div class="row" id="fecha2"></div>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="observacion">Observacion</label>
                                    <input name="observacion" value="{{ $plandeformacion->observacion }}" disabled id="observacion" class="form-control" required></input>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-12 text-center">

                            <a href="{{ route('plandeformacion.index') }}" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>
</div>
@endsection