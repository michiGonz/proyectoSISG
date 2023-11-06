@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">Crear Reporte de Monitoreos Ambientales</h2>
    <div class="card-body">
        <form method="POST" action="{{ route('monitoreos.store') }}">

            <div class="table table-striped-columns">
                @csrf
                <h6>Selección de Monitoreos:</h6>
                <div class="form-group col-md-12">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="ruido">Ruido</label>
                                <input type="number" name="ruido" id="ruido" class="form-control" value=0 required/>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="emisiones">Emisiones</label>
                                <input type="number" name="emisiones" id="emisiones" class="form-control" value=0 required/>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="agua">Agua</label>
                                <input type="number" name="agua" id="agua" class="form-control" value=0 required/>
                            </div>
                   
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="observacion">Observacion</label>
                            <input type="text " name="observacion" id="observacion" class="form-control"required />
                        </div>

                        <div class="form-group">
                            <label for="date">Fecha</label>
                            <input class="form-control" id="date" type="date" name="date" value="" required/>
                        </div>

                        <div class="form-group">
                            <br>
                            <button type="submit" class="btn btn-primary">Crear Registro</button>

                            <a href="{{ route('monitoreos.index') }}" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection