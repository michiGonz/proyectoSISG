@extends('base')
@section('title', 'Inicio')
@section('content')


<div class="card">
    <h2 class="card-header">Auditorias de Permiso de Trabajo
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('auditorias.create') }}"><span><i class="fas fa-plus"></i>Crear Reporte</span></a>
    </h2>

    <div class="card-body table table-striped-columns text-center">
        <table class="table mt-3" id="auditoria">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Permisos Generada</th>
                    <th>A. PDVSA</th>
                    <th>A. QQgas</th>
                    <th>D. QQgas</th>
                    <th>D. PDVSA</th>
                    <th>SD. Qqgas</th>
                    <th>SD. PDVSA</th>
                    <th>NA. Qqgas</th>
                    <th>NA. PDVSA</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
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
                        <a href="{{ route('auditorias.show', $auditorias->id) }}"class="btn btn-info float-left"> <i class="fas fa-eye" ></i></a>
                        <form action="{{ route('auditorias.destroy', $auditorias->id) }}" method="POST" class="d-inline">
                            @csrf
                        </form>
                        <a href="{{ route('auditorias.edit', $auditorias->id) }}" class="btn btn-success float-left"> <i class="fas fa-edit" ></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        DataTabla('#auditoria', [10, 'desc']);
    </script>
    @endsection