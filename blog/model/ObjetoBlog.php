<?php

class ObjetoBlog{
    private $id,$titulo,$fecha,$comentario,$imagen;
    public function getId(){
        return $this->id;
    }
    public function getImagen(){
        return $this->imagen;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function getComentario(){
        return $this->comentario;
    }
    public function getFecha(){
        return $this->fecha;
    }
    public function setComentario($comentario){
        $this->comentario=$comentario;
    }
    public function setTitulo($titulo){
        $this->titulo=$titulo;
    }
    public function setImagen($imagen){
        $this->imagen=$imagen;
    }
    public function setFecha($fecha){
        $this->fecha=$fecha;
    }
    public function setId($id){
        $this->id=$id;
    }
}