<?php
include '../datos/InsertaDatos4.php'; 

class DatosControlador4
{

public static function Civil($unidos,$casados,$solteros,$divorciados,$viudos,$otros)
{
    $obj_encuesta=new Civil();
    $obj_encuesta->setUnidos($unidos);
    $obj_encuesta->setCasados($casados);
    $obj_encuesta->setSolteros($solteros);
    $obj_encuesta->setDivorciados($divorciados);
    $obj_encuesta->setViudos($viudos);
    $obj_encuesta->setOtros($otros);


    return InsertarDatos4::Civil($obj_encuesta);

    }
    public function eliminarRegistro4(){
        return InsertarDatos4::eliminarRegistro4();
    }
}
?>