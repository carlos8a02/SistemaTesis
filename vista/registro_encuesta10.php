<?php
include '../controlador/DatosControlador10.php'; 

session_start();
$discapacidad=$_POST["discapacidad"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["discapacidad"]) ){ 
        if (!empty($_POST["discapacidad"])) 
           {
        if($discapacidad=="si"):
            $cantidad_discapacidad=$_POST["cantidad_discapacidad"];
            $discapacidad_femeninas=$_POST["discapacidad_femeninas"];
            $discapacidad_masculinos=$_POST["discapacidad_masculinos"];
            $tipo_discapacidad=$_POST["tipo_discapacidad"];
            elseif($discapacidad=="no"):
            $cantidad_discapacidad="0";
            $discapacidad_femeninas="0";
            $discapacidad_masculinos="0";
            $tipo_discapacidad="ninguno";
        endif;
    if (DatosControlador10::Discapacitados($discapacidad,$cantidad_discapacidad,$discapacidad_femeninas,$discapacidad_masculinos,$tipo_discapacidad)) 
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
    header("location:encuestas/Vista_3.php?error=1");
}

?>