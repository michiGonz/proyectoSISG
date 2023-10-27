@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        Reporte de Formacion Seguridad, Salud y Ambiente
        <a class="btn btn-success float-right" class="nav-link" href="{{ route('plandeformacion.create') }}"><span> <i class="fas fa-plus"></i> Crear Reporte</span></a>
    </h2>
    <div class="card-body">

        <div class=" table table-striped-columns  text-center">
            <table class="table mt-3" id="formacion">
                <thead>
                    <tr>
                        <th>Formaciones en Ambiente</th>
                        <th>Formaciones en Seguridad</th>
                        <th>Formaciones en Salud</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $ejecutadas_ambiente = 0;
                    $ejecutadas_seguridad = 0;
                    $ejecutadas_salud = 0;

                    ?>
                    @foreach ($plandeformacion as $clave => $plandeformacion)
                    <?php $dates = json_decode($plandeformacion->date); ?>
                    <tr>
                        <td>
                            <button class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#ejecutadas_ambiente{{$clave}}" aria-expanded="false">
                                {{ $plandeformacion->ejecutadas_ambiente}} <i class="fas fa-angle-down"></i>
                            </button>
                            <div class="collapse" id="ejecutadas_ambiente{{$clave}}">
                                <div class="card card-body">
                                    @foreach ($dates->ambiente as $date)
                                    {{$date}}<br>
                                    @endforeach
                                </div>
                            </div>
                        </td>
                        <td>
                            <button class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#ejecutadas_seguridad{{$clave}}" aria-expanded="false">
                                {{ $plandeformacion->ejecutadas_seguridad}} <i class="fas fa-angle-down"></i>
                            </button>
                            </button>
                            <div class="collapse" id="ejecutadas_seguridad{{$clave}}">
                                <div class="card card-body">
                                    @foreach ($dates->seguridad as $date)
                                    {{$date}}<br>
                                    @endforeach
                                </div>
                            </div>

                        </td>
                        <td>
                            <button class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#ejecutadas_salud{{$clave}}" aria-expanded="false">
                                {{ $plandeformacion->ejecutadas_salud}} <i class="fas fa-angle-down"></i>
                            </button>
                            </button>
                            <div class="collapse" id="ejecutadas_salud{{$clave}}">
                                <div class="card card-body">
                                    @foreach ($dates->salud as $date)
                                    {{$date}}<br>
                                    @endforeach
                                </div>
                            </div>

                        </td>
                        <td>
                            <a href="{{ route('plandeformacion.show', $plandeformacion->id) }}" class="btn btn-info float-left"> <i class="fas fa-eye"></i></a>
                            <form action="{{ route('plandeformacion.destroy', $plandeformacion->id) }}" method="POST" class="d-inline">
                                @csrf

                            </form>
                            <a href="{{ route('plandeformacion.edit', $plandeformacion->id) }}" class="btn btn-success float-left"> <i class="fas fa-edit"></i></a>

                        </td>

                    </tr>
                   
                    @endforeach
                </tbody>
               
            </table>
        </div>
    </div>
</div>

<script>
    DataTabla('#formacion', [4, 'desc']);
</script>


@endsection