<?php 
$usuario=$_GET['elemento'];
require("../model/compraVenta.php");
    
$compraVenta=new CompraVenta();
//MUESTRA LOS DATOS DE USUARIO DENTRO DEL OVERLAY
$consulta=$compraVenta->traerDatosPorId($usuario);
$cadena="";
$fila=$consulta->fetch(PDO:: FETCH_ASSOC);
$cadena.="<h3 class='text-success'>".$fila['usuario']."<br></h3>";
$cadena.="<p><strong>".$fila['medio'].":</strong>".$fila['identificacion']." </p>";
while($fila=$consulta->fetch(PDO:: FETCH_ASSOC)){
    $cadena.="<p><strong>".$fila['medio'].":</strong>".$fila['identificacion']."</p>";

}
//$cadena.="<p>".$fila['usuario']."</p>";
echo $cadena;
?>