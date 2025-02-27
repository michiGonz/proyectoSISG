@extends('base')
@section('title', 'Inicio')
@section('content')
@yield('card')


@if (property_exists($indicadorplan,'nombre_indicador'))
<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left- shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text- text-uppercase mb-1">
                        OPSA</div>
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
    <h2 class="card-header">
        OPSA
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('opsa.create') }}"><span> <i class="fas fa-plus"></i> Crear Reporte</span></a>
    </h2>
    <div class="card-body">

        <div class="table tabble-responsive">
            <table class="table mt-3" id="opsa">
                <thead>
                    <tr>
                        <th class="text-center"><b>Total</b></th>
                        <th class="text-center">Tarjetas Actos Seguras</th>
                        <th class="text-center">Tarjetas Actos Inseguras</th>
                        <th class="text-center">Fecha</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $cantidad_seguro = 0;
                    $cantidad_inseguro = 0;
                    $total = 0;
                    ?>
                    @foreach ($opsa as $opsa)
                    <tr>
                        <td class="text-center"><b>{{ $opsa->cantidad_seguro + $opsa->cantidad_inseguro}}</b></td>
                        <td class="text-center">{{ $opsa->cantidad_seguro}}</td>
                        <td class="text-center">{{ $opsa->cantidad_inseguro}}</td>
                        <td class="text-center">{{ $opsa->date}}</td>
                        <td class="text-center">

                            <a href="{{ route('opsa.show', $opsa->id) }}" class="btn btn-info float-left"> <i class="fas fa-eye"></i></a>
                            <!-- <form action="{{ route('opsa.edit', $opsa->id) }}" method="POST" class="d-inline">
                                @csrf

                            </form> -->

                        </td>
                    </tr>
                    <?php
                    if (substr($opsa->date, 0, 4) == date('Y')) {
                        $cantidad_seguro = $cantidad_seguro + $opsa->cantidad_seguro;
                        $cantidad_inseguro = $cantidad_inseguro + $opsa->cantidad_inseguro;
                        $total = $cantidad_seguro + $cantidad_inseguro;
                    }
                    ?>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th class="text-center">{{$total}}</th>
                        <th class="text-center">{{$cantidad_seguro}}</th>
                        <th class="text-center">{{$cantidad_inseguro}}</th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <script>
            DataTabla('#opsa', [2, 'desc']);
        </script>
    </div>
</div>

@endsection