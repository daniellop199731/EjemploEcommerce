<?php
    class Producto{
        public $id;
        public $nombre;
        public $sku;
        public $precio;
        public $peso;
        public $tipo;


        public function __construct($id, $nombre, $sku, $precio, $peso, $tipo){
            $this->id           = $id;
            $this->nombre       = $nombre;
            $this->sku          = $sku;
            $this->precio       = $this->calcularPrecio($precio, $sku, $peso);
            $this->peso         = $peso;
            $this->tipo         = $tipo;
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
        
        public function calcularPrecio($precio, $sku, $peso){
            $sku = substr($sku, 0, 2);
            switch ($sku):
                case $sku == "EA":
                    return ($precio);
                    break;
                case $sku == "WE":
                    $precio_calculado = (1000*$precio)/$peso;
                    return ($precio_calculado);
                    break;
                case $sku == "SP":
                    return ($precio);
                    break;
                default:
                    return ($precio);
            endswitch;
        }
    }
?>