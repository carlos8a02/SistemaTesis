<?php
include '../datos/InsertaDatos15.php'; 

class DatosControlador15
{

public static function Menores($ninos_menores,$total_menores,$detalle_empleados)
{
    $obj_encuesta=new Menores();
    $obj_encuesta->setNinos_menores($ninos_menores);
    $obj_encuesta->setTotal_menores($total_menores);
    $obj_encuesta->setDetalle_empleados($detalle_empleados);

    return InsertarDatos15::Menores($obj_encuesta);

    
    }
}
?>