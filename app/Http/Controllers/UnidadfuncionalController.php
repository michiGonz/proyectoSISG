<?php

namespace App\Http\Controllers;

use \App\Models\Unidadfuncional;

class UnidadfuncionalController extends Controller {

    public function index() {
        error_reporting(0); // Desactivar toda notificación de error
        $return = "";
        $instancia = "SSQQAPP01\SQLPROFIT";
        $user = "qqgas_test";
        $key = "123456789";
        $Database = "QQG_N";
        $Database2 = "QQG2_N";
        $sqlsrv = sqlsrv_connect($instancia, ["Database" => $Database, "Uid" => $user, "PWD" => $key, "CharacterSet" => "UTF-8", "TrustServerCertificate" => true]);
        if ($errores = sqlsrv_errors()) {
            foreach ($errores as $error) {
                $return .= "<hr> ESTADO: " . $error['SQLSTATE'] . "";
                $return .= "<hr> CÓDIGO: " . $error['code'] . "";
                $return .= "<hr> MENSAJE: " . $error['message'] . "<hr><br>";
            }
        }
        $sqlsrv2 = sqlsrv_connect($instancia, ["Database" => $Database2, "Uid" => $user, "PWD" => $key, "CharacterSet" => "UTF-8", "TrustServerCertificate" => true]);
        if ($errores2 = sqlsrv_errors()) {
            foreach ($errores2 as $error) {
                $return .= "<hr> ESTADO: " . $error['SQLSTATE'] . "";
                $return .= "<hr> CÓDIGO: " . $error['code'] . "";
                $return .= "<hr> MENSAJE: " . $error['message'] . "<hr><br>";
            }
        }
        if (!empty($errores) || !empty($errores2)) {
            $consulta = sqlsrv_query($sqlsrv, "SELECT * FROM sndepart");
            while ($dato = sqlsrv_fetch_array($consulta, SQLSRV_FETCH_ASSOC)) {
                $datos[] = $dato;
            }
            $consulta2 = sqlsrv_query($sqlsrv2, "SELECT * FROM sndepart");
            while ($dato2 = sqlsrv_fetch_array($consulta2, SQLSRV_FETCH_ASSOC)) {
                $datos2[] = $dato2;
            }
            $departamentos = array_merge(($datos) ? $datos : [], ($datos2) ? $datos2 : []);

            sqlsrv_close($sqlsrv);
            sqlsrv_close($sqlsrv2);

            foreach ($departamentos as $departamento) {
                if (!empty($departamento['co_depart'])) {
                    $uf = new Unidadfuncional();
                    $uf->co_depart = $departamento['co_depart'];
                    $uf->des_depart = $departamento['des_depart'];
                    $uf->save();
                }
            }

            error_reporting(1); // Activar toda notificación de error

        }
        return redirect()->route('indicators.index');
    }
}
