@extends('base')
@section('title', 'Inicio')
@section('content')
<div class="container">
    <h2>Registro de Eficiencia Operativa</h2>
    <tbody>
        <tr>
            <div class="card-body">
                <form method="POST" action="{{ route('operativa.store') }}">


                    <div class="table table-striped-columns table-primary">
                        @csrf
                        <div class="form-group ">
                            <label for="Reuniones">Comites Ejecutados</label>
                            <input value="{{ $operativa->comite_cumplido}}" type="number" disabled="true" name="ejecutadas" id="ejecutadas" class="form-control" value=0 />
                        </div>

                        <div class="form-group">
                            <label for="observacion">Observacion</label>
                            <input value="{{ $operativa->observacion}}" type="text" disabled="true" name="observacion" id="observacion" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="date">Fecha</label>
                            <input value="{{ $operativa->date}}" disabled="true" class="form-control" id="date" type="date" name="date" value="" />
                        </div>

                        <div class="form-group">
                            <br>
                            <button type="submit" class="btn btn-primary">Descargar</button>

                            <a href="{{ route('operativa.index') }}" class="btn btn-secondary">Cancelar</a>
                        </div>
                </form>
            </div>
        </tr>
        </tr>
    </tbody>
</div>

@endsection
