@extends('base')
@section('title', 'Inicio')
@section('content')
<div class="card">
    <h2 class="card-header">
        Mostrar Reporte de Monitoreos Ambientales
    </h2>
    <div class="card-body">
                <form method="POST" action="{{ route('monitoreos.store') }}">


                    <div class="table table-striped-column">
                        @csrf
                        <div class="form-group ">
                            <label for="Reuniones">Comites Ejecutados</label>
                            <input value="{{ $monitoreos->comite_cumplido}}" type="number" disabled="true" name="ejecutadas" id="ejecutadas" class="form-control" value=0 />
                        </div>

                        <div class="form-group">
                            <label for="observacion">Observacion</label>
                            <input value="{{ $monitoreos->observacion}}" type="text" disabled="true" name="observacion" id="observacion" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="date">Fecha</label>
                            <input value="{{ $monitoreos->date}}" disabled="true" class="form-control" id="date" type="date" name="date" value="" />
                        </div>

                        <div class="form-group  col-md-12 text-center">
                        
                            <a href="{{ route('monitoreos.index') }}" class="btn btn-secondary">Cancelar</a>
                        </div>
                </form>
            </div>
        </tr>
        </tr>
    </tbody>
</div>

@endsection
