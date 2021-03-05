<?php
include '../controlador/DatosControlador8.php';


session_start(); 
$lactantes=$_POST["lactantes"];

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (isset($_POST["lactantes"]))
    {
        if (!empty($_POST["lactantes"])) 
        {
        if($lactantes=="si"):
        $total_lactante=$_POST["total_lactante"];
        elseif($lactantes=="no"):
        $total_lactante="0";
        endif;
        if (DatosControlador8::Lantando($lactantes,$total_lactante)) 
        {
        }
    }else{
        echo "<script src='//cdn.jsdelivr.net/npm/sweetalert2@10'></script>;";
            echo "<script>function redireccionarPaginaError(){
            window.location.href='encuestas/Vista_3.php?error=1';
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