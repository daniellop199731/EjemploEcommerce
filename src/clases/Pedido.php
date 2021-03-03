<?php

    class Pedido{
        public $id;
        public $fecha;
        public $total;
        public $pagado;
        public $estado;
        public $listaDetallesProductos;

        public function __construct($id, $fecha){
            $this->id = $id;
            $this->fecha = $fecha;            
            $this->pagado = 0;
            $this->estado = '';
            $this->listaDetallesProductos = Array();
        }

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getFecha(){
            return $this->fecha;
        }

        public function setFecha($fecha){
            $this->fecha = $fecha;
        }

        public function getTotal(){
            $total = 0;
            foreach ($this->listaDetallesProductos as &$dtProducto){                            
                $total = $total + $dtProducto->getSubTotal();
            }
            echo "<br>";
            echo "<br>";
            return $total;   
        }

        public function setTotal($total){
            $this->total = $total;
        }

        public function getPagado(){
            return $this->pagado;
        }

        public function setPagado($pagado){
            $this->pagado = $pagado;
        }

        public function getEstado(){
            return $this->estado;
        }

        public function setEstado($estado){
            $this->estado = $estado;
        }

        public function eliminarPedido(){
            $this->id = '';
            $this->fecha = '';
            $this->total = '';
            $this->pagado = '';
            $this->estado = '';
        }

        public function consultarPedido(){
            return "{$this->id} {$this->fecha} {$this->total} {$this->pagado} {$this->estado}";
        }

        public function agregarDetallePedido($detallePedido){            
            array_push($this->listaDetallesProductos, $detallePedido);
        }

        public function getListaDetallesProductos(){
            echo '<table>';
            echo'<tr>';
            echo '<th>Producto</th>';
            echo '<th>Cantidad</th>';
            echo '<th>precio</th>';
            echo'</tr>';
            foreach ($this->listaDetallesProductos as &$dtProducto){  
                echo'<tr>';
                echo"<td>" .$dtProducto->item->nombre."</td>";
                echo"<td>" .$dtProducto->cantidad."</td>";
                echo"<td>" .$dtProducto->item->precio. "</td>";
                echo'</tr>';
            }
            echo '</table>';
        }

        public function pagarPedido($debito){
            $total = $this->getTotal();
            if( ($total <= $debito) && ($this->getPagado() == 0) ){
                $this->setPagado(1);
                return $debito - $total;
            } else {
                $this->setPagado(0);
                return "DEBITO INSUFICIENTE";
            }
        }
    }