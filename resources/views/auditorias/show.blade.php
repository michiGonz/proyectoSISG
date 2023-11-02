@extends('base')
@section('title', 'Inicio')
@section('content')

<div class="card">
    <h2 class="card-header">Mostrar Registro de Permisos de Trabajo</h2>
    <div class="card-body">
        <form method="POST" action="{{ route('auditorias.store') }}">
            @csrf

            <div class="table table-striped-columns ">
                @csrf

                <div class="form-group col-md-4">
                    <label for="total_permisos"> Total de Permisos Generados </label>
                    <input type="number" value="{{ $auditorias->total_permisos }}" name="total_permisos" id="total_permisos" class="form-control" value=0 disabled />
                </div>

                <div class="card col-md-12">
                    <div class="card-body table-primary ">
                        <div class="row">

                            <div class="form-group col-md 3">
                                <label for="permisos_generadosqqg"> Permisos Generados Quiriquire Gas</label>
                                <input type="number" value="{{ $auditorias->permisos_generadosqqg }}" name="permisos_generadosqqg" id="permisos_generadosqqg" class="form-control" value=0 disabled />
                            </div>

                            <div class="form-group col-md 3">
                                <label for="auditadas_qqgas">Permisos Auditados Quiriquire Gas </label>
                                <input type="number" value="{{ $auditorias->auditadas_qqgas}}" name="auditadas_qqgas" id="auditadas_qqgas" class="form-control" disabled />
                            </div>

                            <div class="form-group col-md 3">
                                <label for="desviacion_qqgas">Permisos con Desviaciones Quiriquire Gas</label>
                                <input type="number" value="{{ $auditorias->desviacion_qqgas}}" name="desviacion_qqgas" id="desviacion_qqgas" class="form-control" disabled />
                            </div>

                            <div class="form-group col-md 3">
                                <label for="noauditadas_qqgas">Permisos de Trabajo no Auditados Quiriquire Gas</label>
                                <input type="number" value="{{ $auditorias->noauditadas_qqgas}}" name="noauditadas_qqgas" id="noauditadas_qqgas" class="form-control" disabled />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="card col-md-12">
                            <div class="card-body table-danger ">
                                <div class="row">

                                    <div class="form-group col-md 3">
                                    <br>
                                        <label for="permisos_generadospdvsa"> Permisos Generados de PDVSA</label>
                                        <input type="number" value="{{ $auditorias->permisos_generadospdvsa}}" name="permisos_generadospdvsa" id="permisos_generadospdvsa" class="form-control" value=0 disabled />
                                    </div>

                                    <div class="form-group col-md 3">
                                        <label for="auditadas_pdvsa">Permisos Auditados por PDVSA </label>
                                        <input type="number" value="{{ $auditorias->auditadas_pdvsa}}" name="auditadas_pdvsa" id="auditadas_pdvsa" class="form-control" value=0 disabled />
                                    </div>

                                    <div class="form-group col-md 3">
                                        <label for="desviaciones_pdvsa">Permisos con Desviaciones PDVSA</label>
                                        <input type="number" value="{{ $auditorias->desviaciones_pdvsa}}" name="desviaciones_pdvsa" id="desviaciones_pdvsa" class="form-control" disabled />
                                    </div>

                                    <div class="form-group col-md 3">
                                        <label for="noauditadas_qqgas">Permisos de Trabajo no Auditados PDVSA</label>
                                        <input type="number" value="{{ $auditorias->noauditadas_qqgas}}" name="noauditadas_qqgas" id="noauditadas_qqgas" class="form-control" value=0 disabled />
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card col-md-12" id="desviacion">
                            <h4 class="card-header"> Desviaciones Quiriquire Gas SA
                                <small class="float-right" id="suma_desviacion"></small>
                            </h4>
                            <div class="card-body table-primary ">
                                <div class="row">
                                    @csrf
                                    <div class="form-group col-md-4">
                                        <label for="desvqqgas_1"></label>No indica hora de inicio de la actividad.</label>
                                        <input class="form-control" value="{{ $auditorias->desvqqgas_1}}" type="number" name="desvqqgas_1" disabled />

                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="desvqqgas_2"></label>Permisos sin cerrar</label>
                                        <input class="form-control" value="{{ $auditorias->desvqqgas_2}}" type="number" name="desvqqgas_2" disabled />

                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="desvqqgas_3"></label>No indica prueba de gas</label>
                                        <input class="form-control" value="{{ $auditorias->desvqqgas_3}}" type="number" name="desvqqgas_3" disabled />

                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="desvqqgas_4"></label> No establece en el permiso el uso de un certificado de altura</label>
                                        <input class="form-control" value="{{ $auditorias->desvqqgas_4}}" type="number" name="desvqqgas_4" disabled />


                                    </div>

                                    <div class=" form-group col-md-4">
                                        <label for="desvqqgas_5"></label> No indica nombre y apellido del solicitante, solo firma</label>
                                        <input class="form-control" value="{{ $auditorias->desvqqgas_5}}" type="number" name="desvqqgas_5" disabled />

                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="desvqqgas_6"></label>El saro no indica firma del supervisor responsable</label>
                                        <input class="form-control" value="{{ $auditorias->desvqqgas_6}}" type="number" name="desvqqgas_6" disabled />

                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="desvqqgas_7"></label> El saro no describe el motivo del riesgo en ninguno de los peligros señalados</label>
                                        <input class="form-control" value="{{ $auditorias->desvqqgas_7}}" type="number" name="desvqqgas_7" disabled />

                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="desvqqgas_8"></label> No presento el saro al momento de la auditoria</label>
                                        <input class="form-control" value="{{ $auditorias->desvqqgas_8}}" type="number" name="desvqqgas_8" disabled />

                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="desvqqgas_9"></label> No corresponde de el numero de permiso en el saro</label>
                                        <input class="form-control" value="{{ $auditorias->desvqqgas_9}}" type="number" name="desvqqgas_9" disabled />

                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="desvqqgas_10"></label> El saro no indica el numero de permiso</label>
                                        <input class="form-control" type="number" value="{{ $auditorias->desvqqgas_10}}" name="desvqqgas_10" disabled />

                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="desvqqgas_11"></label> No indica el equipo a intervenir</label>
                                        <input class="form-control" type="number" value="{{ $auditorias->desvqqgas_11}}" name="desvqqgas_11" disabled />

                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="desvqqgas_12"></label> Casillas sin llenar ó vacias.</label>
                                        <input class="form-control" type="number" value="{{ $auditorias->desvqqgas_12}}" name="desvqqgas_12" disabled />

                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="desvqqgas_13"></label>No especifica herramientas manuales a utilizar.</label>
                                        <input class="form-control" value="{{ $auditorias->desvqqgas_13}}" type="number" name="desvqqgas_13" disabled />

                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="desvqqgas_14"></label> No indica numero de Orden de Trabajo.</label>
                                        <input class="form-control" value="{{ $auditorias->desvqqgas_14}}" type="number" name="desvqqgas_14" disabled />

                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="desvqqgas_15"></label> No indica EPP a utilizar.</label>
                                        <input class="form-control" value="{{ $auditorias->desvqqgas_15}}" type="number" name="desvqqgas_15" disabled />

                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="desvqqgas_16"></label> No indica nombre, apellido ni cargo del autorizante.</label>
                                        <input class="form-control" value="{{ $auditorias->desvqqgas_16}}" type="number" name="desvqqgas_16" disabled />

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card col-md-12" id="pdvsa">
                        <h4 class="card-header"> Desviaciones PDVSA
                            <small class="float-right" id="suma_pdvsa"></small>
                        </h4>
                        <div class="card-body table-danger">
                            <div class="row">
                                @csrf

                                <div class="form-group col-md-4">
                                    <label for="desvpdvsa_1"></label>No indica hora de inicio de la actividad.</label>
                                    <input class="form-control" value="{{ $auditorias->desvpdvsa_1}}" type="number" name="desvpdvsa_1" disabled />

                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvpdvsa_2"></label>Permisos sin cerrar</label>
                                    <input class="form-control" value="{{ $auditorias->desvpdvsa_2}}" type="number" name="desvpdvsa_2" disabled />

                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvpdvsa_3"></label>No indica prueba de gas</label>
                                    <input class="form-control" value="{{ $auditorias->desvpdvsa_3}}" type="number" name="desvpdvsa_3" disabled />

                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvpdvsa_4"></label> No establece en el permiso el uso de un certificado de altura</label>
                                    <input class="form-control" value="{{ $auditorias->desvpdvsa_4}}" type="number" name="desvpdvsa_4" disabled />

                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvpdvsa_5"></label> No indica nombre y apellido del solicitante, solo firma</label>
                                    <input class="form-control" type="number" value="{{ $auditorias->desvpdvsa_5}}" name="desvpdvsa_5" disabled />

                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvpdvsa_6"></label>El saro no indica firma del supervisor responsable</label>
                                    <input class="form-control" type="number" value="{{ $auditorias->desvpdvsa_6}}" name="desvpdvsa_6" disabled />

                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvpdvsa_7"></label> El saro no describe el motivo del riesgo en ninguno de los peligros señalados</label>
                                    <input class="form-control" type="number" value="{{ $auditorias->desvpdvsa_7}}" name="desvpdvsa_7" disabled />

                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvpdvsa_8"></label> No presento el saro al momento de la auditoria</label>
                                    <input class="form-control" type="number" value="{{ $auditorias->desvpdvsa_8}}" name="desvpdvsa_8" disabled />

                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvpdvsa_9"></label> No corresponde de el numero de permiso en el saro</label>
                                    <input class="form-control" type="number" value="{{ $auditorias->desvpdvsa_9}}" name="desvpdvsa_9" disabled />

                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvpdvsa_10"></label> El saro no indica el numero de permiso</label>
                                    <input class="form-control" type="number" value="{{ $auditorias->desvpdvsa_10}}" name="desvpdvsa_10" disabled />

                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvpdvsa_11"></label> No indica el equipo a intervenir</label>
                                    <input class="form-control" type="number" value="{{ $auditorias->desvpdvsa_11}}" name="desvpdvsa_11" disabled />

                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvpdvsa_12"></label> Casillas sin llenar ó vacias.</label>
                                    <input class="form-control" type="number" value="{{ $auditorias->desvpdvsa_12}}" name="desvpdvsa_12" disabled />

                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvpdvsa_13"></label>No especifica herramientas manuales a utilizar.</label>
                                    <input class="form-control" type="number" name="desvpdvsa_13" value="{{ $auditorias->desvpdvsa_13}}" disabled />

                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvpdvsa_14"></label> No indica numero de Orden de Trabajo.</label>
                                    <input class="form-control" type="number" value="{{ $auditorias->desvpdvsa_14}}" name="desvpdvsa_14" disabled />

                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvpdvsa_15"></label> No indica EPP a utilizar.</label>
                                    <input class="form-control" type="number" value="{{ $auditorias->desvpdvsa_15}}" name="desvpdvsa_15" disabled />

                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvpdvsa_16"></label> No indica nombre, apellido ni cargo del autorizante.</label>
                                    <input class="form-control" type="number" value="{{ $auditorias->desvpdvsa_16}}" name="desvpdvsa_16" disabled />

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="observacion">Observacion</label>
                        <input name="observacion" id="observacion" class="form-control" value="{{ $auditorias->observacion}}" disabled></input>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="date">Fecha</label>
                        <input class="form-control" id="date" type="date" value="{{ $auditorias->date}}" name="date" disabled />
                    </div>

                    <div class="form-group col-md-12 text-center">

                        <a href="{{ route('auditorias.index') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </div>
        </form>
    </div>
</div>

@endsection