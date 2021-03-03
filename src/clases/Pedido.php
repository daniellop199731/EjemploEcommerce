<?php
    class Pedido{
        public $id;
        public $fecha;
        public $total;
        public $pagado;
        public $estado;

        public function __construct($id, $fecha, $total, $pagado, $estado){
            $this->id = $id;
            $this->fecha = $fecha;
            $this->total = $total;
            $this->pagado = $pagado;
            $this->estado = $estado;
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
            return $this->total;
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
    }