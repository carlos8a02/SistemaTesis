<?php include 'partials/head.php';?>
<?php include 'partials/menu.php';?>
<?php 
/* session_start(); */
//1 admin, 2 supervisor y 3 analista
if (isset($_SESSION["usuario"])) {
      if ( $_SESSION["usuario"]["privilegio"] == 3) :
            header("location:index.php");
        endif;
  } else {
      header("location:login.php");
  }
?>
<head>
<title>SAVIA - Reportes</title>
<link rel="shortcut icon" href="../vista/assets/img/logo.png">
</head>
<div style="text-align: center;">
	<a href="Excel-reporte.php" class="btn btn-primary">Descarga en Excel</a>
</div>

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
					include 'reportes.php';
						echo "<br>";
				
					?>
					</div>
				</div>
			</div>
		</div>
	</div>

</div><!-- /.container -->


<?php include 'partials/footer.php';?>