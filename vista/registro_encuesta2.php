<?php

 include '../controlador/DatosControlador2.php'; 

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["base_misiones"]) && isset($_POST["consejo_comunal"])
    && isset($_POST["tipo_de_consejo_comunal"])   && isset($_POST["pertenece_a_una_comunidad"])
    && isset($_POST["comite_indigena"])) {
        if (!empty($_POST["base_misiones"]) && !empty($_POST["consejo_comunal"]) && 
        !empty($_POST["tipo_de_consejo_comunal"]) && !empty($_POST["pertenece_a_una_comunidad"])
        && !empty($_POST["comite_indigena"]))
        {
        $respuestas;
        $base_misiones=$_POST["base_misiones"];
        $inf1;
        $consejo_comunal=$_POST["consejo_comunal"];
        $inf2;
        $tipo_de_consejo_comunal=$_POST["tipo_de_consejo_comunal"];
        $pertenece_a_una_comunidad=$_POST["pertenece_a_una_comunidad"];
        $comite_indigena=$_POST["comite_indigena"];

        if ($base_misiones=="no"):
        $inf1="no poseen";
        else:
        $inf1= $_POST["inf1"];
        endif;
        if($consejo_comunal=="no"):
        $inf2="no poseen";
        else:
        $inf2=$_POST["inf2"];
        endif;
        if (DatosControlador2::Comunales($base_misiones, $inf1, $consejo_comunal, $inf2, $tipo_de_consejo_comunal, $pertenece_a_una_comunidad,$comite_indigena)) 
            {
                header("location:encuestas/Vista_1.php");     
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
        