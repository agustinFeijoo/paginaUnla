<?php
 include("../model/compraVenta.php");
 $usuario=$_GET['usuario'];
 $compraVenta=new CompraVenta();
 $compraVenta->setConexion();

 // EL USUARIO INGRESO ALGO?
  if(!empty($usuario)){
//falta seguridad para inyecciones
     $datosContacto=$compraVenta->queryDatosContacto($usuario);
    while($fila=$datosContacto->fetch(PDO::FETCH_ASSOC)){
        if($usuario!==$fila["usuario"]){
            $usuario=$fila["usuario"];
            echo '<div class="miClase" onclick="toggleOverlay('.$fila['idCuenta'].')">'.$fila["usuario"].'</div>';//le paso el idCuenta al overlay,mientras muestro el nombre
            
           }
            echo '<input type="hidden" idcuenta="'.$fila['idCuenta'].'-'.$fila['idContacto'].'" value="'.$fila['medio'].'">';//Le pongo el idCuenta y el id del medio para identificarlo en JS.html
            echo '<input type="hidden" value="'.$fila['identificacion'].'">';
    }
  //  mysqli_close($conexion);
     }else{
         $compraVenta->mostrarUsuarios();
     }

   




?>