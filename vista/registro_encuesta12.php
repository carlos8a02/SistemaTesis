<?php
include '../controlador/DatosControlador12.php';
include '../helps/helps.php';

session_start();  

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (isset($_POST["cuenta_propia"]))
    {
        if(!empty($_POST["cuenta_propia"]))
        {
            $cuenta_propia= validar_campo($_POST["cuenta_propia"]);
            if (DatosControlador12::Independiente($cuenta_propia)) 
            {
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