<?php

include '../controlador/DatosControlador.php';
include '../helps/helps.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["id"])) {

        $id = validar_campo($_GET["id"]);
        if (InsertarDatos::eliminarRegistro1($id)) {
            '<script> swal ("mensaje","Eliminado");</script>';
            header("location:crud.php");
        }

    }
} else {
    header("location:crud.php?error=1");
}