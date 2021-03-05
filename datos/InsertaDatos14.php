<?php
include 'Conexion.php';
include '../entidades/servicios.php';

    class InsertarDatos14 extends Conexion{
        protected static $cnx;
    
        private static function getConexion()
        {
            self::$cnx = Conexion::conectar();
        }
    
        private static function desconectar()
        {
            self::$cnx = null;
        }

    public static function Servicios($respuestas)
    {
        $query = "INSERT INTO servicios (agua,gas,electricidad,aseo,acceso_comunidad)
        VALUES (:agua,:gas,:electricidad,:aseo,:acceso_comunidad)";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);
        
        $resultado->bindValue(":agua", $respuestas->getAgua());
        $resultado->bindValue(":gas", $respuestas->getGas());
        $resultado->bindValue(":electricidad", $respuestas->getElectricidad());
        $resultado->bindValue(":aseo", $respuestas->getAseo());
        $resultado->bindValue(":acceso_comunidad", $respuestas->getAcceso_comunidad());
        
        if ($resultado->execute()) {
            return false;
        }

        return false;
    } 
}
?>