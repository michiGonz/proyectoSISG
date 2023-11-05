@extends('base')
@section('title', 'Inicio')
@section('content')

@if (property_exists($indicadorplan,'nombre_indicador'))
<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left- shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text- text-uppercase mb-1">
                            Auditorias de permisos de trabajo Planificadas</div>
                        <div class="h7 mb-0 font-weight-bold text-gray-800">
                            <h6>Programación Anual: {{$indicadorplan->programacion_anual}}</h6>
                            <h6>Programación Mensual: {{$indicadorplan->programadas_mes}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endif


<div class="card">

    <h2 class="card-header">Auditorias de Permiso de Trabajo
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('auditorias.create') }}"><span><i class="fas fa-plus"></i>Crear Reporte</span></a>
    </h2>

    <div class="card-body table table-striped-columns text-center">
        <table class="table mt-3" id="table-auditoria">
            <thead>
                <tr>

                    <th>Permisos Generados</th>
                    <th>Permisos Generados QQGAS</th>
                    <th>Permisos Generados PDVSA</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $totalP = 0;
                $totalQ = 0;
                ?>
                @foreach ($auditorias as $auditorias)
                <?php
                $totalPDVSA = $auditorias->auditadas_pdvsa + $auditorias->desviaciones_pdvsa + $auditorias->noauditadas_pdvsa;
                $totalQQGAS = $auditorias->auditadas_qqgas + $auditorias->desviacion_qqgas + $auditorias->noauditadas_qqgas; ?>
                <tr>
                    <td>{{ $totalPDVSA + $totalQQGAS }}</td>
                    <td>{{ $totalQQGAS }}</td>
                    <td>{{ $totalPDVSA }}</td>
                    <td>{{ $auditorias->date}}</td>

                    <td>
                        <a href="{{ route('auditorias.show', $auditorias->id) }}" class="btn btn-info float-left"> <i class="fas fa-eye"></i></a>
                        <!-- <a href="{{ route('auditorias.edit', $auditorias->id) }}" class="btn btn-success float-left"> <i class="fas fa-edit"></i></a> -->
                    </td>
                </tr>
                <?php
                $totalQ += $totalQQGAS;
                $totalP += $totalPDVSA;
                ?>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th class="text-center">{{$totalP+$totalQ}}</th>
                    <th class="text-center">{{$totalQ}}</th>
                    <th class="text-center">{{$totalP}}</th>
                    <th></th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div>
    <script>
        DataTabla('#table-auditoria', [3, 'desc']);
    </script>
    @endsection