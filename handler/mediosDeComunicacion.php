<?php 

session_start();
$idCuenta=$_SESSION['id'];
/*
if(empty($_SESSION['usuario'])){    //Esta siendo incluida por mediosDeComunicacio,ya esta iniciada     
  // header("location:../index.php");
}
*/
require("../model/Contacto.php");


$contacto=new Contacto($idCuenta);

    //carga onload
    if(isset($_GET['mostrar'])){
    $contacto->mostrarMedios($idCuenta);
    }
    

    if(isset($_GET['medio'])){//EL GET ES PASADO POR EL SUBMIT,POR LO CUAL TENGO QUE AÑADIR MEDIO
    $medio=$_GET['medio'];
    $identificacion=$_GET['identificacion'];
    $medio=htmlentities(addslashes($_GET['medio']));
    $identificacion=htmlentities(addslashes($_GET['identificacion']));
    $enviado=$contacto->insertarMedio($medio,$identificacion,$idCuenta);//si se envia devuelve 0 sino 1
    $contacto->mostrarMedios($idCuenta);
    
    if($enviado==0){
    echo "<p class='bg-dark text-warning'>solo se pueden poner 5 contactos.</p>";
    }

 }
    //BORRADO   
    if(isset($_GET['borrar'])){
        $contacto->borrarContacto($_GET['idContacto']);
        $contacto->mostrarMedios();
    }

 ?>