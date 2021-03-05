<?php
include 'Conexion.php';
include '../entidades/autoridad.php';

    class InsertarDatos3 extends Conexion{
        protected static $cnx;
    
        private static function getConexion()
        {
            self::$cnx = Conexion::conectar();
        }
    
        private static function desconectar()
        {
            self::$cnx = null;
        }

    public static function AutoridadLegitima($respuestas)
    {
        $query = "INSERT INTO autoridadlegitima (nombre_vocero,	nombre_autoridad_legitima,	cargo_autoridad_legitima,	numero_de_telefono) 
        VALUES (:nombre_vocero,:nombre_autoridad_legitima,:cargo_autoridad_legitima,:numero_de_telefono)";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);
        
        $resultado->bindValue(":nombre_vocero", $respuestas->getNombre_vocero());
        $resultado->bindValue(":nombre_autoridad_legitima", $respuestas->getNombre_autoridad_legitima());
        $resultado->bindValue(":cargo_autoridad_legitima", $respuestas->getCargo_autoridad_legitima());
        $resultado->bindValue(":numero_de_telefono", $respuestas->getNumero_de_telefono());
       

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
    public static function eliminarRegistro3($id)
    {
        $query = "DELETE FROM autoridadlegitima WHERE id = :id";

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