<?php
include '../datos/InsertaDatos14.php'; 

class DatosControlador14
{

public static function Servicios ($agua,$gas,$electricidad,$aseo,$acceso_comunidad)
{
    $obj_encuesta=new Servicios();
    $obj_encuesta->setAgua($agua);
    $obj_encuesta->setGas($gas);
    $obj_encuesta->setElectricidad($electricidad);
    $obj_encuesta->setAseo($aseo);
    $obj_encuesta->setAcceso_comunidad($acceso_comunidad);

    return InsertarDatos14::Servicios($obj_encuesta);

    }
}
?>