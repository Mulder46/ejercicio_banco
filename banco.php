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
    public function setNombre($nombre){
        $this->nombre = $nombre;

    }
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
    
    public function setDireccion($direccion){
        $this->direccion = $direccion;

    }
    public function setEmail($email){
        $this->email = $email;

    }
    public function setConfirmacion($confirmacion){
        $this->confirmacion = $confirmacion;

    }
    public function setDni($dni){
        $this->dni = $dni;
    }
    public function setContrasena($contrasena){
        $this->contrasena = $contrasena;
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
$usuario->setNombre("David");
$usuario->setApellido("León");
$usuario->setDireccion("calle verdadera 321");
$usuario->setEmail("pues@si.es");
$usuario->setConfirmacion("pues@no.es");
$usuario->setDni("5574648r");
$usuario->setConfirmacion("contrase");
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

echo "<br>";

?>