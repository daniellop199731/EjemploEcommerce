<?php
    class Producto{
        public $id;
        public $sku;
        public $precio;
        public $peso;
        public $tipo;
        public $fotoProducto; #De tipo FotoProducto
        public $categoria; #De tipo Categoria

        public function __construct($id,$sku,$precio,$peso,$tipo, $fotoProducto, $categoria){
            $this->id = $id;
            $this->sku = $sku;
            $this->precio = $precio;
            $this->peso = $peso;
            $this->tipo = $tipo;
            $this->fotoProducto = $fotoProducto;
            $this->categoria = $categoria;
        }

        public function getId(){
            return $this->id;
        }

        public function setId($id){            
            $this->id = $id;
        }

        public function getSku(){
            return $this->sku;
        }

        public function setSku($sku){
            $this->sku = $sku;
        }

        public function getPrecio(){
            return $this->precio;
        }

        public function setPrecio($precio){
            $this->precio = $precio;
        }

        public function getPeso(){
            return $this->peso;
        }

        public function setPeso($peso){
            $this->pesp = $peso;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function setTipo($tipo){
            return $this->tipo = $tipo;
        }

        public function getFotoProducto(){
            return $this->fotoProducto;
        }

        public function setFotoProducto($fotoProducto){
            $this->fotoProducto = $fotoProducto;
        }

        public function getCategoria(){
            return $this->categoria;
        }

        public function setCategoria($categoria){
            $this->categoria = $categoria;
        }        
    }
?>