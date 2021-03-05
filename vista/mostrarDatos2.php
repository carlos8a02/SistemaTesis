<?php

include "../controlador/DatosControlador2.php"; 


$filas3=DatosControlador2::getDatos2();


?>
<table class="table table-hover table-inverse table-responsive">
						<legend>Distribucion Geografica</legend>
							<thead>
								<tr>
									<th>ID</th>
									<th>base de misiones</th>
									<th>Municipios</th>
									<th>Parroquias</th>
									<th>Sector</th>
									<th>Nombre de comunidad</th>
									<th>Nombre Indigena</th>
									<th>Grupo</th>
									<th>Acción</th>
								</tr>
								</thead>
								<tbody>
								<?php
									print_r($filas3);	
								?>
										<?php foreach($filas3 as $datos){
										

										?>
										<tr>
										<!-- 	
id
base_misiones
inf1
consejo_comunal
inf2
tipo_de_consejo_comunal
pertenece_a_una_comunidad
comite_indigena -->
											<td><?php echo $datos["id"] ?></td>
											<td><?php echo $datos["base_misiones"] ?></td>
											<td><?php echo $datos["inf1"] ?></td>
											<td><?php echo $datos["consejo_comunal"] ?></td>
											<td><?php echo $datos["inf2"] ?></td>
											<td><?php echo $datos["tipo_de_consejo_comunal"] ?></td>
											<td><?php echo $datos["pertenece_a_una_comunidad"] ?></td>
											<td><?php echo $datos["comite_indigena"] ?></td>
											
											<td>
												<a href="#" class="btn btn-success btn-sm">Editar</a>
												<a href="#" class="btn btn-danger  btn-sm">Eliminar</a>
											</td>	
										</tr>
										<?php } ?>
									
									<?php
?>							
	</tbody>
	</table>