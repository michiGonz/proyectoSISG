@extends('base')
@section('title', 'Inicio')
@section('content')

<form method="POST" class="card" action="{{ route('auditorias.store') }}">
    <h2 class="card-header">
        Auditorias de permisos de Trabajo
    </h2>
    <div class="card-body">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="total_permisos"> Total de Permisos Generados </label>
                <input type="number" name="total_permisos" id="total_permisos" class="form-control" value=0 />
            </div>

            <div class="card col-md-12">
                <div class="card-body table-primary ">
                    <div class="row">

                        <div class="form-group col-md 3">
                            <label for="permisos_generadosqqg"> Permisos Generados Quiriquire Gas</label>
                            <input type="number" name="permisos_generadosqqg" id="permisos_generadosqqg" class="form-control" value=0 />
                        </div>

                        <div class="form-group col-md 3">
                            <label for="auditadas_qqgas">Permisos Auditados Quiriquire Gas </label>
                            <input type="number" name="auditadas_qqgas" id="auditadas_qqgas" class="form-control" value=0 />
                        </div>

                        <div class="form-group col-md 3">
                            <label for="desviacion_qqgas">Permisos con Desviaciones Quiriquire Gas</label>
                            <input type="number" name="desviacion_qqgas" id="desviacion_qqgas" class="form-control" value=0 />
                        </div>

                        <div class="form-group col-md 3">
                            <label for="noauditadas_qqgas">Permisos de Trabajo no Auditados Quiriquire Gas</label>
                            <input type="number" name="noauditadas_qqgas" id="noauditadas_qqgas" class="form-control" value=0 />
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
                                    <label for="permisos_generadospdvsa"> Permisos Generados de PDVSA</label>
                                    <input type="number" name="permisos_generadospdvsa" id="permisos_generadospdvsa" class="form-control" value=0 />
                                </div>

                                <div class="form-group col-md 3">
                                    <label for="auditadas_pdvsa">Permisos Auditados por PDVSA </label>
                                    <input type="number" name="auditadas_pdvsa" id="auditadas_pdvsa" class="form-control" value=0 />
                                </div>

                                <div class="form-group col-md 3">
                                    <label for="desviaciones_pdvsa">Permisos con Desviaciones PDVSA</label>
                                    <input type="number" name="desviacion_qqgas" id="desviacion_qqgas" class="form-control" value=0 />
                                </div>

                                <div class="form-group col-md 3">
                                    <label for="noauditadas_qqgas">Permisos de Trabajo no Auditados PDVSA</label>
                                    <input type="number" name="noauditadas_qqgas" id="noauditadas_qqgas" class="form-control" value=0 />
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
                                    <input class="form-control" type="number" name="desvqqgas_1" value="0" />
                             
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvqqgas_2"></label>Permisos sin cerrar</label>
                                    <input class="form-control" type="number" name="desvqqgas_2" value="0" />
                                    
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvqqgas_3"></label>No indica prueba de gas</label>
                                    <input class="form-control" type="number" name="desvqqgas_3" value="0" />
                                
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvqqgas_4"></label> No establece en el permiso el uso de un certificado de altura</label>
                                    <input class="form-control" type="number" name="desvqqgas_4" value="0" />
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvqqgas_5"></label> No indica nombre y apellido del solicitante, solo firma</label>
                                    <input class="form-control" type="number" name="desvqqgas_5" value="0" />
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvqqgas_6"></label>El saro no indica firma del supervisor responsable</label>
                                    <input class="form-control" type="number" name="desvqqgas_6" value="0" />
                                
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvqqgas_7"></label> El saro no describe el motivo del riesgo en ninguno de los peligros señalados</label>
                                    <input class="form-control" type="number" name="desvqqgas_7" value="0" />
                                 
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvqqgas_8"></label> No presento el saro al momento de la auditoria</label>
                                    <input class="form-control" type="number" name="desvqqgas_8" value="0" />
                                  
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvqqgas_9"></label> No corresponde de el numero de permiso en el saro</label>
                                    <input class="form-control" type="number" name="desvqqgas_9" value="0" />
                                  
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvqqgas_10"></label> El saro no indica el numero de permiso</label>
                                    <input class="form-control" type="number" name="desvqqgas_10" value="0" />
                                    
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvqqgas_11"></label> No indica el equipo a intervenir</label>
                                    <input class="form-control" type="number" name="desvqqgas_11" value="0" />
                                    
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvqqgas_12"></label> Casillas sin llenar ó vacias.</label>
                                    <input class="form-control" type="number" name="desvqqgas_12" value="0" />
                                  
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvqqgas_13"></label>No especifica herramientas manuales a utilizar.</label>
                                    <input class="form-control" type="number" name="desvqqgas_13" value="0" />
                                 
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvqqgas_14"></label> No indica numero de Orden de Trabajo.</label>
                                    <input class="form-control" type="number" name="desvqqgas_14" value="0" />
                               
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvqqgas_15"></label> No indica EPP a utilizar.</label>
                                    <input class="form-control" type="number" name="desvqqgas_15" value="0" />
                                   
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvqqgas_16"></label> No indica nombre, apellido ni cargo del autorizante.</label>
                                    <input class="form-control" type="number" name="desvqqgas_16" value="0" />
                                 
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
                                    <input class="form-control" type="number" name="desvpdvsa_1" value="0" />
                                  
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvpdvsa_2"></label>Permisos sin cerrar</label>
                                    <input class="form-control" type="number" name="desvpdvsa_2" value="0" />
                               
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvpdvsa_3"></label>No indica prueba de gas</label>
                                    <input class="form-control" type="number" name="desvpdvsa_3" value="0" />
                                   
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvpdvsa_4"></label> No establece en el permiso el uso de un certificado de altura</label>
                                    <input class="form-control" type="number" name="desvpdvsa_4" value="0" />
                               
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvpdvsa_5"></label> No indica nombre y apellido del solicitante, solo firma</label>
                                    <input class="form-control" type="number" name="desvpdvsa_5" value="0" />
                                   
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvpdvsa_6"></label>El saro no indica firma del supervisor responsable</label>
                                    <input class="form-control" type="number" name="desvpdvsa_6" value="0" />
                             
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvpdvsa_7"></label> El saro no describe el motivo del riesgo en ninguno de los peligros señalados</label>
                                    <input class="form-control" type="number" name="desvpdvsa_7" value="0" />
                                    
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvpdvsa_8"></label> No presento el saro al momento de la auditoria</label>
                                    <input class="form-control" type="number" name="desvpdvsa_8" value="0" />
    
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvpdvsa_9"></label> No corresponde de el numero de permiso en el saro</label>
                                    <input class="form-control" type="number" name="desvpdvsa_9" value="0" />
                                  
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvpdvsa_10"></label> El saro no indica el numero de permiso</label>
                                    <input class="form-control" type="number" name="desvpdvsa_10" value="0" />
                                  
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvpdvsa_11"></label> No indica el equipo a intervenir</label>
                                    <input class="form-control" type="number" name="desvpdvsa_11" value="0" />
                              
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvpdvsa_12"></label> Casillas sin llenar ó vacias.</label>
                                    <input class="form-control" type="number" name="desvpdvsa_12" value="0" />
                                    
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvpdvsa_13"></label>No especifica herramientas manuales a utilizar.</label>
                                    <input class="form-control" type="number" name="desvpdvsa_13" value="0" />
                                
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvpdvsa_14"></label> No indica numero de Orden de Trabajo.</label>
                                    <input class="form-control" type="number" name="desvpdvsa_14" value="0" />
                                  
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvpdvsa_15"></label> No indica EPP a utilizar.</label>
                                    <input class="form-control" type="number" name="desvpdvsa_15" value="0" />
                                 
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="desvpdvsa_16"></label> No indica nombre, apellido ni cargo del autorizante.</label>
                                    <input class="form-control" type="number" name="desvpdvsa_16" value="0" />
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="observacion">Observacion</label>
                        <textarea name="observacion" id="observacion" class="form-control" rows="1" required></textarea>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="date">Fecha</label>
                        <input class="form-control" id="date" type="date" name="date" value="0" />
                    </div>
                    <div class="col-md-12">
                        <br>
                        <button type="submit" class="btn btn-primary">Crear Registro</button>

                        <a href="{{ route('auditorias.index') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>



<script>
    $('#desviacion input').change(function() {
        let suma = 0;
        $('#desviacion').find('*').each(function(index) {
            if ($(this).attr('name')) {
                let nro = parseInt($(this).val());
                if (nro > 0) {
                    suma = suma + nro;
                }
            }
        });
        $('#suma_desviacion').html('Total: ' + suma);
    });

    $('#pdvsa input').change(function() {
        let suma = 0;
        $('#pdvsa').find('*').each(function(index) {
            if ($(this).attr('name')) {
                let nro = parseInt($(this).val());
                if (nro > 0) {
                    suma = suma + nro;
                }
            }
        });
        $('#suma_pdvsa').html('Total: ' + suma);
    });
</script>
@endsection