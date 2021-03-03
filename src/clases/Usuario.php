<?php
    class Usuario{
        public $nombre;
        public $nombreUsuario;
        public $email;
        public $passWord;

        public function __construct($nombre, $nombreUsuario, $email, $passWord){
            $this->nombre = $nombre;
            $this->nombreUsuario = $nombreUsuario;
            $this->email = $email;
            $this->passWord = $passWord;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function getNombreUsuario(){
            return $this->nombreUsuario;
        }       

        public function setNombreUsuario($nombreUsuario){
            $this->nombreUsuario = $nombreUsuario;
        }
                        
        public function getEmail(){
            return $this->email;
        } 

        public function setEmail($email){
            $this->email = $email;
        }        

        public function getPassWord(){
            return $this->passWord;
        }        
        
        public function setPassword($password){
            $this->password = $password;
        }        

    }
?>