@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        Mostrar Reporte de Comite Seguridad Salud Laborales
     
    </h2>

    <div class="card-body">
        <form method="POST" action="{{ route('comite.store') }}">

            <div class="card col-md-12">
                <div class="card-body">
                    <div class="row">

                        <div class="form-group col-md-6 ">
                            <label for="date">Fecha de Reunión</label>
                            <input class="form-control" value="{{ $comite->date_insasel}}" disabled="true" id="date" type="date" name="date" />
                        </div>

                        <div class="form-group col-md-6 ">
                            <label for="date_reunion">Fecha de Entrega a Inpsasel</label>
                            <input class="form-control" id="date" value="{{ $comite->date_reunion}}" disabled="true"  type="date" name="date" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group col-md-8">
                <label for="observacion">Observacion</label>
                <input name="observacion" value="{{ $comite->observacion}}" disabled="true" id="observacion" class="form-control" rows="1" required></input>
            </div>

            <div class="form-group col-md-12 text-center">
                

                <a href="{{ route('comite.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
    </div>

    </form>
</div>
</tr>
</tr>
</tbody>
</div>
@endsection