@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        Acto Seguro
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('actoseguro.create') }}"><span> <i class="fas fa-plus"></i> Crear Reporte</span></a>
    </h2>
    <div class="card-body">

        <div class="table tabble-responsive">
            <table class="table mt-3" id="acto-seguro">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>RP</th>
                        <th>EPP</th>
                        <th>PP</th>
                        <th>HE</th>
                        <th>POL</th>
                        <th>A</th>
                        <th>Fecha</th>
                        <th>Total</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($actos_seguro as $actoseguro)
                    <tr>
                        <td>{{ $actoseguro->id }}</td>
                        <td>{{ $actoseguro->RP_main }}</td>
                        <td>{{ $actoseguro->EPP_main}}</td>
                        <td>{{ $actoseguro->PP_main}}</td>
                        <td>{{ $actoseguro->HE_main}}</td>
                        <td>{{ $actoseguro->PROCE_main}}</td>
                        <td>{{ $actoseguro->A_main}}</td>
                        <td>{{ $actoseguro->date }}</td>
                        <td>{{ $actoseguro->cantidad }}</td>
                        <td>

                            <a href="{{ route('actoseguro.show', $actoseguro->id) }}" class="btn btn-info float-left"> <i class="fas fa-eye" ></i></a>
                            <form action="{{ route('actoseguro.edit', $actoseguro->id) }}" method="POST" class="d-inline">
                                @csrf

                            </form>
                            <a href="{{ route('actoseguro.edit', $actoseguro->id) }}" class="btn btn-success float-left"> <i class="fas fa-edit" ></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <script>
            DataTabla('#acto-seguro', [8, 'desc']);
        </script>
    </div>
</div>

@endsection