<?php
session_start();
require("../model/Venta.php");
require("../model/ManejoVentas.php");
try{
    $conexion=new PDO("mysql:host=localhost;dbname=paginaunlaPhp",'root','root');
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $conexion->exec("SET CHARACTER SET utf8");
}catch(Exception $e){
    echo "Error "->$e->getMessage();
}
$manejoVentas=new ManejoVentas($conexion,$_SESSION['id']);


$misVentas=$manejoVentas->traerMisVentas();
while($venta=$misVentas->fetch(PDO::FETCH_ASSOC)){
    echo "<h3>".$venta['titulo'];
}






?>