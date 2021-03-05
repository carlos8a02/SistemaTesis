<?php
 include '../controlador/DatosControlador5.php'; 
 session_start(); 
$total_habitantes_indigenas=$_POST["total_habitantes_indigenas"];
$actas_nacimiento=$_POST["actas_nacimiento"];
$cedulas_indentidad=$_POST["cedulas_identidad"];
$numero_femeninos=$_POST["numero_femeninos"];
$numero_masculinos=$_POST["numero_masculinos"];
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
   if (isset($_POST["total_habitantes_indigenas"]) && isset($_POST["actas_nacimiento"])
        && isset($_POST["cedulas_identidad"])  && isset($_POST["numero_femeninos"])
        && isset($_POST["numero_masculinos"]) ) 
    {
        if (!empty($_POST["total_habitantes_indigenas"]) && !empty($_POST["actas_nacimiento"])
        && !empty($_POST["cedulas_identidad"]) &&   !empty($_POST["numero_femeninos"])
        && !empty($_POST["numero_masculinos"])) 
        { 
        if($actas_nacimiento=="si"):
        $numero_actas="0";
        elseif($actas_nacimiento=="no"):
            $numero_actas=$_POST["numero_actas"];
        endif; 

        if($cedulas_indentidad=="si"):
            $numero_cedulas="0";
            elseif($cedulas_indentidad=="no"):
            $numero_cedulas=$_POST["numero_cedulas"];
        endif;
        if (DatosControlador5::DistribucionPoblacion($total_habitantes_indigenas,$actas_nacimiento,$numero_actas,$cedulas_indentidad,$numero_cedulas,$numero_femeninos,$numero_masculinos)) 
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
        window.location.href='encuestas/Vista_3.php';
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
        header("location:encuestas/Vista_2.php?error=1");
    }
 


?>