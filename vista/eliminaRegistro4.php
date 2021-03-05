<?php

include '../controlador/DatosControlador4.php';
include '../helps/helps.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["id"])) {

        $id = validar_campo($_GET["id"]);

        if (InsertarDatos4::eliminarRegistro4($id)) {
            header("location:crud.php");
        }

    }
} else {
    header("location:crud.php?error=1");
}