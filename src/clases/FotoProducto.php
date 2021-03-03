<?php
    class FotoProducto{
        public $id;
        public $path;

        public function __construct($id, $path){
            $this->id = $id;
            $this->path = $path;
        }

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getPath(){
            return $this->path;
        }

        public function setPath($path){
            $this->path = $path;
        }
    }
?>