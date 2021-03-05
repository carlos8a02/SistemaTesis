<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Sistema SAVIA</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
             <style>
  a{color:#000;}
  nav.navbar{background-color: #255B99;border-color:#255b99;border-radius: 0px;}
  </style>
        <li><a href="index.php">Principal</a></li>

      <?php if (!isset($_SESSION["usuario"])) {?>
            <li><a href="registro.php">Registro</a></li>
            <?php } else {
    ?>
              <li><a href="crud.php">Mantenimiento</a></li>
             <?php if ($_SESSION["usuario"]["privilegio"] == 1 or $_SESSION["usuario"]["privilegio"] == 2) {?>
              <li><a href="../vista/encuestas/vista_1.php">Llenar Encuestas</a></li>
              <li><a href="vista_reportes.php">Reportes</a></li>
              <?php } else{?>
              
            <?php }
}?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../vista/cerrar-sesion.php"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesion</a></li>
      </ul>
    </div>
  </div>
</nav>