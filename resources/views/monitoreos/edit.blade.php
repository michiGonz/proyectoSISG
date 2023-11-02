@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        Editar Registro de Monitoreos Ambientales
    </h2>
    <div class="card-body">
        <div class="table table-striped-columns">
            <form method="POST" class="row" action="{{ route('monitoreos.update', $monitoreos->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="table table-striped-columns">

                    <h6>Selección de Monitoreos:</h6>
                    <div class="form-group col-md-12">
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="ruido">Ruido</label>
                                    <input value="{{ $monitoreos->ruido}}" type="number" name="ruido" id="ruido" class="form-control" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="emisiones">Emisiones</label>
                                    <input value="{{ $monitoreos->emisiones}}" type="number" name="emisiones" id="emisiones" class="form-control" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="agua">Agua</label>
                                    <input type="number" value="{{ $monitoreos->agua}}" name="agua" id="agua" class="form-control" />
                                </div>
                          
                                <div class="form-group col-md-12">
                                    <label for="observacion">Observacion</label>
                                    <input value="{{ $monitoreos->observacion}}" type="text" name="observacion" id="observacion" class="form-control" />
                                </div>

                                <div class="form-group  col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Actualizar Registro</button>
                                    <a href="{{ route('monitoreos.index') }}" class="btn btn-secondary">Cancelar</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection