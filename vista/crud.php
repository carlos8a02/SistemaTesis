<?php include 'partials/head.php';?>
<?php include 'partials/menu.php';?>
<?php if (isset($_SESSION["usuario"])) {
     if ($_SESSION["usuario"]["privilegio"] == 3) :
		header("location:encuestas/vista_1.php");
	endif;
} else {
	
    header("location:login.php");
}
?>
<div class="container">

	<div class="starter-template">
		<br>
		<br>
		<br>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
					<?php
					include 'MostrarDatosPrueba.php';
						echo "<br>";
				
					?>
					</div>
				</div>
			</div>
		</div>
	</div>

</div><!-- /.container -->
					

<?php include 'partials/footer.php';?>