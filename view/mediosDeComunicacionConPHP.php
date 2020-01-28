<?php
session_start();
$usuario=$_SESSION['usuario'];
$contrasena=$_SESSION['contrasena'];
$idCuenta=$_SESSION['id'];
?>
<!DOCTYPE html>
  <html lang="es">
  <head>
    <title>Planilla de datos UNLa</title>
    <meta charset="utf-8">
   
    <link rel="shortcut icon" type="image/x-icon" href="../imagenes/portapapeles.jpg">
    
    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <link rel ="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.css">
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
    <script src="../javaScript/mediosDeComunicacion.js"></script>
  </head>





<body class="" onload="mostrarMedios();onload=mostrarMisVentas();" style="background:rgb(121, 19, 19);">
    <nav class="navbar-brand bg-warning col-12 ">
    <a href="index.php" class="small"> Volver a inicio </a>
    <h3 class="text-center">Formulario de inscripción: estudiante</h3>
    
</nav>

<div id="padreTablas" class="row pt-5 m-4">
    <div class="">
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="">Medios de contacto de <?php 
                echo $usuario; ?></h4>
            </div>
            <form id="formulario" class="card-body bg-info">
                <div class="form-group">
                    <input type="text" name="medio" id="medio" required="required" placeholder="Medio" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" id="identificacion" required="required" name="identificacion" placeholder="Identificacion" class="form-control">
                </div>
                <input type="button" onclick="insertarContacto()" id="crear" value="Guardar" class="btn btn-dark btn-block">
            </form>
        </div>
        
       
    </div>
    <div id="tabla" >
    </div>
</div>

<div class="container "style="margin:auto;">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mimodal">Añadir material para vender</button>
        <div class="modal fade" id="mimodal" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Subir material para vender</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
                    </div>
                <div class="modal-body">
                  <form action="../handler/subidaVentas.php" enctype="multipart/form-data" method="POST" name="venta">
                    <label for="titulo"><i>Qué vas a vender?</i></label>
                     <input type="text" required name="titulo" id="titulo">
                     <br>
                    <label for="precio"><i>A cuánto?</i></label>
                     <input type="number" required>
    
                     <label for="areaComentarios">Deseas comentar algo sobre lo que vendes?</label>
                        <textarea name="areaComentarios" id="areaComentarios" cols="50" rows="3"></textarea>
                        <input type="hidden" name="MAX_TAM" value="2097152">
                        
                        Selecciona una imagen con tamaño menor a 2 MB sobre tu producto <br>
                        <input type="file" required name="imagen" id="imagen">
                </div>
                    <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Enviar">
                    
                    </div>
                    </form>

                </div>
            </div>
        </div>
</div>
    <div class="bg-success w-50 h-50" id="cajaVentas" >
    
    
    
    </div>
</body>

</html>