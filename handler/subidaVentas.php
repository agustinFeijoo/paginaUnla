<?php
session_start();
require("../model/ManejoVentas.php");
require("../model/Venta.php");
$imagenErr=$_FILES['imagen']['error'];
try{
    $conexion=new PDO("mysql:host=localhost;dbname=paginaunlaPhp",'root','root');
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $conexion->exec("SET CHARACTER SET utf8");
}catch(Exception $e){
    echo "Error "->$e->getMessage();
}

 if($imagenErr){
     switch($imagenErr){
         case 1: echo "El archivo excede el límite permitido por el servidor (param upload_max_size de php.ini";
         break;
         case 2: echo "El tamaño del archivo supera el permitido por el formulario (post_max_size de php.ini";
         break;
         case 3: echo "Error de interrupción durante la subida";
         break;
         case 4: echo "El tamaño del archivo es nulo o no se ha enviado";
         break;
     }
 }else{
     echo "se subió correctamente </br>";
 }
 if(isset($_FILES['imagen']['tmp_name'])&& $imagenErr==UPLOAD_ERR_OK){
     $destinoRuta='../imagenesMateriales/';
     move_uploaded_file($_FILES['imagen']['tmp_name'],$destinoRuta.$_FILES['imagen']['name']);
     echo "El archivo ".$_FILES['imagen']['name'] ." copiado con exito"; 
 }else{
     echo "No se ha copiado en el directorio de imagenes";
 }
 //GUARDO LA SUBIDA EN LA BASE DE DATOS
    $venta=new Venta($conexion);
    $manejoVentas=new ManejoVentas($conexion,$_SESSION['id']);

    $venta->setIdCuenta($_SESSION['id']);
    $venta->setComentario(htmlentities(addslashes($_POST['areaComentarios'])));
    $venta->setTitulo(htmlentities(addslashes($_POST['titulo'])));
    $venta->setImagen($_FILES['imagen']['name']);
    $venta->setFecha(date("Y-m-d H:i:s"));
    $manejoVentas->insertaVenta($venta);
  
    header("location:../view/mediosDeComunicacionConPHP.php");


?>