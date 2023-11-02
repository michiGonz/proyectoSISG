@extends('base')
@section('title', 'Inicio')
@section('content')
<div class="card">
    <h2 class="card-header">
        Mostrar Reporte de Monitoreos Ambientales
    </h2>
    <div class="card-body">
        <form method="POST" action="{{ route('monitoreos.store') }}">
            <div class="table table-striped-columns">
                <div class="form-group col-md-12">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="ruido">Ruido</label>
                                <input value="{{ $monitoreos->ruido}}" type="number" name="ruido" id="ruido" class="form-control" disabled />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="emisiones">Emisiones</label>
                                <input value="{{ $monitoreos->emisiones}}" type="number" name="emisiones" id="emisiones" class="form-control" disabled />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="agua">Agua</label>
                                <input type="number" value="{{ $monitoreos->agua}}" name="agua" id="agua" class="form-control" disabled />
                            </div>

                            <div class="form-group col-md-12">
                                <label for="observacion">Observacion</label>
                                <input value="{{ $monitoreos->observacion}}" type="text" name="observacion" id="observacion" class="form-control" disabled />
                            </div>

                            <div class="form-group  col-md-12 text-center">
                                
                                <a href="{{ route('monitoreos.index') }}" class="btn btn-secondary">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>

</div>

@endsection