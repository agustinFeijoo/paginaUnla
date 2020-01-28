<?php 
session_start();
include("../model/validacionCuenta.php");
if(isset($_POST['contrasenaConfirmacion'])){//QUIERE DECIR QUE ME LO MANDA DESDE CREACION CUENTA
    try{

        $cuentaNueva=new RegistrarCuenta($_POST['usuario'],$_POST['contrasena'],$_POST['contrasenaConfirmacion']);
        if($cuentaNueva->validacionCuenta($_POST['usuario'],$_POST['contrasena'],$_POST['contrasenaConfirmacion'])){
            $cuentaNueva->insersion();//inserto a BD
            RegistrarCuenta::iniciarSesion($_POST['usuario'],$_POST['contrasena']);
            header('location:../view/mediosDeComunicacionConPHP.php');
        }else{
            header('location:../view/creacionCuenta.php?rechazo=1');}
        
         }catch(Exception $e){//
            die("Error".$e->getMessage()." en la linea".$e->getLine());
    }

    }else{//ME LO MANDA DESDE INGRESO
    if(RegistrarCuenta::iniciarSesion($_POST['usuario'],$_POST['contrasena'])){
        //la cuenta existe y le inicio sesion
        header('location:../view/mediosDeComunicacionConPHP.php');
    }
    else{
        header("location:../view/index.php?existe=false");}
    }
?>