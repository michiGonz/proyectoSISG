@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="container">
    <h2>Crear Registro de Permisos de Trabajo</h2>
    <tbody>
        <tr>
            <div class="card-body">
                <form method="POST" action="{{ route('auditorias.store') }}">
                    <td><a class="btn btn-success" class="nav-link" href="{{ route('auditorias.create') }}"><span>Crear
                                Reporte</span></a></td>
        </tr>
    </tbody>
</div>

<div class="table table-striped-columns ">
    @csrf
    <div class="form-group ">
        <label for="auditorias_generadas">Auditorias Generadas </label>
        <input type="number" name="auditorias_generadas" id="auditorias_generadas" class="form-control" value=0 />
    </div>

    <div class="form-group ">
        <label for="auditadas">Auditadas</label>
        <input type="number" name="auditadas" id="auditadas" class="form-control" value=0 />
    </div>

    <div class="form-group">
        <label for="auditadas_desviaciones">Permisos de Trabajo Auditados</label>
        <input type="number " name="auditadas_desviaciones" id="auditadas_desviaciones" class="form-control" value=0 />
    </div>

    <table class="table table-striped table-primary">
        <div class="form-check  table-primary ">
            <h5>Desviaciones QQgas</h5>
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                desviacion 1
            </label>
        </div>
        <div class="form-check  table-primary">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
                Desviacion 2
            </label>
        </div>
    </table>

    <div class="form-check table-danger  ">
        <h5>Desviaciones PDVSA</h5>
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
              desviacion 1
        </label>
    </div>
    <div class="form-check table-danger">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
        <label class="form-check-label" for="flexCheckChecked">
            Desviacion 2
        </label>
    </div>
</div>

<div class="form-group">
    <label for="auditadas_sindesviaciones">Permisos de Trabajo sin desviacion</label>
    <input type="number " name="auditadas_sindesviaciones" id="auditadas_sindesviaciones'" class="form-control" value=0  />
</div>

<div class="form-group">
    <label for="no_auditados">Permisos de Trabajo no Auditados</label>
    <input type="number " name="no_auditados" id="no_auditados" class="form-control" value=0 />
</div>

<div class="form-group">
    <label for="observacion">Observacion</label>
    <textarea name="observacion" id="observacion" class="form-control" rows="1" required></textarea>
</div>

<div class="form-group">
    <label for="date">Fecha</label>
    <input class="form-control" id="date" type="date" name="date" value="0" />
</div>

<div class="form-group">
    <br>
    <button type="submit" class="btn btn-primary">Crear Registro</button>

    <a href="{{ route('auditorias.index') }}" class="btn btn-secondary">Cancelar</a>
</div>

</div>


@endsection
