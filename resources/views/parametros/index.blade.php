@extends('base')
@section('title', 'Inicio')
@section('content')


<div class="container">
    <h2> Reporte de Parametros Ambientales</h2>
    <tbody>
        <tr>
            <div class="card-body">
                <form method="POST" action="{{ route('parametros.store') }}">
                    <td><a class="btn btn-success" class="nav-link"
                            href="{{ route('parametros.create') }}"><span>Crear
                                Reporte</span></a></td>
                </form>
            </div>
        </tr>
    </tbody>
</div>

<div class="table table-striped-columns">
    <table class="table mt-3" id="parametros">

        <thead>
            <tr>
                <th>ID</th>
                <th>Parametros Planificados</th>
                <th>Parametros Ejecutadas</th>
                <th>PROD</th>
               <Th>MTTO</Th> 
                <th>SSGG</th>
                <th>SC</th>
                <th>CC</th>
               <th>SSII</th>
                <th>Fecha</th>
                <th>Observacion</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($parametros as $parametros)
            
            <tr>
                <td>{{ $parametros->id }}</td>
                <td>{{ $parametros->planificado}}</td>
                <td>{{ $parametros->ejecutados}}</td>
                <td>{{ $parametros->PROD}}</td>
                <td>{{ $parametros->MTTO}}</td>
                <td>{{ $parametros->SSGG}}</td>
                <td>{{ $parametros->SC}}</td>
                <td>{{ $parametros->CC}}</td>
                <td>{{ $parametros->SSII}}</td>
                <td>{{ $parametros->date}}</td>
                <td>{{ $parametros->observacion}}</td>
            
            
                <td>
                    <a href="{{ route('parametros.show', $parametros->id) }}"
                        class="btn btn-primary btn-sm">Mostrar Reporte</a>
                    <form action="{{ route('parametros.destroy', $parametros->id) }}" method="POST"
                        class="d-inline">
                        @csrf

                    </form>
                    <a href="{{ route('parametros.edit', $parametros->id) }}"
                        class="btn btn-primary btn-sm">Editar</a>

                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
    <script>
    DataTabla('#parametros',[10, 'desc']);
</script>
    @endsection
