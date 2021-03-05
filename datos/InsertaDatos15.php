<?php
include 'Conexion.php';
include '../entidades/menores_trabajando.php';

    class InsertarDatos15 extends Conexion{
        protected static $cnx;
    
        private static function getConexion()
        {
            self::$cnx = Conexion::conectar();
        }
    
        private static function desconectar()
        {
            self::$cnx = null;
        }

    public static function Menores($respuestas)
    {
        $query = "INSERT INTO menores_trabajando (ninos_menores,total_menores,detalle_empleados)
        VALUES (:ninos_menores,:total_menores,:detalle_empleados)";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);
        
        $resultado->bindValue(":ninos_menores", $respuestas->getNinos_menores());
        $resultado->bindValue(":total_menores", $respuestas->getTotal_menores());
        $resultado->bindValue(":detalle_empleados", $respuestas->getDetalle_empleados());
        
        if ($resultado->execute()) {
            return false;
        }

        return false;
    } 
}
?>