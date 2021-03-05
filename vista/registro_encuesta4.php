<?php

 include '../controlador/DatosControlador4.php'; 

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["unidos"]) && isset($_POST["casados"])
    && isset($_POST["solteros"])   && isset($_POST["divorciados"]) 
    && isset($_POST["viudos"]) && isset($_POST["otros"]))
    {
        if (!empty($_POST["unidos"]) && !empty($_POST["casados"])
        && !empty($_POST["solteros"]) &&   !empty($_POST["divorciados"])
        && !empty($_POST["viudos"]) && !empty($_POST["otros"])) 
        {
            $unidos=$_POST["unidos"];
            $casados=$_POST["casados"];
            $solteros=$_POST["solteros"];
            $divorciados=$_POST["divorciados"];
            $viudos=$_POST["viudos"];
            $otros=$_POST["otros"];
            if (DatosControlador4::Civil($unidos, $casados, $solteros, $divorciados,$viudos, $otros)) 
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
    window.location.href='encuestas/Vista_2.php';
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


?>