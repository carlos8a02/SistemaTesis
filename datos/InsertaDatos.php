<?php
include 'Conexion.php';
include '../entidades/t_distribucion.php';


class InsertarDatos extends Conexion
{
    protected static $cnx;

    private static function getConexion()
    {
        self::$cnx = Conexion::conectar();
    }

    private static function desconectar()
    {
        self::$cnx = null;
    }

    public static function Distribucion($respuestas)
    {
        $query = "INSERT INTO distribucion_geografica (estado,municipios,parroquias,sector,nombre_comunidad,nombre_indigena,grupo) VALUES (:estado,:municipios,:parroquias,:sector,:nombre_comunidad,:nombre_indigena, :grupo)";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindValue(":estado", $respuestas->getEstado());
        $resultado->bindValue(":municipios", $respuestas->getMunicipios());
        $resultado->bindValue(":parroquias", $respuestas->getParroquias());
        $resultado->bindValue(":sector", $respuestas->getSector());
        $resultado->bindValue(":nombre_comunidad", $respuestas->getNombre_comunidad());
        $resultado->bindValue(":nombre_indigena", $respuestas->getNombre_indigena());
        $resultado->bindValue(":grupo", $respuestas->getGrupo());
       

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
    public static function eliminarRegistro1($id)
    {
        $query = "DELETE FROM distribucion_geografica WHERE id = :id";

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