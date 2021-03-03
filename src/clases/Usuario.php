<?php
    class Usuario{
        public $nombre;
        public $nombreUsuario;
        public $email;
        public $password;

        public function __construct($nombre, $nombreUsuario, $email, $password){
            $this->nombre = $nombre;
            $this->nombreUsuario = $nombreUsuario;
            $this->email = $email;
            $this->password = $password;
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

        public function getpassword(){
            return $this->password;
        }        
        
        public function setpassword($password){
            $this->password = $password;
        } 
        
        public function eliminarCliente(){
            $this->nombre = '';
            $this->nombreUsuario = '';
            $this->email = '';
            $this->password = '';
            #Se puede reemplazar por funcion que haga delete de este registro en la base de datos
        }

        public function modificarCliente($nuevoNombre, $nuevoNombreUsaurario, $nuevoEmail, $nuevoPassword){
            $this->nombre = $nuevoNombre;
            $this->nombreUsuario = $nuevoNombreUsaurario;
            $this->email = $nuevoEmail;
            $this->password = $nuevoPassword;            
            #Se puede reemplazar por funcion que haga update de este registro en la base de datos
        }

        public function consultarCliente(){
            return "{$this->nombre}  {$this->nombreUsuario} {$this->email} {$this->password}";
        }

    }
?>