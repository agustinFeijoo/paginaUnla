<?php
    class RegistrarCuenta{
        

        private $contrasena;
        private $confirmacion;
        private $usuario;
        private static $conexion;


        public function __construct($usuario,$contrasena,$confirmacion){
            $this->contrasena=$contrasena;
            $this->confirmacion=$confirmacion;
            $this->usuario=$usuario;
            $this->setConexion();
        }
        
//  SOLO PARA INICIAR SESIÓN



        public static function iniciarSesion($usuario,$contrasena){
            
          $iniciada=false;
            if(self::existe($usuario,$contrasena)){//puede fallar la conexion si viene desde ingresarBusqueda.php
                self::setConexion();
                $_SESSION['usuario']=$usuario;
                $_SESSION['contrasena']=$contrasena;
                $_SESSION['id']=self::getId($usuario,$contrasena);
                $iniciada=true;
             }
             return $iniciada;

        }
      public static function setConexion(){
        self::$conexion=new PDO('mysql:host=localhost;dbname=paginaunlaPhp','root','root');
        self::$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        self::$conexion->exec("SET CHARACTER SET utf8");
       
      }
        public function validacionCuenta($usuario,$contrasena,$confirmacion){
            $validada=false;      
            if($this->validarConfirmacion($contrasena,$confirmacion)){
                if(!self::existeUsuario($usuario,$contrasena)){
                    $validada=true;
                }
            }
            return $validada;
        }

        //VALIDACION CONFIRMACION IGUAL A constrasena
        public function validarConfirmacion($contrasena,$confirmacion){
            $iguales=false;
        if($contrasena==$confirmacion){//no se si es necesario o basta con en js un prevent default,me parece que no se necesita
        $iguales=true;
        }
        
        return $iguales;
        }
        public static function existeUsuario ($usuario){
            $existe=false;
            self::setConexion();
            $resultado=self::$conexion->query("SELECT * FROM cuenta WHERE usuario='$usuario'");
            $totalFilas=$resultado->rowCount();
            
            if(!$resultado->rowCount()==0){
              //throw Exception("YA EXISTE UNA CUENTA CON ESE USUARIO");
                 $existe=true;
               }
          return $existe;
         }


     //VALIDACION DE QUE NOMBRE Y constrasena NO EXISTAN ANTERIORMENTe
    public static function existe ($usuario,$contrasena){
        $existe=false;
        self::setConexion();
        $resultado=self::$conexion->query("SELECT * FROM cuenta WHERE contrasena='$contrasena' AND usuario='$usuario'");
        $totalFilas=$resultado->rowCount();
        
        if(!$resultado->rowCount()==0){
          //throw Exception("YA EXISTE UNA CUENTA CON ESE USUARIO Y CONTRASEÑA");
             $existe=true;
           }
      return $existe;
     }

      public static function getId($usuario,$contrasena){
          
          $cuenta=self::$conexion->query("SELECT * FROM cuenta WHERE contrasena='$contrasena' AND usuario='$usuario'");
          //$fila=self::$conexion->fetch_array($cuenta);
          $fila=$cuenta->fetch(PDO::FETCH_ASSOC);
          $id=$fila['idcuenta'];
          return $id;

      }

    //INSERSION
    public function insersion(){
    
    self::$conexion->query("INSERT INTO cuenta(usuario,contrasena) VALUES('$this->usuario','$this->contrasena')");
    }
    //REDIRECCIONAMIENTO
    public function redireccionamiento(){
   header('location:../view/mediosDeComunicacionConPHP.php');
    }
}

?>