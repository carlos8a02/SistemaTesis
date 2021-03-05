<?php

$id=$_GET["id"];
/* $link->query ('UPDATE usuarios SET nombre=:nombre,email=:email,usuario=:usuario,password=:password WHERE id=:id');  */
?>
    
<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></head>
<link rel="stylesheet" href="actualizarEstilo.css">
<div class="contenedor">
<link rel="stylesheet" href="assets/normalize.css">
      <form action="../registro_encuesta2.php" method="POST" name="f2">
    <h2>Actualizar Datos Comunas</h2>
<div class="row">
            <label> ¿Existen bases de misiones? </label>
      </div>

  
            <input type="radio" value="si" name="base_misiones" onchange="validarBaseMisiones(this.value);" checked id="base_misiones" required />Si 
            <input type="radio" value="no" name="base_misiones" onchange="validarBaseMisiones(this.value);" id="base_misiones" required />No

        <br>

            <input type="text" name="inf1" id="inf1"placeholder="Indique el nombre" required>

     <br>

            <label> ¿Existen consejos comunal? </label>

<br>
            <input type="radio" value="si" name="consejo_comunal" onchange="validarConsejoComunal(this.value);" checked  id="consejo_comunal" required/>Si
            <input type="radio" value="no" name="consejo_comunal" onchange="validarConsejoComunal(this.value);" id="consejo_comunal" required/>No


<br>
            <input type="text" name="inf2" id="inf2"  placeholder="Indique el nombre" required>


<br>
             <label> Tipos de Consejos comunales </label>
<br>

            <input type="radio" value="mixto" name="tipo_de_consejo_comunal" id="tipo_de_consejo_comunal" />Mixto
            <input type="radio" value="indigena" name="tipo_de_consejo_comunal" id="tipo_de_consejo_comunal" />Indigena


         <div class="row"> 
            <label> ¿El consejo comunal pertenece a una comuna? </label>
          </div>

         <div class="row"> 
            <input type="radio" value="si" name="pertenece_a_una_comunidad" id="pertenece_a_una_comunidad" />Si
            <input type="radio" value="no" name="pertenece_a_una_comunidad" id="pertenece_a_una_comunidad" />No
        </div>

        <div class="row"> 
            <label> Existe Comité Indígena </label>
        </div>

        <div class="row"> 
            <input type="radio" value="si" name="comite_indigena" id="comite_indigena" />Si
            <input type="radio" value="no" name="comite_indigena" id="comite_indigena" />No
         </div>

      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-danger">Limpiar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
    </div>
 </form>
 </div>
 <footer>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 </footer>