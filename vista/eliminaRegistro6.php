<?php

include '../controlador/DatosControlador6.php';
include '../helps/helps.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["id"])) {

        $id = validar_campo($_GET["id"]);

        if (InsertarDatos6::eliminarRegistro6($id)) {
            header("location:crud.php");
        }

    }
} else {
    header("location:crud.php?error=1");
}