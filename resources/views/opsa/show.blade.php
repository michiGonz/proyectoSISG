@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">
        Reporte de Registro de Actos Seguros
    </h2>

    <div class="card-body">
        <form method="POST" action="{{route('opsa.store') }}">
            @csrf
            <div class="card" id="opsa_seguro">
                <h5 class="card-header">Actos Seguros
                    <small class="float-right" id="suma_main"></small>
                </h5>
                <div class="card-body table-primary">
                    <div class="row">

                        <div class="form-group col-md-4 ">
                            <label for="RP_main">Reacciones de las personas </label>
                            <input class="form-control" value="{{ $opsa->RP_main}}" id="RP_main" type="number" name="RP_main" value="0" disabled />
                        </div>

                        <div class="form-group col-md-4">
                            <label for="EPP_main">Equipo de proteccion personal</label>
                            <input class="form-control" value="{{ $opsa->EPP_main}}" type="number" name="EPP_main" value="0" disabled />

                        </div>
                        <div class="form-group col-md-4">
                            <label for="PP_main">Posiciones de las personas</label>
                            <input class="form-control" value="{{ $opsa->PP_main}}" type="number" id="main" name="PP_main" value="0" disabled />
                            <div id="suma_PP_main"></div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="HE_main">Herramientas y equipo</label>
                            <input class="form-control" value="{{ $opsa->HE_main}}" type="number" id="main" name="HE_main" value="0" disabled />

                        </div>

                        <div class="form-group col-md-4">
                            <label for="A_main">Ambiente</label>
                            <input class="form-control" id="main" value="{{ $opsa->A_main}}" type="number" name="A_main" value="0" disabled />
                        </div>
                        <div class="form-group col-md-4">
                            <label for="OL_main">Procedimientos, orden y limpieza</label>
                            <input class="form-control" type="number" value="{{ $opsa->OL_main}}" id="main" name="OL_main" disabled />

                        </div>
                        <div class="form-group col-md-12" id="opsa">
                            <label for="cantidad_seguro"><b>Total de tarjetas seguras</b></label>
                            <input class="form-control" value="{{ $opsa->cantidad_seguro}}" id="cantidad_seguro" type="number" name="cantidad_seguro" value="" required disabled />
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="card" id="opsa_inseguro">
                <h2 class="card-header">Actos Inseguro</h2>
                <div class="card-body table-danger">
                    <div class="card" id="reaccion">
                        <h5 class="card-header">Reacciones de las personas
                            <small class="float-right" id="suma_reaccion"></small>
                        </h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="RP_1">Ajustan su EPP</label>
                                    <input class="form-control" type="number" value="{{ $opsa->RP_1}}" name="RP_1" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="RP_2">Cambian de posicion</label>
                                    <input class="form-control" value="{{ $opsa->RP_2}}" type="number" name="RP_2" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="RP_3">Reacomodan su trabajo</label>
                                    <input class="form-control" value="{{ $opsa->RP_3}}" type="number" name="RP_3" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="RP_4">Dejan de Trabajar</label>
                                    <input class="form-control" type="number" value="{{ $opsa->RP_4}}" name="RP_4" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="RP_5">Colocan puesta a tierra</label>
                                    <input class="form-control" type="number" name="RP_5" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="RP_6">Colocan bloqueos</label>
                                    <input class="form-control" type="number" name="RP_6" disabled />
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="card" id="equipo">
                        <h5 class="card-header">
                            Equipo de proteccion personal
                            <small class="float-right" id="suma_equipo"></small>
                        </h5>
                        </h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="EPP_1">Cabeza</label>
                                    <input class="form-control" value="{{ $opsa->EPP_1}}" type="number" name="EPP_1" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="EPP_2">Ojos y Cara</label>
                                    <input class="form-control" type="number" value="{{ $opsa->EPP_2}}" name="EPP_2" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="EPP_3">Oidos</label>
                                    <input class="form-control" type="number" value="{{ $opsa->EPP_3}}" name="EPP_3" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="EPP_4">Aparato respiratorio</label>
                                    <input class="form-control" type="number" name="EPP_4" value="{{ $opsa->EPP_4}}" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="EPP_5">Brazos y manos</label>
                                    <input class="form-control" type="number" value="{{ $opsa->EPP_5}}" name="EPP_5" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="EPP_6">Tronco</label>
                                    <input class="form-control" type="number" value="{{ $opsa->EPP_6}}" name="EPP_6" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="EPP_7">Piernas y pies</label>
                                    <input class="form-control" type="number" value="{{ $opsa->EPP_7}}" name="EPP_7" disabled />
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="card table-warning" id=posicion>
                        <h5 class="card-header">
                            Posiciones de las personas
                            <small class="float-right" id="suma_posicion"></small>
                        </h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="PP_1">Golpear contra objetos</label>
                                    <input class="form-control" value="{{ $opsa->PP_1}}" type="number" name="PP_1" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="PP_2">ser golpeados por objetos</label>
                                    <input class="form-control" value="{{ $opsa->PP_2}}" type="number" name="PP_2" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="PP_3">Quedar atrapado dentro o entre objetos</label>
                                    <input class="form-control" value="{{ $opsa->PP_3}}" type="number" name="PP_3" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="PP_4">Caidas</label>
                                    <input class="form-control" type="number" value="{{ $opsa->PP_4}}" name="PP_4" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="PP_5">Contacto con temperaturas extremas</label>
                                    <input class="form-control" value="{{ $opsa->PP_5}}" type="number" name="PP_5" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="PP_6">Contacto con corriente electrica</label>
                                    <input class="form-control" value="{{ $opsa->PP_6}}" type="number" name="PP_6" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="PP_7">Inhalacion, adsorcion o ingestion de una sustancia peligrosa</label>
                                    <input class="form-control" value="{{ $opsa->PP_7}}" type="number" name="PP_7" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="PP_8">Sobre-esfuerzo</label>
                                    <input class="form-control" type="number" value="{{ $opsa->PP_8}}" name="PP_8" disabled />
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="card" id="herramientas">
                        <h5 class="card-header">
                            Herramientas y Equipo
                            <small class="float-right" id="suma_herramienta"></small>
                        </h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="HE_1">Inadecuados para el trabajo</label>
                                    <input class="form-control" type="number" value="{{ $opsa->HE_1}}" name="HE_1" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="HE_2">Empleados en forma incorrecta</label>
                                    <input class="form-control" value="{{ $opsa->HE_2}}" type="number" name="HE_2" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="HE_3">En condiciones inseguras</label>
                                    <input class="form-control" value="{{ $opsa->HE_3}}" type="number" name="HE_3" disabled />
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="card" id="procedimiento">
                        <h5 class="card-header">
                            Procedimientos, orden y limpieza
                            <small class="float-right" id="suma_procedimiento"></small>
                        </h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="PROCE_1">Procedimientos inadecuados</label>
                                    <input class="form-control" value="{{ $opsa->PROCE_1}}" type="number" name="PROCE_1" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="PROCE_2">Procedimientos no conocidos ni entendidos</label>
                                    <input class="form-control" value="{{ $opsa->PROCE_2}}" type="number" name="PROCE_2" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="PROCE_3">Procedimientos no se cumplen</label>
                                    <input class="form-control" type="number" value="{{ $opsa->PROCE_3}}" name="PROCE_3" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="OL_1">Estandares de orden y limpieza inadecuados</label>
                                    <input class="form-control" type="number" value="{{ $opsa->OL_1}}" name="OL_1" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="OL_2">Estandares de orden y limpieza no conocidos ni entendidos</label>
                                    <input class="form-control" type="number" value="{{ $opsa->OL_2}}" name="OL_2" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="OL_3">Estandares de orden y limpieza no se cumplen</label>
                                    <input class="form-control" type="number" value="{{ $opsa->OL_3}}" name="OL_3" disabled />
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="card" id="ambiente">
                        <h5 class="card-header">
                            Ambiente
                            <small class="float-right" id="suma_ambiente"></small>
                        </h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="A_1">Transferir incorrectamente productos o materiales liquidos y solidos</label>
                                    <input class="form-control" value="{{ $opsa->A_1}}" type="number" name="A_1" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="A_2">Almacenar incorrectamente materiales solidos, liquidos o equipos</label>
                                    <input class="form-control" value="{{ $opsa->A_2}}" type="number" name="A_2" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="A_3">Corte de vegetación inadecuado</label>
                                    <input class="form-control" value="{{ $opsa->A_3}}" type="number" name="A_3" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="A_4">Productos y/o materiales sin hojas de datos del producto</label>
                                    <input class="form-control" value="{{ $opsa->A_4}}" type="number" name="A_4" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="A_5">Lavar equipo o herramienta con productos inadecuadosn</label>
                                    <input class="form-control" value="{{ $opsa->A_5}}" type="number" name="A_5" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="A_6">Afectacion de cursos de agua</label>
                                    <input class="form-control" value="{{ $opsa->A_6}}" type="number" name="A_6" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="A_7">Mal uso y/o desperdicios de productos y/o Materiales</label>
                                    <input class="form-control" value="{{ $opsa->A_7}}" type="number" name="A_7" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="A_8">Afectación de suelos</label>
                                    <input class="form-control" value="{{ $opsa->A_8}}" type="number" name="A_8" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="A_9">Afectación de faunas silvestre</label>
                                    <input class="form-control" value="{{ $opsa->A_10}}" type="number" name="A_9" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="A_10">Manejo de desechos</label>
                                    <input class="form-control" value="{{ $opsa->A_10}}" type="number" name="A_10" disabled />
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group" id="opsa">
                        <label for="cantidad_inseguro"><b>Total de tarjetas inseguras</b></label>
                        <input class="form-control" id="cantidad_inseguro" value="{{ $opsa->cantidad_inseguro}}" type="number" name="cantidad_inseguro" disabled />
                    </div>

                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="date">Fecha</label>
                    <input class="form-control" id="date" value="{{ $opsa->date}}" type="date" name="date" disabled />
                </div>
                <div class="form-group col-md-6">
                    <label for="observacion">Observacion</label>
                    <input type="text" name="observacion" class="form-control" value="{{ $opsa->observacion}}" disabled></input>
                </div>

                <div class="form-group col-md-12 text-center">
                    <a href="{{ route('opsa.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </div>

        </form>
    </div>
</div>

@endsection