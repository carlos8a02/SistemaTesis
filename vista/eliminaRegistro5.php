<?php

include '../controlador/DatosControlador5.php';
include '../helps/helps.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["id"])) {

        $id = validar_campo($_GET["id"]);

        if (InsertarDatos5::eliminarRegistro5($id)) {
            header("location:crud.php");
        }

    }
} else {
    header("location:crud.php?error=1");
}