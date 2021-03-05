<?php

 include '../controlador/DatosControlador3.php'; 

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nombre_vocero"]) && isset($_POST["nombre_autoridad_legitima"])
    && isset($_POST["cargo_autoridad_legitima"])   && isset($_POST["numero_de_telefono"])) 
    {
        if (!empty($_POST["nombre_vocero"]) && !empty($_POST["nombre_autoridad_legitima"])
            && !empty($_POST["cargo_autoridad_legitima"]) &&   !empty($_POST["numero_de_telefono"])) 
        {
            $nombre_vocero=$_POST["nombre_vocero"];
            $nombre_autoridad_legitima=$_POST["nombre_autoridad_legitima"];
            $cargo_autoridad_legitima=$_POST["cargo_autoridad_legitima"];
            $numero_de_telefono=$_POST["numero_de_telefono"];
            if (DatosControlador3::AutoridadLegitima($nombre_vocero, $nombre_autoridad_legitima, $cargo_autoridad_legitima, $numero_de_telefono)) 
            {
            }
        }else{
            echo "<script src='//cdn.jsdelivr.net/npm/sweetalert2@10'></script>;";
            echo "<script>function redireccionarPaginaError(){
            window.location.href='encuestas/Vista_1.php?error=1';
            }
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'Error al enviar Datos!',
                showConfirmButton: false,
                timer: 1500
              })
            setTimeout('redireccionarPaginaError()', 2000);
            </script>";
        }
    }
    echo "<script src='//cdn.jsdelivr.net/npm/sweetalert2@10'></script>;";
    echo "<script>function redireccionarPagina(){
    window.location.href='encuestas/Vista_1.php';
    }
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Datos Enviados Correctamente',
        showConfirmButton: false,
        timer: 1500
      })
    setTimeout('redireccionarPagina()', 2000);
    </script>";
}else{
    header("location:encuestas/Vista_1.php?error=1");
}