<!DOCTYPE html>
  <html lang="es">
  <head>
    <title>Planilla de datos UNLa</title>
    <meta charset="utf-8">
    <link href="../css/efectosFormulario.css" rel="stylesheet">
    <link rel ="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.css">
    <link rel="shortcut icon" type="image/x-icon" href="../imagenes/portapapeles.jpg">
    <!--<script src="../Jquery/jquery-3.3.1.js"></script>
    <script>
        $(document).ready(function(){});
    </script>-->    
  </head>


  <body class="" style="background:rgb(121, 19, 19); ">
    <nav class="navbar-brand bg-warning col-12  ">
        
        <a href="index.php" class="small"> Volver a inicio </a>
        <h3 class="text-center ">Formulario de inscripción: estudiante</h3>
      </div>
</nav>
<div align="center">
<section class="col-12 d-inline"   id="venta"> 

  <div class="border col-5  h-50 d-inline-block"  align="center" style="margin:6%;background:-webkit-linear-gradient(bottom,rgb(132, 139, 68),rgb(125, 221, 176))">
  
    <div class="card-header">
      <nav class="navbar-brand font-weight-bold"> Creación de cuenta </nav>
    </div>

    <!-- <img src="http://lorempixel.com/400/200"> -->

    <form action="../handler/ingresarBusqueda.php" method="POST" class="col-12 card-body bg-primary">
    
         <div class="form-group">
        <input type="text" id="usuario" required="required" name="usuario" class="form-control" placeholder="Nombre Usuario" maxlength="" minlenght="10">
        </div>
        <br>
        <div class="form-group">
        <input type="password" name="contrasena" required="required" class="form-control" id="contrasena" placeholder="constraseña">
        </div>
        <div class="form-group">
        <input type="password" name="contrasenaConfirmacion" required="required" class="form-control" id="contrasenaConfirmacion" placeholder="&nGg;confirma la constraseña">
        </div>
        <input type="submit" id="crear" class=" btn-block bg-success" value="Crear cuenta" >
    </form>
    </div>
  </div>
  
</section>
  <?php
  if(isset($_GET['rechazo'])){
    echo '<p style="background:rgb(0,0,0);color:rgb(255,0,0);">Lo sentimos alguien ya eligió ese nombre de usuario</p>';
  }
?>



  </div>
  
  
  <!--
  <script src="js/jquery-3.3.1.slim.min"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min"></script>
    -->
    <script type="text/javascript" src="../javaScript/cuenta.js"></script>
</body>
