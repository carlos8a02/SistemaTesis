<?php
include 'Conexion.php';
include '../entidades/centros_salud.php';

    class InsertarDatos6 extends Conexion{
        protected static $cnx;
    
        private static function getConexion()
        {
            self::$cnx = Conexion::conectar();
        }
    
        private static function desconectar()
        {
            self::$cnx = null;
        }

    public static function Centros($respuestas)
    {
        $query = "INSERT INTO centros_salud (centro_salud,estatus,ambulancias,patologias) 
        VALUES (:centro_salud,:estatus,:ambulancias,:patologias)";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);
        
        $resultado->bindValue(":centro_salud", $respuestas->getCentro_salud());
        $resultado->bindValue(":estatus", $respuestas->getEstatus());
        $resultado->bindValue(":ambulancias", $respuestas->getAmbulancias());
        $resultado->bindValue(":patologias", $respuestas->getPatologias());
        
       

        if ($resultado->execute()) {
            return false;
        }

        return false;
    } 
         /**
     * Metodo que sirve para eliminar
     *
     * @param      object   
     * @return     boolean
     */
    public static function eliminarRegistro6($id)
    {
        $query = "DELETE FROM centros_salud WHERE id = :id";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindParam(":id", $id);

        $resultado->execute();

        if ($resultado->execute()) {
            return true;
        }

        return false;
    }
}
?>