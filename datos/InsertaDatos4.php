<?php
include 'Conexion.php';
include '../entidades/estadoCivil.php';

    class InsertarDatos4 extends Conexion{
        protected static $cnx;
    
        private static function getConexion()
        {
            self::$cnx = Conexion::conectar();
        }
    
        private static function desconectar()
        {
            self::$cnx = null;
        }

    public static function Civil($respuestas)
    {
    
        $query = "INSERT INTO estadocivil (unidos,	casados,	solteros,	divorciados, viudos,	otros) 
        VALUES (:unidos,:casados,:solteros,:divorciados,:viudos,:otros)";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);
        
        $resultado->bindValue(":unidos", $respuestas->getUnidos());
        $resultado->bindValue(":casados", $respuestas->getCasados());
        $resultado->bindValue(":solteros", $respuestas->getSolteros());
        $resultado->bindValue(":divorciados", $respuestas->getDivorciados());
        $resultado->bindValue(":viudos", $respuestas->getViudos());
        $resultado->bindValue(":otros", $respuestas->getOtros());
       

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
    public static function eliminarRegistro4($id)
    {
        $query = "DELETE FROM estadocivil WHERE id = :id";

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