<?php
    class CompraVenta{
        private $conexion;


        public function __construct(){
            $this->setConexion();
        }
        public function getConexion(){
            return $this->$conexion;
        }

        public function setConexion(){
            try{
            $this->conexion=new PDO('mysql:host=localhost;dbname=paginaunlaPhp','root','root');
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->conexion->exec("SET CHARACTER SET utf8");
            }catch(Exception $e){
                echo "ERROR".$e->getMessage;
            }
        }


        public function mostrarUsuarios(){
            $resultado=$this->conexion->query("SELECT co.idCuenta,c.usuario FROM contacto co INNER JOIN cuenta c ON co.idCuenta=c.idcuenta " );//lo hago porque separado porque despues tengo que diferenciar el id(cuenta) del id(contactos)
            $usuario="estoLoHagoParaQueNoSeRepitaUsuarioPorCadaMedio";
            while($fila=$resultado->fetch(PDO::FETCH_ASSOC)){
                
              if($usuario!==$fila["usuario"]){
               $usuario=$fila["usuario"];
               echo '<div class="miClase" onclick="toggleOverlay('.$fila['idCuenta'].')">'.$fila["usuario"].'</div>';//le paso el idCuenta al overlay,mientras muestro el nombre
               
              }
            }
        }
        public function queryDatosContacto($usuario){
            $datosContacto=$this->conexion->query("SELECT co.idContacto,co.medio,co.identificacion,co.idCuenta,c.usuario FROM contacto co INNER JOIN cuenta c on co.idCuenta=c.idCuenta where c.usuario LIKE '%".$usuario."%'");
            return $datosContacto;
        }
        public function traerDatosPorId($idCuenta){
            $datosContacto=$this->conexion->query("SELECT co.medio,co.identificacion,c.usuario FROM contacto co INNER JOIN cuenta c ON co.idCuenta=c.idcuenta WHERE c.idcuenta=".$idCuenta );
            return $datosContacto;
        }




        
    }



?>