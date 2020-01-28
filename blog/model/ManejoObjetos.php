<?php

include_once("ObjetoBlog.php");


class ManejoObjetos{
    private static $conexion;
    

    public function __construct(){
        self::$conexion=$this->setConexion();
        }
    public function setConexion(){
        $conexion=new PDO("mysql:host=localhost;dbname=paginaunlaPhp",'root','root');
        self::$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        self::$conexion->exec("SET CHARACTER SET utf8");    
    }
    public function getventaPorFecha(){
        $matriz=array();
        $contador=0;
        $this->setConexion();
        $resultado=self::$conexion->query("SELECT * FROM venta ORDER BY fecha");
        while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
            $blog=new ObjetoBlog();
            $blog->setId($registro["id"]);
            $blog->setFecha($registro["fecha"]);
            $blog->setImagen($registro['imagen']);
            $blog->setTitulo($registro["titulo"]);
            $blog->setComentario($registro['comentario']);
            $matriz[$contador]=$blog;
            $contador++;
        }
        return $matriz;
    }
    public function insertaventa(ObjetoBlog $blog){
        $this->setConexion();
        $sql="INSERT INTO venta(titulo,comentario,imagen,fecha) VALUES('".$blog->getTitulo()."','".$blog->getComentario()."','".$blog->getImagen()."','".$blog->getFecha()."')";
        echo $sql;
        self::$conexion->exec($sql);
    }

}