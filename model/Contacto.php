
<?php


class Contacto{
   private static $conexion;
   private $idCuenta;


   public function __construct($idCuenta){
   $this->idCuenta=$idCuenta;
   $this->setConexion();
  }

  public function setConexion(){
     self::$conexion=new PDO("mysql:host=localhost;dbname=paginaunlaPhp","root","root");
     self::$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
     self::$conexion->exec("SET CHARACTER SET utf8");
  } 
  public function insertarMedio($medio,$identificacion,$idCuenta){
      $insertado=0;
      $id=$this->calcularContactos();
      if($id<=4){
      
      $resultado1=self::$conexion->query("INSERT INTO contacto(idcontacto,medio,identificacion,idCuenta) VALUES ($id+1,'$medio','$identificacion',$idCuenta)");
      $insertado=1;
      }
      
      return $insertado;
  }
  public function calcularContactos(){
     $contactos=self::$conexion->query("SELECT * FROM contacto where idCuenta='$this->idCuenta'");
     $nroContactos= $contactos->rowCount();
      return $nroContactos;

  }

  public function borrarContacto($idEliminado){
     self::$conexion->query("DELETE FROM contacto WHERE idCuenta=$this->idCuenta AND idcontacto=$idEliminado");
     $nroContactos=$this->calcularContactos();//va a ser un quemadero de neuronas
     //RE ACOMODAR LOS IDCONTACTO
     if($idEliminado>0){//Me protege de que algún salame se meta en consola y me tire -infinito
      for($i=$idEliminado;$i<$nroContactos+1;$i++){
         self::$conexion->query("UPDATE contacto SET idcontacto=$i WHERE idcontacto=$i+1 AND idCuenta=$this->idCuenta");
      }
     }

  }
  




  public function mostrarMedios(){
   $respuesta=self::$conexion->query("SELECT * FROM contacto c WHERE c.idcuenta= '".$this->idCuenta ."' ORDER BY (c.idcuenta) DESC");//no funca el order

echo '<table class="table table-striped table-dark table-bordered ml-5 " >
<thead>
 <tr>
 <th scope="col">NRO </th scope="col"> <th scope="col">MEDIO</th>   <th scope="col">IDENTIFICACION</th><th scope="col">BORRAR </th>
 </thead>
 <tbody>';
 while($fila=$respuesta->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>";
    echo "<th scope='row'>" . $fila['idcontacto']."</th>";
    echo "<td>" . $fila['medio']. "</td> ";
    echo "<td>" . $fila['identificacion']. "</td>";
    


    echo "<td> <input type='button' class='btn bg-danger font-white text-white' onclick='borrarContacto(".$this->idCuenta.",".$fila['idcuenta'].")' value='ELIMINAR' ></td>";
   
    echo "</tr>";
 }

 echo"</tbody></table>";}
}










?>