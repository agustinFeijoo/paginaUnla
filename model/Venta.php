<?php

     class Venta{
        private $conexion;
        private $id;
        private $comentarios;
        private $titulo;
        private $imagen;
        private $fecha;
        private $idCuenta;

        public function __construct($conexion){
            $this->conexion=$conexion;
        }
        public function getIdCuenta(){
            return $this->idCuenta;
        }
        public function setIdCuenta($idCuenta){
            $this->idCuenta=$idCuenta;
        }
        public function getId(){
            return $this->id;
        }
        public function getTitulo(){
            return $this->titulo;
        }
        public function getComentario(){
            return $this->comentario;
        }
        public function getImagen(){
            return $this->imagen;
        }
        public function getFecha(){
            return $this->fecha;
        }
        public function setId($id){
            $this->id=$id;
        }
        public function setTitulo($titulo){
            $this->titulo=$titulo;
        }
        public function setComentario($comentario){
            $this->comentario=$comentario;
        }
        public function setImagen($imagen){
            $this->imagen=$imagen;
        }
        public function setFecha($fecha){
            $this->fecha=$fecha;
        }

    }












?>