<?php

class Usuario {
    protected $nombre;
    protected $apellido;
    protected $direccion;
    protected $email;
    protected $confirmacion;
    protected $dni;
    protected $contrasena;
    public function __construct($nombre,$apellido,$direccion,$email,$confirmacion,$dni,$contrasena){

        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->direccion = $direccion;
        $this->email = $email;
        $this->confirmacion = $confirmacion;
        $this->dni = $dni;
        $this->contrasena = $contrasena;
    }
    public function getNombre(){
        return $this->nombre;

    }
    
    public function getApellido(){
        return $this->apellido;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getConfirmacion(){
        return $this->confirmacion;
    }
    public function getDni(){
        return $this->dni;
    }
    public function getContrasena(){
        return $this->contrasena;
    }
} 


$usuario = new Usuario("Michael","Ferreduela","calle falsa 123","quientepreguntoxd@gmail","quientepreguntoxj@gmail","1723723p","yopregunte");
echo $usuario->getNombre();
echo "<br>";
echo $usuario->getApellido();
echo "<br>";
echo $usuario->getDireccion();
echo "<br>";
echo $usuario->getEmail();
echo "<br>";
echo $usuario->getConfirmacion();
echo "<br>";
echo $usuario->getDni();
echo "<br>";
echo $usuario->getContrasena();
echo "<br>";
?>