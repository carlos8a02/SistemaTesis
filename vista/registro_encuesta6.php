<?php
 include '../controlador/DatosControlador6.php'; 

 session_start(); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["centro_salud"]) && isset($_POST["estatus"])
    && isset($_POST["ambulancias"])   && isset($_POST["patologias"]))
    {
        if (!empty($_POST["centro_salud"]) && !empty($_POST["estatus"])
        && !empty($_POST["ambulancias"]) &&   !empty($_POST["patologias"])) 
        { 
            $centro_salud=$_POST["centro_salud"];
            $estatus=$_POST["estatus"];
            $ambulancias=$_POST["ambulancias"];
            $patologias=$_POST["patologias"];
            if (DatosControlador6::Centros($centro_salud,$estatus,$ambulancias,$patologias)) 
        {
            
        }
    }else {
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
    header("location:encuestas/Vista_3.php?error=1");
}

?>