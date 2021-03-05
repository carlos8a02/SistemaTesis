<?php

include '../controlador/DatosControlador9.php'; 

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if(isset($_POST["infantes_femeninos"]) && isset($_POST["infantes_masculinos"])
   && isset($_POST["nacidos"])){
     if (!empty($_POST["infantes_femeninos"]) && !empty($_POST["infantes_masculinos"])
     && !empty($_POST["nacidos"])) 
        {
       $infantes_femeninos=$_POST["infantes_femeninos"];
       $infantes_masculinos=$_POST["infantes_masculinos"];
       $nacidos=$_POST["nacidos"];
       if (DatosControlador9::Infantil ($infantes_femeninos,$infantes_masculinos,$nacidos))
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