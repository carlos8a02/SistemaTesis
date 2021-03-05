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
// Te recomiendo utilizar esta conección, la que utilizas ya no es la recomendada. 
$link = new PDO('mysql:host=localhost;dbname=savia', 'root', ''); // el campo vaciío es para la password. 

?>

<table class="table table-hover table-inverse table-responsive">
<legend>Organizacion Comunal</legend>
		<thead>
		<tr>
			<th>ID</th>
			<th>Existen Base de misiones</th>
			<th>Nombre de la base mision</th>
			<th>Existe Consejo Comunal</th>
			<th>Nombre de consejo comunal</th>
			<th>Tipo de consejo comunal</th>
			<th>Consejo Comunal pertenece a una comuna</th>
			<th>Comite indigena</th>
			<th>Acción</th>
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
	<td>
	<a href="#" class="btn btn-success btn-sm">Editar</a>
	<a href="#" class="btn btn-danger  btn-sm">Eliminar</a>
	</td>
 </tr>
<?php
	}
?>
</table>
</body>
</html>