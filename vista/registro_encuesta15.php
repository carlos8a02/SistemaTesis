<?php

 include '../controlador/DatosControlador15.php';
 include '../helps/helps.php';

session_start(); 
 
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (isset($_POST["agua"]) && isset($_POST["gas"])
        && isset($_POST["electricidad"]) && isset($_POST["aseo"])
        && isset($_POST["acceso_comunidad"]))
    {
        if(!empty($_POST["agua"]) && !empty($_POST["gas"]) 
        && !empty($_POST["electricidad"]) && !empty($_POST["aseo"])
        && !empty($_POST["acceso_comunidad"]))
        {
            $agua  = validar_campo($_POST["agua"]);
            $gas  = validar_campo($_POST["gas"]);
            $electricidad  = validar_campo($_POST["electricidad"]);
            $aseo  = validar_campo($_POST["aseo"]);
            $acceso_comunidad  = validar_campo($_POST["acceso_comunidad"]);
            if (DatosControlador14::Servicios($agua,$gas,$electricidad,$aseo,$acceso_comunidad))
            {
                header("location:encuestas/Vista_4.php");
            }
        }else{
            echo "<script src='//cdn.jsdelivr.net/npm/sweetalert2@10'></script>;";
            echo "<script>function redireccionarPaginaError(){
            window.location.href='encuestas/Vista_4.php?error=1';
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
    window.location.href='encuestas/Vista_4.php';
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
    header("location:encuestas/Vista_4.php?error=1");
}

?>