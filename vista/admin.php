<?php include 'partials/head.php';?>
<?php
//1 admin 2 analista 3 supervisor 
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 2) :
        header("location:supervisor.php");
	elseif($_SESSION["usuario"]["privilegio"] == 3) :
		header("location:encuestas/vista_1.php");
	endif;
} else {
	
    header("location:login.php");
}
?>
<?php include 'partials/menu.php';?>
<div class="container">

	<div class="starter-template">
		<br>	
		<br>
		<br>
		<div class="jumbotron">
			<div class="container text-center">
				<h1><strong>Bienvenido</strong> <?php echo $_SESSION["usuario"]["nombre"]; ?></h1>
				<p>Panel de control | <span class="label label-info"><?php 
				if($_SESSION["usuario"]["privilegio"] == 1):
					echo "Admin";
					elseif($_SESSION["usuario"]["privilegio"] == 2):
						echo "Supervisor";
					elseif($_SESSION["usuario"]["privilegio"] == 3):
						echo "Analista";
					else:
						echo "No encontrado";
					endif; ?></span></p>
				<p>
		
									</p>
			</div>
		</div>
		
	</div>
</div><!-- /.container -->

<?php include 'partials/footer.php';?>