<?php
//Enrique Michael y David
class Usuario {
    protected $nombre;
    protected $apellido;
    protected $direccion;
    protected $email;
    protected $confirmacion;
    protected $dni;
    protected $contrasena;
    
public function empiezaMayus($nombre){
    $ok=0;
    if(ord($nombre[0])>=65 && ord($nombre[0])<=90 ){//empieza mayúsc ula
        if( letras($nombre)){
         $this->nombre = $nombre;
        $ok=1;
        }
    }
    return $ok;
}
public function todoLetras($palabra){
    $error=0;
    for($i=0;$i<strlen($palabra);$i++){ //seria mas eficiente con while pero empezamos con for       
        if(!(ord($nombre[0])>=65 && ord($nombre[0])<=90 || ord($nombre[0])>=97 && ord($nombre[0])<=122) ){
            $error=1;
        }
    }
    return $error;
}
public function todoNumero($cadena){
    $error=0;
    $i=0;
    while(!$error || $i<strlen($cadena)){
        if($cadena[$i]>=48 && $cadena[$i]<=57){
            $i++;
        }else{
            $error=1;
        }
    }
    return $error;
}
public function contMayus($cadena){
    $cont=0;
    for($i=0;$i<strlen($cadena);$i++){
        if(ord($cadena[$i])>=65 && ord($cadena[$i])<=90 ){
            $cont++;
        }
    }
    return $cont;
}
public function contMinus($cadena){
    $cont=0;
    for($i=0;$i<strlen($cadena);$i++){
       if(ord($cadena[$i])>=97 && ord($cadena[$i])<=122){
            $cont++;
       }
    }
    return $cont;
}
public function contNum($cadena){
    $cont=0;
    for($i=0;$i<strlen($cadena);$i++){
        if(ord($cadena[$i])>=48 && ord($cadena[$i])<=57){
            $cont++;
        }
    }
    return $cont;
}
public function contSig($cadena){
    $cont=0;
    for($i=0;$i<strlen($cadena);$i++){
        if(ord($cadena[$i])>=33 && ord($cadena[$i])<=47){
            $cont++;
       }
    }
    return $cont;
}
public function dnieOk($dni){
    if(strlen($dni)==9){
        if(todoLetras($dni[8])){
            if(!todoNumero($dni)){
                $this->dni = $dni;
            }
        }
    }
}
    public function __construct($nombre,$apellido,$direccion,$email,$confirmacion,$dni,$contrasena){
//nombre: todos los nombres deben empezar por mayúscula
// y el campo no admite número o símbolos, únicamente letra.
       if(empiezaMayus($nombre)){
            if(!(todoLetras($nombre))){ //si no dio error es que son letras to
                $this->nombre = $nombre;
            }
       }
        //apellidos: todos los apellidos deben empezar por mayúsculas 
        //y el campo no admite números o símbolos.
        if(empiezaMayus($apellido)){
            if(!(todoLetras($apellido))){
                $this->apellido = $apellido;
            }
        }
        //formato tipo via /nombree via, nº , resto de datos, cp, poblacion y país (separados por ,)
        $this->direccion = $direccion;
        //e mail y confirmación sean igual
        if($email==$confirmacion){
            $this->email = $email;
        }
        //$this->confirmacion = $confirmacion;
        //DNI valido 9caracteres (8numeros 1 letra)
        
        /* 8 caracteres max 20 
        al menos:
        1 mayus 
        1 min 
        2 numero
        1 signo*/
        
        if(strlen($contrasena)>=8 && strlen($contrasena)<=20){
            if(cantMayus($contrasena)>0){
                if(cantMinus($contrasena)>0){
                    if(contNum($cadena>1)){
                        if(contSig($cadena)>0){
                            $this->contrasena = $contrasena;
                        }
                    }   
                }
                
            }
        }
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
    /*
    public function getConfirmacion(){
        return $this->confirmacion;
    }*/
    
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
    /*public function setConfirmacion($confirmacion){
        $this->confirmacion = $confirmacion;

    }*/
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