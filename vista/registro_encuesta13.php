<?php
include '../controlador/DatosControlador13.php';
include '../helps/helps.php';

session_start();  
    
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (isset($_POST["vivienda"]) && isset($_POST["tipos_viviendas"])
        && isset($_POST["otras_vivienda"]))
    {
        if(!empty($_POST["vivienda"]) && !empty($_POST["tipos_viviendas"]) 
            && !empty($_POST["otras_vivienda"]))
        { 
            $vivienda= validar_campo($_POST["vivienda"]);
            $tipos_viviendas= validar_campo($_POST["tipos_viviendas"]);
            $otras_vivienda= validar_campo($_POST["otras_vivienda"]);
            if (DatosControlador13::Viviendas($vivienda,$tipos_viviendas,$otras_vivienda))
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