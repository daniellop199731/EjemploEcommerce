<?php

    class DetallePedido{
        public $item;
        public $cantidad;
        public $subTotal;
        public $precio;
        public $costoEnvio;

        public function __construct($item, $cantidad, $costoEnvio){
            $this->item = $item;
            $this->cantidad = $cantidad;                        
            $this->subTotal = $this->cantidad * $this->precio;
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
            $producto = $this->item;
            $cantidad = $this->cantidad;
            if( $producto->tipo == "peso" ){
                #echo "<br> Peso ".$producto->nombre. " --- " . $cantidad ;
                return $producto->peso * $producto->precio;
            } else if ( $producto->tipo == "descuento" ){    
                #echo "<br> Descuento ".$producto->nombre. " --- " . $cantidad ;         
                if( $cantidad >= 3 && $cantidad < 6  ){
                    return ($cantidad * $producto->precio) - ($cantidad * $producto->precio)*0.2;
                } else if( $cantidad >= 6 && $cantidad < 9  ){
                    return ($cantidad * $producto->precio) - ($cantidad * $producto->precio)*0.4;
                } else if( $cantidad >= 9 ){
                    return ($cantidad * $producto->precio) - ($cantidad * $producto->precio)*0.5;
                }                
            } else {
                #echo "<br>".$producto->nombre. " --- " . $cantidad ;
                return $cantidad * $producto->precio;
            }            
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