@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="container">
    <h2>Auditorias de Permisos de Trabajo</h2>
    <tbody>
        <tr>
            <td><a class="btn btn-success" class="nav-link" href="{{ route('auditorias.create') }}"><span>Crear
                        Reporte</span></a></td>

    </tbody>
</div>

<div class="table tabble-responsive">
    <table class="table mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Permisos Generada</th>
                <th>Auditados PDVSA</th>
                <th>Auditados QQgas</th>
                <th>Desviaciones QQgas</th>
                <th>Desviaciones PDVSA</th>
                <th>sin desviacion Qqgas</th>
                <th>sin desviacion PDVSA</th>
                <th>no Auditados Qqgas</th>
                <th>no Auditados PDVSA</th>
                <th>fecha</th>
                <th>acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($auditorias as $auditorias)
            <tr>
                <td>{{ $auditorias->id }}</td>
                <td>{{ $auditorias->permisos_generados}}</td>
                <td>{{ $auditorias->auditadas_pdvsa}}</td>
                <td>{{ $auditorias->auditadas_qqgas}}</td>
                <td>{{ $auditorias->desviacion_qqgas}}</td>
                <td>{{ $auditorias->desviaciones_pdvsa}}</td>
                <td>{{ $auditorias->sindesviacion_qqgas}}</td>
                <td>{{ $auditorias->sindesviacionpdvsa}}</td>
                <td>{{ $auditorias->noauditadas_qqgas}}</td>
                <td>{{ $auditorias->noauditadas_pdvsa}}</td>
                <td>{{ $auditorias->date}}</td>
                <td>
                    <a href="{{ route('auditorias.show', $auditorias->id) }}" class="btn btn-primary btn-sm">Mostrar
                        Reporte</a>
                    <form action="{{ route('auditorias.destroy', $auditorias->id) }}" method="POST" class="d-inline">
                        @csrf
                    </form>
                    <a href="{{ route('auditorias.edit', $auditorias->id) }}" class="btn btn-primary btn-sm">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


</div>
@endsection
