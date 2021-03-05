<!DOCTYPE html>
<html lang="en">

<head>
  <title>Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
 
$link = new PDO('mysql:host=localhost;dbname=savia', 'root', '');   

?>
<table class="table table-hover table-inverse table-responsive">
        <legend>Distribucion Geofrafica</legend>
		<thead>
		<tr>
        <th>ID</th>
		<th>Estado</th>
		<th>Municipios</th>
		<th>Parroquias</th>
		<th>Sector</th>
		<th>Nombre de comunidad</th>
		<th>Nombre Indigena</th>
        <th>Grupo</th>
		</tr>
		</thead>
<?php 
foreach ($link->query('SELECT * from distribucion_geografica') as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
<tr>
	<td><?php echo $row['id'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?></td>
    <td><?php echo $row['estado'] ?></td>
    <td><?php echo $row['municipios'] ?></td>
    <td><?php echo $row['parroquias'] ?></td>
    <td><?php echo $row['sector'] ?></td>
    <td><?php echo $row['nombre_comunidad'] ?></td>
    <td><?php echo $row['nombre_indigena'] ?></td>
    <td><?php echo $row['grupo'] ?></td>

 </tr>
 <script>

</script>   
<?php
	}
?>
</table>
<br>
<br>
<table class="table table-hover table-inverse table-responsive">
<legend>Organizacion Comunal</legend>
		<thead>
		<tr>
			<th >ID</th>
			<th>Existen Base de misiones</th>
			<th>Nombre de la base mision</th>
			<th>Existe Consejo Comunal</th>
			<th>Nombre de consejo comunal</th>
			<th>Tipo de consejo comunal</th>
			<th>Consejo Comunal pertenece a una comuna</th>
			<th>Comite indigena</th> 
		</tr>
		</thead>
<?php 
foreach ($link->query('SELECT * from comunas') as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
<tr>
	<td><?php echo $row['id'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?></td>
    <td><?php echo $row['base_misiones'] ?></td>
    <td><?php echo $row['inf1'] ?></td>
    <td><?php echo $row['consejo_comunal'] ?></td>
    <td><?php echo $row['inf2'] ?></td>
    <td><?php echo $row['tipo_de_consejo_comunal'] ?></td>
    <td><?php echo $row['pertenece_a_una_comunidad'] ?></td>
    <td><?php echo $row['comite_indigena'] ?></td>
 </tr>
<?php
	}
?>
</table>
<br>
<br>
<table class="table table-hover table-inverse table-responsive">
<legend>Autoridades Indigenas</legend>
		<thead>
		<tr>
			<th>ID</th>
			<th>Nombre Vocero Presidencia</th>
			<th>Nombre Autoridad Legitima</th>
			<th>Cargo Autoridad Legitima</th>
			<th>Telefono de Contacto </th>
		</tr>
		</thead>
<?php 
foreach ($link->query('SELECT * from autoridadlegitima') as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
<tr>
	<td><?php echo $row['id'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?></td>
    <td><?php echo $row['nombre_vocero'] ?></td>
    <td><?php echo $row['nombre_autoridad_legitima'] ?></td>
    <td><?php echo $row['cargo_autoridad_legitima'] ?></td>
    <td><?php echo $row['numero_de_telefono'] ?></td>
 </tr>
<?php
	}
?>
</table>
<br>
 <br>
<table class="table table-hover table-inverse table-responsive">
<legend>Estado Civil</legend>
		<thead>
        <tr>
			<th>ID</th>
			<th>Unidos</th>
			<th>Casados</th>
			<th>Solteros</th>
			<th>Divorsiados</th>
			<th>Viudos</th>
			<th>Otros</th>
		</tr>
		</thead>
<?php 
foreach ($link->query('SELECT * from estadocivil') as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
<tr>
	<td><?php echo $row['id'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?></td>
    <td><?php echo $row['unidos'] ?></td>
    <td><?php echo $row['casados'] ?></td>
    <td><?php echo $row['solteros'] ?></td>
    <td><?php echo $row['divorciados'] ?></td>
    <td><?php echo $row['viudos'] ?></td>
    <td><?php echo $row['otros'] ?></td>
 </tr>
<?php
	}
?>
</table>
 <br>
 <br>
<table class="table table-hover table-inverse table-responsive">
<legend>Distrubucion De La Poblacion</legend>
		<thead>
        <tr>
			<th>ID</th>
			<th>Habitantes Indigena</th>
			<th>Niños con actas</th>
			<th>Cuantos no poseen Actas</th>
			<th>Poseen Cedulas</th>
			<th>Cuantos no poseen Cedulas</th>
			<th>Femeninas</th>
			<th>Masculinos</th>
		</tr>
		</thead>
<?php 
foreach ($link->query('SELECT * from distribucion_poblacion') as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
<tr>
	<td><?php echo $row['id'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?></td>
    <td><?php echo $row['total_habitantes_indigenas'] ?></td>
    <td><?php echo $row['actas_nacimiento'] ?></td>
    <td><?php echo $row['numero_actas'] ?></td>
    <td><?php echo $row['cedulas_indentidad'] ?></td>
    <td><?php echo $row['numero_cedulas'] ?></td>
    <td><?php echo $row['numero_femeninos'] ?></td>
    <td><?php echo $row['numero_masculinos'] ?></td>
 </tr>
<?php
	}
?>
</table>
 <br>
 <br>
<table class="table table-hover table-inverse table-responsive">
<legend>Centros de Salud</legend>
		<thead>
        <tr>
			<th>ID</th>
			<th>Centros de Salud</th>
			<th>Estado</th>
			<th>Ambulancias</th>
			<th>Patologias</th>
		</tr>
		</thead>
<?php 
foreach ($link->query('SELECT * from centros_salud') as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
<tr>
	<td><?php echo $row['id'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?></td>
    <td><?php echo $row['centro_salud'] ?></td>
    <td><?php echo $row['estatus'] ?></td>
    <td><?php echo $row['ambulancias'] ?></td>
    <td><?php echo $row['patologias'] ?></td>
 </tr>
<?php
	}
?>
</table>
 <br>
 <br>
<table class="table table-hover table-inverse table-responsive">
<legend>Natalidad</legend>
		<thead>
        <tr>
			<th>ID</th>
			<th>Embarazadas</th>
			<th>Total Embarazadas</th>
			<th>Menores Emabarazadas</th>
			<th>Total Menores Embarazadas</th>
			<th>Jovenes Embarazadas</th>
			<th>Total jovenes Embarazadas</th>
			<th>Adultas Embarazadas</th>
			<th>total Adultas Embarazas</th>
			<th>Parteras</th>
			<th>Total Pasteras</th>
		</tr>
		</thead>
<?php 
foreach ($link->query('SELECT * from natalidades') as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
<tr>
	<td><?php echo $row['id'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?></td>
    <td><?php echo $row['mujeres_embarazadas'] ?></td>
    <td><?php echo $row['numero_mujeres_embarazadas'] ?></td>
    <td><?php echo $row['mujeres_10_17'] ?></td>
    <td><?php echo $row['numero_menores_embarazadas'] ?></td>
    <td><?php echo $row['mujeres_18_25'] ?></td>
    <td><?php echo $row['numero_jovenes_embarazadas'] ?></td>
    <td><?php echo $row['mujeres_26_45'] ?></td>
    <td><?php echo $row['numero_adultas_embarazadas'] ?></td>
    <td><?php echo $row['parteras'] ?></td>
    <td><?php echo $row['numero_parteras'] ?></td>
 </tr>
<?php
	}
?>
</table>
 <br>
 <br>
<table class="table table-hover table-inverse table-responsive">
<legend>Lactancia</legend>
		<thead>
        <tr>
			<th>ID</th>
			<th>Lactancia Materna</th>
			<th>Total Lactando</th>
		</tr>
		</thead>
<?php 
foreach ($link->query('SELECT * from lactancias') as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
<tr>
	<td><?php echo $row['id'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?></td>
    <td><?php echo $row['lactantes'] ?></td>
    <td><?php echo $row['total_lactante'] ?></td>
 </tr>
<?php
	}
?>
</table>
 <br>
 <br>
<table class="table table-hover table-inverse table-responsive">
<legend>Natalidad Infantil</legend>
		<thead>
        <tr>
			<th>ID</th>
			<th>Infantes Femeninas</th>
			<th>Infantes Masculinos</th>
			<th>Recien Nacidos</th>
		</tr>
		</thead>
<?php 
foreach ($link->query('SELECT * from natalidad_infantil') as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
<tr>
	<td><?php echo $row['id'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?></td>
    <td><?php echo $row['infantes_femeninos'] ?></td>
    <td><?php echo $row['infantes_masculinos'] ?></td>
    <td><?php echo $row['nacidos'] ?></td>
 </tr>
<?php
	}
?>
</table>
 <br>
 <br>
<table class="table table-hover table-inverse table-responsive">
<legend>Discapacidades</legend>
		<thead>
        <tr>
			<th>ID</th>
			<th>Existen Personas discapacitadas</th>
			<th>Total discapacitados</th>
			<th>Femeninas</th>
			<th>Masculinos</th>
			<th>Tipo Discapacidad</th>
		</tr>
		</thead>
<?php 
foreach ($link->query('SELECT * from discapacidades') as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
<tr>
	<td><?php echo $row['id'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?></td>
    <td><?php echo $row['discapacidad'] ?></td>
    <td><?php echo $row['cantidad_discapacidad'] ?></td>
    <td><?php echo $row['discapacidad_femeninas'] ?></td>
    <td><?php echo $row['discapacidad_masculinos'] ?></td>
    <td><?php echo $row['tipo_discapacidad'] ?></td>
 </tr>
<?php
	}
?>
</table>
 <br>
 <br>
<table class="table table-hover table-inverse table-responsive">
<legend>Comercios</legend>
		<thead>
        <tr>
			<th>ID</th>
			<th>Instituciones del comercio</th>
			<th>Tipos de comercipos</th>
		</tr>
		</thead>
<?php 
foreach ($link->query('SELECT * from comercios') as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
<tr>
	<td><?php echo $row['id'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?></td>
    <td><?php echo $row['comercio'] ?></td>
    <td><?php echo $row['tipos_comercios'] ?></td>
 </tr>
<?php
	}
?>
</table>
 <br>
 <br>
<table class="table table-hover table-inverse table-responsive">
<legend>Tipos de Viviendas</legend>
		<thead>
        <tr>
			<th>ID</th>
			<th>Numero de Viviendas</th>
			<th>Tipos de Viviendas</th>
			<th>Otros tipos de Viviendas</th>
		</tr>
		</thead>
<?php 
foreach ($link->query('SELECT * from viviendas') as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
<tr>
	<td><?php echo $row['id'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?></td>
    <td><?php echo $row['vivienda'] ?></td>
    <td><?php echo $row['tipos_viviendas'] ?></td>
    <td><?php echo $row['otras_vivienda'] ?></td>
 </tr>
<?php
	}
?>
</table>
<br>
<br>
<table class="table table-hover table-inverse table-responsive">
<legend>Cuenta Propia</legend>
	<thead>
        <tr>
			<th>ID</th>
			<th>Empleo Cuenta Propia</th>
		</tr>
	</thead>
<?php 
foreach ($link->query('SELECT * from empleo_independiente') as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
<tr>
	<td><?php echo $row['id'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?></td>
    <td><?php echo $row['cuenta_propia'] ?></td>
 </tr>
<?php
	}
?>
</table>
</table>
<table class="table table-hover table-inverse table-responsive">
<legend>Viviendas</legend>
	<thead>
        <tr>
			<th>ID</th>
			<th>Viviendas</th>
			<th>Tipos de vivienda</th>
			<th>Otras viviendas</th>
		</tr>
	</thead>
<?php 
foreach ($link->query('SELECT * from viviendas') as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
<tr>
	<td><?php echo $row['id'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?></td>
    <td><?php echo $row['vivienda'] ?></td>
    <td><?php echo $row['tipos_viviendas'] ?></td>
    <td><?php echo $row['otras_vivienda'] ?></td>
 </tr>
<?php
	}
?>
</table>
<table class="table table-hover table-inverse table-responsive">
<legend>Servicios</legend>
	<thead>
        <tr>
			<th>ID</th>
			<th>Agua Potable</th>
			<th>Servicio de Gas</th>
			<th>Servicio de Electricidad</th>
			<th>Aseo Urbano</th>
			<th>Acceso a la comunidad</th>
		</tr>
	</thead>
<?php 
foreach ($link->query('SELECT * from servicios') as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
<tr>
	<td><?php echo $row['id'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?></td>
    <td><?php echo $row['agua'] ?></td>
    <td><?php echo $row['gas'] ?></td>
    <td><?php echo $row['electricidad'] ?></td>
    <td><?php echo $row['aseo'] ?></td>
    <td><?php echo $row['acceso_comunidad'] ?></td>
 </tr>
<?php
	}
?>
</table>

<table class="table table-hover table-inverse table-responsive">
<legend>Menores Trabajando</legend>
	<thead>
        <tr>
			<th>ID</th>
			<th>Menores trabajando</th>
			<th>Total de menores</th>
			<th>Servicio de Electricidad</th>
			<th>Detalles</th>
		</tr>
	</thead>
<?php 
foreach ($link->query('SELECT * from menores_trabajando') as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
<tr>
	<td><?php echo $row['id'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?></td>
    <td><?php echo $row['ninos_menores'] ?></td>
    <td><?php echo $row['total_menores'] ?></td>
    <td><?php echo $row['detalle_empleados'] ?></td>
 </tr>
<?php
	}
?>
</table>
</body>
</html>