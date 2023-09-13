@extends('base')
@section('title', 'Inicio')
@section('content')



<h1>Crear Registro de Actos Inseguros</h1>
<div class="container">
    <form method="POST" class="row" action="{{ route('actoinseguro.store') }}">
        @csrf

        <div class="form-group col-md-6 table-primary" >
            <h6>Reacciones de las personas</h6>
            <label for= "AE" >Ajustan su EPP</label>
            <input class="form-control" type="number" name="AE" value=0 />
            <label for=  "CP" >Cambian de posicion</label>
            <input class="form-control" type="number" name="CP" value=0 />
            <label for= "RT" >Reacomodan su trabajo</label>
            <input class="form-control" type="number" name="RT" value=0 />
            <label for= "DT">Dejan de Trabajar</label>
            <input class="form-control" type="number" name="DT"  value=0 />
            <label for=  "PT" >Colocan puesta a tierra</label>
            <input class="form-control" type="number" name="PT" value=0 />
            <label for= "CB">Colocan bloqueos</label>
            <input class="form-control" type="number" name="CB" value=0 />

        </div>

        <div class="form-group col-md-6 table-danger" >
            <h6>Equipo de proteccion personal</h6>
            <label for= "C" >CABEZA</label>
            <input class="form-control" type="number" name="C" value=0 />
            <label for=  "OC" >Ojos y Cara</label>
            <input class="form-control" type="number" name="OC"  value=0 />
            <label for= "OI">Oidos</label>
            <input class="form-control" type="number"  name="OI"value=0 />
            <label for= "AR">Aparato respiratorio</label>
            <input class="form-control" type="number" name="AR"value=0 />
            <label for=  "BM" >Brazos y manos</label>
            <input class="form-control" type="number" name="BM" value=0 />
            <label for= "TR">Tronco</label>
            <input class="form-control" type="number" name="TR"  value=0 />
            <label for= "PP">Piernas y pies</label>
            <input class="form-control" type="number" name="PP" value=0 />
        </div>

        <div class="form-group col-md-6 table-warning" >
            <h6>Posiciones de las personas</h6>
            <label for= "GO" >Golpear contra objetos</label>
            <input class="form-control" type="number" name="GO" value=0 />
            <label for=  "AGO" >ser golpeados por objetos</label>
            <input class="form-control" type="number" name="AGO"value=0 />
            <label for= "QAT" >Quedar atrapado en,dentro de o entre objetos</label>
            <input class="form-control" type="number" name="QAT" value=0 />
            <label for= "CDA">Caidas</label>
            <input class="form-control" type="number" name="CDA" value=0 />
            <label for=  "CTE" >Contacto con temperaturas extremas</label>
            <input class="form-control" type="number" name="CTE" value=0 />
            <label for= "CCE">Contacto con corriente electrica</label>
            <input class="form-control" type="number" name="CCE"value=0 />
            <label for= "IAI" >Inhalacion, adsorcion o ingestion de una sustancia peligrosa</label>
            <input class="form-control" type="number" name="IAI" value=0 />
            <label for= "SE">Sobre-esfuerzo</label>
            <input class="form-control" type="number" name="SE" value=0 />
        </div>

        <div class="form-group col-md-6 table-secondary" >
            <h6>Herramientas y Equipo</h6>
            <label for= "IT" >Inadecuados para el trabajo</label>
            <input class="form-control" type="number" name="IT" value=0 />
            <label for=  "EFI" >Empleados en forma incorrecta</label>
            <input class="form-control" type="number" name="EFI"value=0 />
            <label for= "CI" >En condiciones inseguras</label>
            <input class="form-control" type="number" name="CI" value=0 />
        </div>

        <div class="form-group col-md-6 table-dark" >
            <h6>Procedimientos, orden y limpieza</h6>
            <label for= "PI" >Procedimientos inadecuados</label>
            <input class="form-control" type="number" name="PI" value=0 />
            <label for=  "PNC" >Procedimientos no conocidos ni entendidos</label>
            <input class="form-control" type="number" name="PNC" value=0 />
            <label for= "PNSC" >Procedimientos no se cumplen</label>
            <input class="form-control" type="number" name="PNSC" value=0 />
            <label for= "EOLI" >Estandares de orden y limpieza inadecuados</label>
            <input class="form-control" type="number" name="EOLI" value=0 />
            <label for= "EOLC" >Estandares de orden y limpieza no se cumplen</label>
            <input class="form-control" type="number" name="EOLC"value=0 />
        </div>

            <div class="form-group col-md-6 table-success" >
            <h6>Ambiente</h6>
            <label for= "TIP" >Transferir incorrectamente productos o materiales liquidos y solidos</label>
            <input class="form-control" type="number" name="TIP" value=0 />
            <label for=  "AIP" >Almacenar incorrectamente materiales solidos, liquidos o equipos</label>
            <input class="form-control" type="number" name="AIP" value=0 />
            <label for= "CVI" >Corte de vegetación inadecuado</label>
            <input class="form-control" type="number" name="CVI" value=0 />
            <label for= "PHD" >Productos y/o materiales sin hojas de datos del producto</label>
            <input class="form-control" type="number" name="PHD"value=0 />
            <label for= "LEHPI" >Lavar equipo o herramienta con productos inadecuadosn</label>
            <input class="form-control" type="number" name="LEHPI" value=0/>
            <label for= "ARA" >Afectacion de cursos de agua</label>
            <input class="form-control" type="number" name="ARA" value=0 />
            <label for= "MDP" >Mal uso y/o desperdicios de productos</label>
            <input class="form-control" type="number" name="MDP" value=0 />
            <label for= "LEHPI" >Lavar equipo o herramienta con productos inadecuadosn</label>
            <input class="form-control" type="number" name="LEHPI" value=0 />
            <label for= "ASUE" >Afectación de suelos</label>
            <input class="form-control" type="number" name="ASUE"value=0 />
            <label for= "AFAS" >Afectación de faunas silvestre</label>
            <input class="form-control" type="number" name="AFAS"value=0 />
            <label for= "MAND" >Manejo de desechos</label>
            <input class="form-control" type="number" name="MAND" value=0 />
        </div>

        <div class="form-group col-md-6">
            <label for="total">total</label>
            <textarea type="text " name="total" class="form-control" required></textarea>
        </div>

        <div class="form-group col-md-6">
            <label for="observacion">Observacion</label>
            <textarea type="text " name="observacion" class="form-control" required></textarea>
        </div>

        <div class="form-group col-md-6">
            <label for="date">Fecha</label>
            <input class="form-control" id="date" type="date" name="date" value="" />
        </div>

        <div class="form-group col-md-6">
            <button type="submit" class="btn btn-primary">Crear Registro</button>
            <a href="{{ route('actoseguro.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection
