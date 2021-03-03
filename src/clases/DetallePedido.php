<?php
    class DetallePedido{
        public $item;
        public $cantidad;
        public $subTotal;
        public $precio;
        public $costoEnvio;

        public function __construct($item, $cantidad, $subTotal, $precio, $costoEnvio){
            $this->item = $item;
            $this->cantidad = $cantidad;
            $this->subTotal = $subTotal;
            $this->precio = $precio;
            $this->costoEnvio = $costoEnvio;
        }

        public function getItem(){
            return $this->item;
        }

        public function setItem($item){
            $this->item = $item;
        }

        public function getCantidad(){
            return $this->cantidad;
        }

        public function setCantidad($cantidad){
            $this->cantidad = $cantidad;
        }

        public function getSubTotal(){
            return $this->subTotal;
        }

        public function setSubTotal($subTotal){
            $this->subTotal = $subTotal;
        }

        public function getPrecio(){
            return $this->precio;
        }

        public function setPrecio($precio){
            $this->precio = $precio;
        }

        public function getCostoEnvio(){
            return $this->costoEnvio;
        }

        public function setCostoEnvio($costoEnvio){
            $this->costoEnvio = $costoEnvio;
        }
    }
?>