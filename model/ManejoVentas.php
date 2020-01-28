<?php
//include_once("Venta.php");
class ManejoVentas{
    private $conexion;
    private $idCuenta;
    public function __construct($conexion,$idCuenta){
        $this->conexion=$conexion;
        $this->idCuenta=$idCuenta;
    }
    public function insertaVenta(Venta $venta){
        $insertado=0;
        $idVenta=$this->calcularVentas()+1;
        if($idVenta<=3){
            $sql="INSERT INTO venta(idVenta,titulo,comentario,imagen,fecha,idCuenta) VALUES ('".$idVenta."','".$venta->getTitulo()."','".$venta->getComentario()."','".$venta->getImagen()."','".$venta->getFecha()."','".$venta->getIdCuenta()."')";
            $this->conexion->exec($sql);
            $insertado=1;
        }
        return $insertado;
    }
    public function calcularVentas(){
        $ventas=$this->conexion->query("SELECT * FROM venta WHERE idCuenta='$this->idCuenta'");
        $nroVentas=$ventas->rowCount();
        return $nroVentas;
    }
    public function traerMisVentas(){
        $ventas=$this->conexion->query("SELECT * FROM venta WHERE idCuenta='$this->idCuenta'");
        return $ventas;
    }

    

  

/*
    public function borrarVenta($idEliminado){
        self::$conexion->query("DELETE FROM contacto WHERE idCuenta=$this->idCuenta AND id=$idEliminado");
        $nroContactos=$this->calcularVentas();
        //RE ACOMODAR LOS IDCONTACTO
        if($idEliminado>0){//Me protege de que algún salame se meta en consola y me tire -infinito
         for($i=$idEliminado;$i<$nroContactos+1;$i++){
            self::$conexion->query("UPDATE contacto SET id=$i WHERE id=$i+1 AND idCuenta=$this->idCuenta");
            echo $i;
         }
         
        }
    }
    */       
}




?>