<?php
include("../model/ManejoObjetos.php");
try{
    $miConexion=new PDO("mysql:host=localhost;dbname=blog","root","");
    $miConexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $manejoObjetos=new ManejoObjetos($miConexion);
    $tablaBlog=$manejoObjetos->getventaPorFecha();
    if(empty($tablaBlog)){
        echo"Aún no hay entradas";}
        else{
            foreach($tablaBlog as $valor){
                echo "<h3>".$valor->getTitulo()."</h3>";
                echo"<h4>".$valor->getFecha()."</h4>";
                echo "<div style='width:400px;'>";
                echo $valor->getComentario()."</div>";
                if($valor->getImagen()!=""){
                    echo "<img src='../imagenes/";
                    echo $valor->getImagen()."'width='300px height='200px'/>";
                }
            }
        }
    }catch(Exception $e){
        die("Error".$e->getMessage()." ".$e->getLine());
    }
    













?>